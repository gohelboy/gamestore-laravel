@extends('base')
<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
        <title>About us</title>
    </head>
    <body>
        @section('content')
        <div class="about-box">
            <div class="about-card">
                <div class="image"><img src="{{ asset('images/parth.png') }}" /></div>
                <div class="desc">
                    <h5>PARTH PANDYA</h5>
                    <p>Website Designer, Project Manager</p>
                </div>
            </div>
            <div class="about-card">
                <div class="image"><img src="{{ asset('images/gohel.png') }}" /></div>
                <div class="desc">
                    <h5>DWARKESH GOHEL</h5>
                    <p>Website Designer, Frontend Devloper, Backand Devloper, Project Manager</p>
                </div>
            </div>
            <div class="about-card">
                <div class="image"><img src="{{ asset('images/hems.png') }}" /></div>
                <div class="desc">
                    <h5>HIMANSHU DABHI</h5>
                    <p>Frontend Devloper, Backand Devloper</p>
                </div>
            </div>
        </div>
        @stop

    </body>
</html>