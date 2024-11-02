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
            <h1>Subscribers</h1>
        </div>


        <table>
            <tr>
               
                <th>Email</th>
                <th>Remove</th>
                
            </tr>


            @foreach ($data as $data)
                <tr>
                 
                    <td>{{ $data->email}}</td>
                      
                    <td>
                        <a onclick="return confirm('Are you sure?');" class="btn btn-danger"
                            href="{{ url('delete_subscriber', $data->id) }}">Delete</a>
                    </td>

                </tr>
            @endforeach

        </table>


    </div>
    </div>
    @include('admin.footer')

</body>

</html>
