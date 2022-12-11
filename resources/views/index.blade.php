<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
    <title>Document</title>
</head>

<body>

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

</body>

</html>