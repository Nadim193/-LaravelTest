<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
@extends('layouts.app')
    @section('content')
        <center><h1>Welcome to Profile</h1></center>

        <div>

            <div>
                <label for="">User Name: </label>
                <span>{{$username}}</span>
            </div>
            <br>
            <div>
                <label for="">First Name: </label>
                <span>{{$fname}}</span>
            </div>
            <br>
            <div>
                <label for="">Last Name: </label>
                <span>{{$lname}}</span>
            </div>
            <br>
            <div>
                <label for="">Email Address: </label>
                <span>{{$email}}</span>
            </div>
            <br>
            <div>
                <label for="">Phone Number: </label>
                <span>{{$phone}}</span>
            </div>
            <br>
        </div>

        <a class="btn btn-success" href="{{route('editprofile')}}">Edit Profile </a>
        
    @endsection 
</body>
</html>