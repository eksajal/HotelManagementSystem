<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.css')


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>


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
    <!-- end header inner -->
    <!-- end header -->

 
    <!-- blog -->

    @include('home.blog')

    <!-- end blog -->
   
    <!--  footer -->

    @include('home.footer')

    <!-- end footer -->


</body>

</html>