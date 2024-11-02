<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-------------------Style for every 'btn' class----------------->
    <style>
        .btn-booking {
            border: 2px solid red;
            color: gray;
            background-color: black;
            font-size: 18px;
            font-weight: bold;
            border-left: none;
            border-top: none;
            margin-top: 15px;
            padding: 4px;
        }

        .btn-booking:hover {
            color: red;
        }


        .intro {

            color: gray;
            margin-left: 10px;
            border: 3px solid red;
            display: inline-block;

            background-color: black;

            border-bottom: none;
            border-right: none;
            width: 350px;
            text-align: center;
        }

        .intro h1 {
            font-size: 20px;
            font-weight: bold;
            color: gray;
        }


        label {
            display: inline-block;
            width: 350px;
        }

        input {
            width: 350px;
        }

        .div-deg {
            padding: 10px;
        }
    </style>


</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>

        @include('home.header')

    </header>
    <!-- end header inner -->
    <!-- end header -->

    <!------------Room Details------------>


    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>{{ $room->room_title }}</h2>
                        <p>{{ $room->description }}</p>
                    </div>
                </div>
            </div>
            <div class="row">


                <div class="col-md-8">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img width="375" height="232" src="room/{{ $room->image }}" alt="#" />
                            </figure>
                        </div>
                        <div class="bed_room">

                            <h4 style="padding: 10px; border-top: 3px solid red;">Room Type: <b
                                    style="font-size: 20px">{{ $room->room_type }}</b>
                            </h4>

                            <h4 style="padding: 10px">Wifi: <b style="font-size: 18px;">{{ $room->wifi }}</b></h4>

                            <h2 style="padding: 10px; font-size: 20px; border-bottom: 3px solid red;">Price: <b>{{ $room->price }}$</b></h2>

                        </div>
                    </div>
                </div>

                <div class="col-md-4" style="margin-top: 140px; padding-left: 20px;">

                    <div class="intro">
                        <h1>>Enter Your Details</h1>
                    </div>

                    <div style="margin-left: 10px">

                        @if (session()->has('message'))
                            <div class="alert alert-success" style="width: 350px;">
                                <button type="button" class="close" data-bs-dismiss='alert'>X</button>
                                {{ session()->get('message') }}
                            </div>
                        @endif

                    </div>

                    @if ($errors)

                        @foreach ($errors->all() as $errors)
                            <li style="color: red; padding-left: 15px;  width: 350px;">Errors!!! {{ $errors }}</li>
                        @endforeach

                    @endif

                    <form action="{{ url('roomSelected_booking', $room->id) }}" method="POST">
                        @csrf

                        <div class="div-deg">
                            <label for="">Name</label>
                            <input type="text" name="name"
                                value="{{ old('name', Auth::check() ? Auth::user()->name : '') }}">
                        </div>


                        <div class="div-deg">
                            <label for="">Email</label>
                            <input type="text" name="email"
                                value="{{ old('email', Auth::check() ? Auth::user()->email : '') }}">
                        </div>

                        <div class="div-deg">
                            <label for="">Phone</label>
                            <input type="number" name="phone"
                                value="{{ old('phone', Auth::check() ? Auth::user()->phone : '') }}">
                        </div>

                        <div class="div-deg">
                            <label for="">Start Date</label>
                            <input type="date" name="startDate" id="startDate"
                            value="{{ old('startDate', session('start_date')) }}">
                        </div>

                        <div class="div-deg">
                            <label for="">End Date</label>
                            <input type="date" name="endDate" id="endDate" value="{{ old('endDate', session('end_date')) }}">
                        </div>

                        <div class="div-deg">
                            <input type="submit" class="btn-booking" value="Book Room">
                        </div>

                    </form>

                </div>


            </div>
        </div>
    </div>



    <!----------Room Details End--------->



    <!--  footer -->

    @include('home.footer')

    <!-- end footer -->


    <script>
        $(function() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if (month < 10)
                month = '0' + month.toString();

            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</body>

</html>
