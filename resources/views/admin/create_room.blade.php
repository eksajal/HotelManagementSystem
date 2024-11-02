<!DOCTYPE html>
<html>

<head>

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
            color: black;
        }

        .div-deg {
            padding: 15px;
        }

        .div-center {
            margin-left: 400px;
            margin-top: 15px;
            margin-bottom: 60px;
            display: inline-block;
            width: 450px;
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
            <h1>Enter Room Details</h1>
        </div>



        <div class="div-center">

            <form action="{{ url('add_room') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div-deg">
                    <label for="">Room Title</label>
                    <input type="text" name="title">
                </div>

                <div class="div-deg">
                    <label for="">Description</label>
                    <textarea name="description"></textarea>
                </div>

                <div class="div-deg">
                    <label for="">Price</label>
                    <input type="number" name="price">
                </div>

                <div class="div-deg">
                    <label for="">Upload Image</label>
                    <input type="file" name="image">
                </div>

                <div class="div-deg">
                    <label for="">Room Type</label>
                    <select name="type">
                        <option value="standard">Standard Room</option>
                        <option value="deluxe">Deluxe Room</option>
                        <option value="suite">Suite</option>
                        <option value="family">Family Room</option>
                        <option value="executive">Executive Room</option>
                        <option value="junior_suite">Junior Suite</option>
                    </select>
                </div>

                <div class="div-deg">
                    <label for="">Wifi</label>
                    <select name="wifi">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="div-deg">
                    <input type="submit" class="btn" value="Add Room">
                </div>

            </form>

        </div>

    </div>
    @include('admin.footer')

</body>

</html>
