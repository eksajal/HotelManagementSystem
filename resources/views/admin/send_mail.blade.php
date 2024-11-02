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
            color: black;
        }

        input{
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
            width: 450px;
            border-bottom: 7px solid red;
            border-top: 7px solid red;
        }

        .intro {
            font-size: 45px;
            font-weight: bold;
            color: gray;
            margin-left: 380px;
            border: 7px solid red;
            display: inline-block;
            border-right: none;
            border-top: none;
            border-bottom: none;
            border-left: none;
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
            <h1><span style="color: red;">></span>Send Mail to <span style="color: red;">'{{ $data->name }}'</span></h1>
        </div>



        <div class="div-center">

            <form action="{{ url('mail', $data->id) }}" method="POST">

                @csrf

                <div class="div-deg">
                    <label for="">Greeting</label>
                    <input type="text" name="greeting">
                </div>

                <div class="div-deg">
                    <label for="">Mail Body</label>
                    <textarea name="body"></textarea>
                </div>

                <div class="div-deg">
                    <label for="">Action Text</label>
                    <input type="text" name="action_text">
                </div>

                <div class="div-deg">
                    <label for="">Action Url</label>
                    <input type="text" name="action_url">
                </div>

                <div class="div-deg">
                    <label for="">End Line</label>
                    <input type="text" name="endline">
                </div>

               
                <div class="div-deg">
                    <input type="submit" class="btn" value="Send Mail">
                </div>

            </form>

        </div>

    </div>
    @include('admin.footer')

</body>

</html>
