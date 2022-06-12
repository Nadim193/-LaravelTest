<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="content">
        <center><h1>Welcome Master</h1></center>
    </div>

    <div class="container">
        @include('inc.topnav')
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="content">
        <center><h3>Thank You For Your Supports.</h3></center>
    </div>
    
</body>
</html>