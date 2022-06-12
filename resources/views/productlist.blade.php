<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
@extends('layouts.app')
    @section('content')
        <table class="table table-border">
            <tr>
                <th>Product Name</th>
                <th>Product ID</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <td>{{$name}}</td>
                <td>{{$id}}</td>
                <td>{{$quantity}}</td>
            </tr>

        </table>
    @endsection
</body>
</html>