<!DOCTYPE html>
<html>

<head>

    @include('admin.css')


    <style>
        td {
            border-bottom: 7px solid red;
            padding: 25px;
            text-align: center;
        }

        th {
            border-bottom: 7px solid red;
            padding: 25px;
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


        table{
            
            margin-top: 15px;
            margin-bottom: 100px;
            width: 100%;
            border-collapse: collapse;
            
        }

        .room-img {
            width: 650px;
            height: 150px; 
        }

        .intro {
            font-size: 45px;
            font-weight: bold;
            color: gray;
            margin-left: 470px;
            border: 7px solid red;
            display: inline-block;
            border-top: none;
            border-right: none;
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
            <h1>View Rooms</h1>
        </div>


        <table>
            <tr>
                <th>Room Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Wifi</th>
                <th>Room Type</th>
                <th>Image</th>
                <th>Action1</th>
                <th>Action2</th>
            </tr>


            @foreach ($data as $data)
                <tr>
                    <td>{{ $data->room_title }}</td>
                    <td>{{ Str::limit($data->description, 100) }}</td>
                    <td>{{ $data->price }}$</td>
                    <td>{{ $data->wifi }}</td>
                    <td>{{ $data->room_type }}</td>
                    <td>
                        <img class="room-img" src="room/{{ $data->image }}" alt="">
                    </td>

                    <td>
                        <a class="btn btn-secondary" href="{{ url('room_update',$data->id) }}">Update</a>
                    </td>

                    <td>
                        <a onclick="return confirm('Are you sure?');" class="btn btn-danger" href="{{ url('room_delete',$data->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach

        </table>


    </div>
    </div>
    @include('admin.footer')

</body>

</html>
