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
    
 
    @auth
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Log out</button>
    </form>
    @endauth
    
    @guest
        <a href="/login">Log In</a>
        <a href="/register">Create An Account</a>
    @endguest
       
</body>
</html>