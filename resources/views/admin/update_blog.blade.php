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

        .blog-img {
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
            <h1>Update Blog Details</h1>
        </div>

        <div class="div-center">

            <form action="{{ url('edit_blog', $data->id) }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div-deg">
                    <label for="">Blog Title</label>
                    <input type="text" name="title" value="{{ $data->title }}">
                </div>

                <div class="div-deg">
                    <label for="">Sub Title</label>
                    <input type="text" name="sub_title" value="{{ $data->sub_title }}">
                </div>


                <div class="div-deg">
                    <label for="">Description</label>
                    <textarea name="description">{{ $data->description }}</textarea>
                </div>

              

                <div class="div-deg">
                    <label for="">Current Image</label>
                    <img class="blog-img" src="/blog/{{ $data->image }}" alt="">
                </div>


                <div class="div-deg">
                    <label for="">Upload New Image</label>
                    <input type="file" name="image">
                </div>


                <div class="div-deg">
                    <input type="submit" class="btn" value="Update Blog">
                </div>

            </form>

        </div>
    </div>
    @include('admin.footer')

</body>

</html>
