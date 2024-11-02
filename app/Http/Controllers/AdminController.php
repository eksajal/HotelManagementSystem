<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Room;
use App\Models\User;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\SendMailNotification;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{

    public function index()
    {

        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {

                $room = Room::all();

                $gallery = Gallery::all();

                $blog = Blog::all();

                return view('home.index', compact('room','gallery','blog'));

            } elseif ($usertype == 'admin') {

                return view('admin.index');
                
            } else {

                return redirect()->back();
            }
        };
    }

    public function home()
    {
        $room = Room::all();

        $gallery = Gallery::all();

        $blog = Blog::all();

        return view('home.index', compact('room', 'gallery', 'blog'));
    }

    public function create_room()
    {

        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {

        $data = new Room();

        $data->room_title = $request->title;

        $data->description = $request->description;

        $data->price = $request->price;

        $data->wifi = $request->wifi;

        $data->room_type = $request->type;

        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('room', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function view_room()
    {

        $data = Room::all();

        return view('admin.view_room', compact('data'));
    }

    public function room_delete($id)
    {

        $data = Room::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function room_update($id)
    {

        $data = Room::find($id);

        return view('admin.update_room', compact('data'));
    }

    public function edit_room(Request $request, $id)
    {

        $data = Room::find($id);

        $data->room_title = $request->title;

        $data->description = $request->description;

        $data->price = $request->price;

        $data->wifi = $request->wifi;

        $data->room_type = $request->type;

        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('room', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function bookings()
    {

        $data = Booking::all();

        return view('admin.booking', compact('data'));

    }

    public function delete_booking($id)
    {

        $data = Booking::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function approve_booking($id)
    {

        $booking = Booking::find($id);

        $booking->status = 'approved';

        $booking->save();

        return redirect()->back();
    }


    public function reject_booking($id)
    {

        $booking = Booking::find($id);

        $booking->status = 'rejected';

        $booking->save();

        return redirect()->back();
    }

    public function view_gallery()
    {

        $gallery = Gallery::all();

        return view('admin.gallery', compact('gallery'));
    }

    public function upload_gallery(Request $request)
    {

        $data = new Gallery();

        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('gallery', $imagename);

            $data->image = $imagename;

            $data->save();

            return redirect()->back();
        }
    }


    public function delete_gallery($id)
    {

        $data = Gallery::find($id);

        $data->delete();

        return redirect()->back();
    }


    public function view_blog()
    {

        $blog = Blog::all();

        return view('admin.blog', compact('blog'));
    }

    public function upload_blog(Request $request)
    {

        $data = new Blog();

        $data->title = $request->title;

        $data->sub_title = $request->sub_title;

        $data->description = $request->description;

        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('blog', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }


    public function delete_blog($id)
    {

        $data = Blog::find($id);

        $data->delete();

        return redirect()->back();
    }



    public function blog_update($id)
    {
        $data = Blog::find($id);

        return view('admin.update_blog', compact('data'));
    }



    public function edit_blog(Request $request, $id)
    {

        $data = Blog::find($id);

        $data->title = $request->title;

        $data->sub_title = $request->sub_title;

        $data->description = $request->description;


        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('blog', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }



    public function all_messages(){

        $data = Contact::all();

        return view('admin.all_message', compact('data'));

    }


    public function delete_message($id){

        $data = Contact::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function send_mail($id){

        $data = Contact::find($id);

        return view('admin.send_mail', compact('data'));

    }

    public function mail(Request $request, $id){

        $data = Contact::find($id);

        $details = [

            'greeting' => $request->greeting,

            'body' => $request->body,

            'action_text' => $request->action_text,

            'action_url' => $request->action_url,

            'endline' => $request->endline

        ];


        Notification::send($data, new SendMailNotification($details));

        return redirect()->back();

    }


    public function subscribers(){

        $data = Subscribe::all();

        return view('admin.subscribers', compact('data'));

    }

    public function delete_subscriber($id){

        $data = Subscribe::find($id);

        $data->delete();

        return redirect()->back();

    }


}
