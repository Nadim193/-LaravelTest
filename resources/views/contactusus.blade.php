<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    @extends('layouts.app')
        @section('content')
        <br>
        <center><h1 style="color: green;">Welcome To Contact Page</h1></center>
        <br>
        @if(session()->has('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">
            {{ session()->get('error') }}
            </div>
        @endif
        <br>
        <div style="margin-left: 1.4%;">
            <form action="{{route('contactus')}}" class="form-group" method="post">
                <!-- Cross Site Request Forgery-->
                {{csrf_field()}}

                <div class="col-md-4 form-group">
                    <b><span>Email Address: </span></b>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control">
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4 form-group">
                    <b><span>Phone Number: </span></b>
                    <input type="number" name="Phone" value="{{old('Phone')}}" class="form-control">
                    @error('Phone')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4 form-group">
                    <b><span>Comment: </span></b>
                    <textarea name="comment" rows="4" cols="50" value="{{old('comment')}}" class="form-control"></textarea>
                    @error('comment')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Submit" >              
            </form>
        </div>
        @endsection
</body>
</html>