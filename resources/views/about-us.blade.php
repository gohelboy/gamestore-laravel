@extends('base')
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