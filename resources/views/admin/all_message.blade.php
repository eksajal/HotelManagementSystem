<!DOCTYPE html>
<html>

<head>

    @include('admin.css')


    <style>
        td {
            border-bottom: 7px solid red;
            padding: 8px;
            text-align: center;
        }

        th {
            border-bottom: 7px solid red;
            padding: 8px;
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


        table {

            margin-top: 15px;
            margin-bottom: 100px;
            width: 100%;
            border-collapse: collapse;

        }


        .intro {
            font-size: 45px;
            font-weight: bold;
            color: gray;
            margin-left: 525px;
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
            <h1>Messages</h1>
        </div>


        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action1</th>
                <th>Action2</th>
            </tr>


            @foreach ($data as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email}}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->message }}</td>
                    

                    <td>
                        <a class="btn btn-secondary"
                            href="{{ url('send_mail', $data->id) }}">Send Email</a>
                    </td>

                    
                    <td>
                        <a onclick="return confirm('Are you sure?');" class="btn btn-danger"
                            href="{{ url('delete_message', $data->id) }}">Delete</a>
                    </td>


                </tr>
            @endforeach

        </table>


    </div>
    </div>
    @include('admin.footer')

</body>

</html>
