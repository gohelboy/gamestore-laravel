@extends('base')
    @section('content')
    <div class="form-container">
        <div class="form-box">
            <div class="form">
                <h1>Regiter</h1><br>
                <form method="POST" action="{{ url('/') }}/register-user">
                    @csrf
                    <input type="text" class="if" name="name" placeholder="Name" required autofocus/><br><br>
                    <input type="email" class="if" name="email" placeholder="Email" required /><br><br>
                    <input type="password" class="if" name="password" placeholder="Password" required /><br><br>
                    <input type="password" class="if" name="password_confirmation" placeholder="Password" required /><br><br>
                    <button class="if-btn" type="submit">Register</button>
                </form><br>
                <div class="gotolink">
                    Already have an account! <a href="{{ url('/') }}/login-user">click here</a>
                </div>
                </form>
            </div>
            <div class="img">
                <img src="{{ asset('images/registerbg.jpg') }}" />
            </div>
        </div>
    </div>
    @stop