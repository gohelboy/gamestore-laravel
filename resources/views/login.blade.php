@extends('base')
    @section('content')
     <div class="form-container">
        <div class="form-box">
            <div class="form">
                <h1>Login</h1><br>
                <form method="POST" action="{{ url('/') }}/login-user">
                    @csrf
                    <input type="text" class="if" name="email" placeholder="Email" required /><br><br>
                    <input type="password" class="if" name="password" placeholder="Password" required /><br><br>
                    <button class="if-btn" type="submit">Login</button>
                </form><br>
                <div class="gotolink">
                    Create an account <a href="{{ url('/') }}/register-user">click here</a>
                </div>
                </form>
            </div>
            <div class="img">
                <img src="{{ asset('images/loginbg.jpg') }}" />
            </div>
        </div>
    </div>
    @stop