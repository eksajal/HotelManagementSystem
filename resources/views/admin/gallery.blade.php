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
            margin-left: 540px;
            border: 7px solid red;
            display: inline-block;
            border-right: none;
            border-top: none;
            margin-bottom: 20px;
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

        .gallery-img {
            width: 278px;
            height: 236px;
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
            <h1>Gallery</h1>
        </div>

        <div class="row" style="margin-left: 75px; margin-bottom: 20px;">

            @foreach ($gallery as $gallery)

            <div class="col-md-4">
                <img class="gallery-img" src="/gallery/{{ $gallery->image }}" alt="">

                <a class="btn" style="margin-bottom: 30px; margin-left: 100px;" href="{{ url('delete_gallery', $gallery->id) }}">Delete</a>
            </div>
                
            @endforeach

        </div>


        <div class="div-center">

            <form action="{{ url('upload_gallery') }}" method="POST" enctype="multipart/form-data">

                @csrf

            
                <div class="div-deg">
                    <label for="">Upload Image</label>
                    <input type="file" name="image">
                </div>


                <div class="div-deg">
                    <input type="submit" class="btn" value="Add Image">
                </div>

            </form>

        </div>
    </div>
    @include('admin.footer')

</body>

</html>
