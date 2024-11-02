<!DOCTYPE html>
<html>

<head>

    @include('admin.css')


    <style>
        td {
            border-bottom: 7px solid red;
            padding: 8px;
            text-align: center;
        }

        th {
            border-bottom: 7px solid red;
            padding: 8px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: blue;
        }


        .page-content {
            width: 100%;
            padding: 0 20px;
            padding-bottom: 60px;
        }


        table {

            margin-top: 15px;
            margin-bottom: 100px;
            width: 100%;
            border-collapse: collapse;

        }


        .intro {
            font-size: 45px;
            font-weight: bold;
            color: gray;
            margin-left: 450px;
            border: 7px solid red;
            display: inline-block;
            border-top: none;
            border-right: none;
        }

        .room-img {
            width: 300px;
            height: 50px;
        }


    </style>

</head>

<body>

    @include('admin.header')


    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

            </div>
        </div>


        <div class="intro">
            <h1>Booking Summary</h1>
        </div>


        <table>
            <tr>
                <th>Room Id</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Arrival Date</th>
                <th>Departure Date</th>
                <th>Room Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status Update</th>
                <th>Delete</th>
            </tr>


            @foreach ($data as $data)
                <tr>
                    <td>{{ $data->room_id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>

                        @if ($data->status == 'waiting')

                        <span style="color: skyblue" >Waiting</span>
                            
                        @endif

                        @if ($data->status == 'approved')

                        <span style="color: green" >Approved</span>
                            
                        @endif

                        @if ($data->status == 'rejected')

                        <span style="color: red" >Rejected</span>
                            
                        @endif

                    </td>
                    <td>{{ $data->start_date }}</td>
                    <td>{{ $data->end_date }}</td>
                    <td>{{ $data->room->room_title }}</td>
                    <td>{{ $data->room->price }}$</td>

                    <td>
                        <img class="room-img" src="room/{{ $data->room->image }}" alt="">
                    </td>

                    <td>
                        <span style="padding-bottom: 10px">
                            <a class="btn btn-success" style="padding: 3px;" href="{{ url('approve_booking', $data->id) }}">Approve</a>
                        </span>

                        <span>
                            <a class="btn btn-danger" style="padding: 2px;" href="{{ url('reject_booking', $data->id) }}">Rejected</a>
                        </span>
                    </td>

                    <td>
                        <a onclick="return confirm('Are you sure?');" class="btn btn-danger"
                            href="{{ url('delete_booking', $data->id) }}">Delete</a>
                    </td>

                </tr>
            @endforeach

        </table>


    </div>
    </div>
    @include('admin.footer')

</body>

</html>
