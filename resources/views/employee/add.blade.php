<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Insert Employee</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">        
    </head>
    <body>
        <div align="center">
            <form action="/insert" method="POST">
                <h1>Add new Employee</h1>
                <table>
                    <tr>
                        {{ csrf_field() }}
                        <td>Name: </td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Date of birth: </td>
                        <td><input type="date" name="DoB"></td>
                    </tr>
                    <tr>
                        <td>Address: </td>
                        <td><input type="text" name="address"></td>
                    </tr>
                    <tr>
                        <td>Gender: </td>
                        <td><input type="text" name="gender"></td>
                    </tr>
                    <tr>
                        <td>Department: </td>
                        <td><input type="text" name="department"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="btnAdd" value="Add"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div align="center">
            <h3>==========================================================</h3>
        </div>
        <div align="center">
            <table border="1" cellspacing="1">
                <tr>
                    <td>Name</td>
                    <td>Date of birth</td>
                    <td>Address</td>
                    <td>Gender</td>
                    <td>Department</td>
                    <td>Action</td>
                </tr>
                @foreach($data as $value)
                <tr>                    
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->DoB }}</td>
                    <td>{{ $value->address }}</td>
                    <td>{{ $value->gender }}</td>
                    <td>{{ $value->department }}</td>
                    <td>
                        <a href="/edit&{{ $value->name }}"><button>Edit</button></a>
                        &nbsp;
                        <a href="delete&{{ $value->name }}"><button>Delete</button></a>
                    </td>                  
                </tr>
                @endforeach
            </table>
        </center>        
    </body>
</html>
