<!DOCTYPE html>
<html>

<head>

    <base href="/public">
    @include('admin.css')


    <style>

        .page-content {
            width: 100%;
            padding: 0 20px;
            padding-bottom: 60px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div-deg {
            padding: 15px;
        }

        .div-center {
            margin-left: 400px;
            margin-top: 15px;
            margin-bottom: 60px;
            display: inline-block;
            width: 470px;
            border-bottom: 7px solid red;
            border-top: 7px solid red;
        }

        .intro {
            font-size: 45px;
            font-weight: bold;
            color: gray;
            margin-left: 420px;
            border: 7px solid red;
            display: inline-block;
            border-right: none;
            border-top: none;
            border-bottom: none;
        }

        .btn {
            border: 2px solid red;
            color: gray;
            background-color: black;
            font-size: 15px;
            font-weight: bold;
            border-left: none;
            border-top: none;
        }

        .btn:hover {
            color: red;
        }

        .room-img {
            width: 250px;
            height: 170px;
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
            <h1>Update Room Details</h1>
        </div>



        <div class="div-center">

            <form action="{{ url('edit_room', $data->id) }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div-deg">
                    <label for="">Room Title</label>
                    <input type="text" name="title" value="{{ $data->room_title }}">
                </div>

                <div class="div-deg">
                    <label for="">Description</label>
                    <textarea name="description">{{ $data->description }}</textarea>
                </div>

                <div class="div-deg">
                    <label for="">Price</label>
                    <input type="number" name="price" value="{{ $data->price }}">
                </div>

                <div class="div-deg">
                    <label for="">Room Type</label>
                    <select name="type">
                        <option selected value="{{ $data->room_type }}">{{ $data->room_type }}</option>
                        <option value="regular">Regular</option>
                        <option value="premium">Premium</option>
                        <option value="deluxe">Deluxe</option>
                    </select>
                </div>

                <div class="div-deg">
                    <label for="">Wifi</label>
                    <select name="wifi">
                        <option selected value="{{ $data->wifi }}">{{ $data->wifi }}</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="div-deg">
                    <label for="">Current Image</label>
                    <img class="room-img" src="/room/{{ $data->image }}" alt="">
                </div>


                <div class="div-deg">
                    <label for="">Upload New Image</label>
                    <input type="file" name="image">
                </div>


                <div class="div-deg">
                    <input type="submit" class="btn" value="Update Room">
                </div>

            </form>

        </div>
    </div>
    @include('admin.footer')

</body>

</html>
