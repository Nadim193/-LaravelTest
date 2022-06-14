<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
</head>
<body>
    @extends('admin.layouts.adminapp')
        @section('content')
            <br>
            <p>This is a Admin home page..</p>
            <br>
            @if(Session::get('user')) 
                <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
            @endif 
        @endsection
</body>
</html>