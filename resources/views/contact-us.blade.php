@extends('base')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    <title>Contact us</title>
</head>

<body>
    @section('content')
    <div class="contact-us-container">
        <div class="contact-us-box">
            <div class="left">
                <p> :) Hello, Lets get in touch</p>
                <form method="post" autocomplete="off">
                    @csrf
                    <input type="text" name="person-name" placeholder="Name" required />
                    <input type="email" name="email" placeholder="Email" required />
                    <input type="number" name="phone" placeholder="Phone (e.g. *1458752366)" required />
                    <input name="msg" placeholder="Messege" required />
                    <input type="submit" class="sendbtn" value="Send" />
                </form>
            </div>
            <div class="right">
                <div class="top">
                    <h1>
                        We'd love to Hear <span>from you!</span>
                    </h1>
                    <p>info@gamestore.in</p>
                </div>
                <div class="bottom">
                    <p>Right now there is no us, i'm running the site alone. so every feedback you provide, any
                        suggestion
                        you have and any new ideas you like to share - please don't hesitate, write to me immediately.
                    </p>
                </div>
            </div>
        </div>
    </div>
    @stop
</body>

</html>