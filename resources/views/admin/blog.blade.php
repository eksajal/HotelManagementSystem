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
            width: 450px;
        }

        input{
            width: 450px;
        }

        textarea{
            width: 450px;
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
            margin-left: 500px;
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

        .blog-img {
            width: 376px;
            height: 232px;
        }

        th,
        td {
            border: 2px solid red;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 96%;
            height: 30%;
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
            <h1>Upload Blog</h1>
        </div>

        <div class="row" style="margin-left: 0px; margin-bottom: 20px;">

            @foreach ($blog as $blog)
                <div class="col-md-4">


                    <img class="blog-img" src="/blog/{{ $blog->image }}" alt="">


                    <table>
                        <tr>
                            <th><b>Title</b></th>
                            <th><b>Sub-Title</b></th>
                            <th><b>Description</b></th>
                        </tr>

                        <tr>
                            <td>{{ $blog->title }}</td>
                            <td>{{ Str::limit($blog->sub_title, 10) }}</td>
                            <td>{{ Str::limit($blog->description, 50) }}</td>
                        </tr>
                    </table>


                    <a class="btn" style="margin-bottom: 30px;" href="{{ url('delete_blog', $blog->id) }}">Delete</a>

                    <a class="btn" style="margin-bottom: 30px; margin-left: 223px;"
                        href="{{ url('blog_update', $blog->id) }}">Update</a>



                </div>
            @endforeach

        </div>


        <div class="div-center">

            <form action="{{ url('upload_blog') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div-deg">
                    <label for="">Blog Title</label>
                    <input type="text" name="title">
                </div>

                <div class="div-deg">
                    <label for="">Sub Title</label>
                    <input type="text" name="sub_title">
                </div>

                <div class="div-deg">
                    <label for="">Description</label>
                    <textarea name="description"></textarea>
                </div>

                <div class="div-deg">
                    <label for="">Upload Image</label>
                    <input type="file" name="image">
                </div>


                <div class="div-deg">
                    <input type="submit" class="btn" value="Upload Blog">
                </div>

            </form>

        </div>
    </div>
    @include('admin.footer')

</body>

</html>
