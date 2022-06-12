<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    @extends('layouts.app')
        @section('content')
            <br>
            @if(session()->has('error'))
                <div class="alert alert-danger">
                {{ session()->get('error') }}
                </div>
            @endif
            <br>
            <div style="margin-left: 1.4%;">
                <form action="{{route('login')}}" method="post">

                    {{@csrf_field()}}

                    <div class="col-md-4 form-group">
                        <b><span>Username: </span></b>
                        <input type="text" name="username" value="{{old('username')}}" class="form-control">
                        @error('username')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="col-md-4 form-group">
                        <b><span>Password</span>: </span></b>
                        <input type="password" name="lpassword" value="{{old('lpassword')}}" class="form-control">
                        @error('lpassword')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <br>
                    <input type="checkbox" name="remember" value="Remember Me"> Remember Me
                    <br>
                    <br>
                    <input type="submit" class="btn btn-success" value="Login" >    
                </form>
                <br>
            </div>
        @endsection
</body>
</html>