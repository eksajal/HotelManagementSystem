<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function room_details($id)
    {

        $room = Room::find($id);

        return view('home.room_details', compact('room'));
    }

    public function add_booking(Request $request, $id)
    {

        $request->validate([

            'startDate' => 'required|date',

            'endDate' => 'date|after:startDate'


        ]);

        $data = new Booking();

        $data->room_id = $id;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;



        $startDate = $request->startDate;

        $endDate = $request->endDate;

        $isBooked = Booking::where('room_id', $id)
            ->where('start_date', '<=', $endDate)
            ->where('end_date', '>=', $startDate)->exists();

        if ($isBooked) {

            return redirect()->back()->with('message', 'Room is already booked. Please try different date');
        } else {

            $data->start_date = $request->startDate;

            $data->end_date = $request->endDate;


            $data->save();

            return redirect()->back()->with('message', 'Room booked successfully!');
        }
    }


    public function blog_details($id)
    {

        $blog = Blog::find($id);

        return view('home.blog_details', compact('blog'));
    }


    public function contact(Request $request)
    {

        $contact = new Contact();

        $contact->name = $request->name;

        $contact->email = $request->email;

        $contact->phone = $request->phone;

        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message', 'Message sent successfully!');
    }


    public function about_page()
    {

        return view('home.about_page');
    }

    public function room_page()
    {

        $room = Room::all();

        return view('home.room_page', compact('room'));
    }

    public function gallery_page()
    {

        $gallery = Gallery::all();

        return view('home.gallery_page', compact('gallery'));
    }

    public function blog_page()
    {

        $blog = Blog::all();

        return view('home.blog_page', compact('blog'));
    }

    public function contact_page()
    {

        return view('home.contact_page');
    }



    public function online_booking(Request $request)
    {
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
        ]);

        if ($request->startDate === $request->endDate) {
            return redirect()->back()
                ->withErrors(['date_error' => 'Arrival and departure dates cannot be the same.'])
                ->withInput();
        }

        session([
            'start_date' => $request->startDate,
            'end_date' => $request->endDate,
        ]);

        return redirect()->route('select_room');
    }



    public function select_room()
    {

        $room = Room::all();

        return view('home.select_room', compact('room'));
    }



    public function roomSelected_details($id)
    {

        $room = Room::find($id);

        $startDate = session('start_date');
        $endDate = session('end_date');

        return view('home.roomSelected_details', compact('room', 'startDate', 'endDate'));
    }



    public function roomSelected_booking(Request $request, $id)
    {

        $request->validate([

            'startDate' => 'required|date',

            'endDate' => 'required|date|after:startDate'


        ]);


        $data = new Booking();

        $data->room_id = $id;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;

        $data->start_date = $request->startDate;

        $data->end_date = $request->endDate;



        $isBooked = Booking::where('room_id', $id)
            ->where('start_date', '<=', $request->endDate)
            ->where('end_date', '>=', $request->startDate)->exists();

        if ($isBooked) {

            return redirect()->back()
                ->with('message', 'The room is already booked.Please try different dates.Or select other rooms.')
                ->withInput();
        } else {

            $data->save();

            return redirect()->back()->with('message', 'Room booked successfully!');
        }
    }


    public function subscribe(Request $request){

        $data = new Subscribe();

        $data->email = $request->email;

        $data->save();
        
        return redirect()->back()->with('message', 'You have subscribed successfully!');

    }


}
