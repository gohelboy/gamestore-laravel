<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/gamepage.css') }}" type="text/css" />
    {{-- <link rel="stylesheet" type="text/css" href="/static/css/cart.css" type="text/css" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact-us.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('checkout.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="/static/css/myorders.css"/> --}}
    <title>Gamestore</title>
</head>

<body>
    <div class="navbar-container">
        <div class="navbar">
            <div class="logo">
                <a href={{ url('/') }}>
                    <h1>Gamestore</h1>
                </a>
            </div>
            <div class="nav-link">
                <ul>
                    @if (Auth::guest())

                    <li>
                        <a href="{{ url('/') }}/login-user">Login</a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/register-user">Register</a>
                    </li>
                    @else
                    <li>
                        <h4>Hello, {{ Auth::User()->name }}</h4>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/">Cart</a>
                    </li>
                    <li>
                        <a href="{% url 'my-order' %}">My orders</a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/logout-user">Logout</a>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </div>
    @yield('content')
    <div class="footer">
        <div class="footer-content">
            <div class="footer-link">
                <a href="{{ url('/') }}/about">About us</a>
                <a href="{{ url('/') }}/contact-us">Contact us</a>
            </div>
            <p>
                © 2022, Gamestore, Inc. All rights reserved. Gohel, the Gamestore Games logo, Fortnite, the Fortnite
                logo,
                Unreal, Unreal Engine, the Unreal Engine logo, Unreal Tournament, and the Unreal Tournament logo are
                trademarks or
                registered trademarks of Gamestore Games, Inc. in the United States of America and elsewhere. Other
                brands
                or
                product names
                are the trademarks of their respective owners. Non-US transactions through Gamestore Games International
            </p>

        </div>
    </div>
</body>

</html>