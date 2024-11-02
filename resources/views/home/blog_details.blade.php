<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    @include('home.css')


    <!-------------------Style for every 'btn' class----------------->
    <style>
        .btn {
            border: 2px solid red;
            color: gray;
            background-color: black;
            font-size: 15px;
            font-weight: bold;
            border-left: none;
            border-top: none;
            margin-top: 15px;
        }

        .btn:hover {
            color: red;
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
   


    <div class="row" style="margin-top: 30px;">

        
            
        <div class="col-md-12">
            <div class="blog_box">
                <div class="blog_img">
                    <figure><img style="width: 60%; margin-left: 290px;" src="/blog/{{ $blog->image }}" alt="#" /></figure>
                </div>
                <div class="blog_room">
                    <h1 style="text-align: center; font-size: 50px;">{{ $blog->title }}</h1>
                    <h2 style="text-align: center; color:red; font-size: 20px; border-bottom: 3px solid red;">{{ $blog->sub_title }}</h2>
                    <p style="text-align: center; font-size: 30px; padding: 45px; border-bottom: 3px solid red;">{{ $blog->description }}</p>
                </div>
            </div>
        </div>

        
    </div>



    @include('home.footer')

    <!-- end footer -->

</body>

</html>
