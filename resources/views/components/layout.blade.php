<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="{{asset('logoSena.png')}}" type="image/x-icon">
</head>
<body>
     <head>
        <a href="/">Home</a>
        <a href="/posts">Posts</a>
     </head>

    <main>{{$slot}}</main>
    
</body>
</html>