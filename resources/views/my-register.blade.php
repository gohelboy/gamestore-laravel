<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <form method="POST" action="{{ route('mys') }}">
                @csrf
                <input type="text" placeholder="Name" name="name" required autofocus/>
                <input type="email" placeholder="email" name="email" required/>
                <input type="password" placeholder="password" name="password" required/> 
                <input type="password" placeholder="password" name="password_confirmation" required/>
                <input type="submit"/>
            </form>
        </div>
    </div>
</body>
</html>