<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

@foreach($list as $apartments )
    <li>{{$apartments->name}}</li>
    <li>{{$apartments->address}}</li>
    <li>{{$apartments->price}}</li>
    <li>{{$apartments->Generalinformation}}</li>
    <li>{{$apartments->Details}}</li>
    <li>{{$apartments->Avatar}}</li>
    <li>{{$apartments->Sellingstatus}}</li>
@endforeach
</body>
</html>
