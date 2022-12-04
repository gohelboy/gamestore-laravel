<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1 align="center">Home</h1><hr>
    
    <h1 align="center">
        @guest
            <a href="{{ route('login-page') }}">Login</a>
            <a href="{{ route('register-page') }}">Register</a>
            <br>
            <h1>Hey, guest</h1>
        @else
            Hey, {{ Auth::user()->name; }}</br>
            <form method="GET"  action="{{ route('logout-user') }}">
                <input type='submit' value="Logout">
            </form>
        @endguest 
    </h1>
    
</body>
</html>