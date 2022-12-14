@extends('base')
    @section('content')
    @foreach ($game as $game)
    <div class="game-detail-view-container">
        <div class="images-container">
            <div class="video-box">
                <img src="{{Storage::url($game->img1)}}" id="main-img" onclick="change(this)" />
            </div>
            <div class="mini-images">
                <img src="{{ Storage::url($game->img1) }}" onclick="change(this)" />
                <img src="{{ Storage::url($game->img2) }}" onclick="change(this)" />
                <img src="{{ Storage::url($game->img3) }}" onclick="change(this)" />
                <img src="{{ Storage::url($game->img4) }}" onclick="change(this)" />
            </div>

        </div>
        <div class="game-info-container">
            <div class="mini-container">
                <div class="game-title">
                    <h1>{{$game->name}}</h1>
                </div>

                <div class="game-desc">
                    <p>{{$game->description}}</p>
                </div>

                <div class="game-price">
                    <h3>Rs.{{$game->price}}</h3>
                </div>
                <div class="btns">
                    <form action="/cart" method="POST">
                        @csrf
                        <input type="number" name="gameid" value="{{$game->id}}" hidden />
                        <select name=quantity class="quantity-count">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        {{-- <input type="number" class="quantity-count" name="quantity" value="1" min="1" /> --}}
                        <input type="submit" class="addtocart" value="Add to Cart" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @stop
    <script>
        function change(mini) {
            var fullimg = document.getElementById("main-img");
            fullimg.src = mini.src;
        }       
    </script>