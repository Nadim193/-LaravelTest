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
        <center><h1>Add Product</h1></center>

        <div style="margin-left: 1%;">
            <form action="{{route('productcre')}}" class="form-group" method="post">
                <!-- Cross Site Request Forgery-->
                {{csrf_field()}}

                <div class="col-md-4 form-group">
                    <b><span>Product Name: </span></b>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4 form-group">
                    <b><span>Product Id: </span></b>
                    <input type="text" name="id" value="{{old('id')}}"class="form-control">
                    @error('id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4 form-group">
                    <b><span>Quantity: </span></b>
                    <input type="text" name="quantity" value="{{old('phone')}}" class="form-control">
                    @error('quantity')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Add" >                  
            </form>
        </div>
    @endsection 
</body>
</html>