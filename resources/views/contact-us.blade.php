@extends('base')
    @section('content')
    <div class="contact-us-container">
        <div class="contact-us-box">
            <div class="left">
                <p> :) Hello, Lets get in touch</p>
                <form method="post" action="{{ url('/') }}/contact" autocomplete="off">
                    @csrf
                    <input type="text" name="name" placeholder="Name" required />
                    <input type="email" name="email" placeholder="Email" required />
                    <input type="number" name="phone" placeholder="Phone (e.g. *1458752366)" required />
                    <input name="msg" placeholder="Message" required />
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