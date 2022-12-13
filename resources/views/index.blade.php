@extends('base')

    @section('content')
    <div class="game-list">
        <h1>Games</h1>
        <div class="container">

           @foreach ($games as $game)
               
           <div class="card">
               <div class="img">
                   <a href='/{{$game->id}}/'><img src="{{Storage::url($game->main_img)}}"></a>
               </div>
               <div class="card-detail">
                   <h3>{{$game->name}}</h3>
                   <p>Rs.{{$game->price}}</p>
               </div>
           </div>

           @endforeach
        </div>
    </div>
    @stop
