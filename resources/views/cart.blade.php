@extends('base')
@section('content')
<div class="main-cart-container">  
        <table class="cart">
            <tr class="th">
                <th colspan="2">Game</th>
                <th>quantity</th>
                <th>price</th>
            </tr>

            @foreach ($user->carts as $item)
            
            <tr class="items">
                <th>
                    <img src="{{Storage::url($item->product->main_img)}}" width="100px" height="140px" />
                </th>
                <th>
                    <h2>{{ $item->name }}</h2>
                </th>
                <th>
                    <h4>{{$item->quantity}}</h4>
                </th>
                <th>
                    <h3>{{$item->total}}</h3>
                </th>
                <th>
                    <form action="/cart/remove" method="post">
                        @csrf
                        <input type="text" name="cart_id" value="{{$item->id}}" hidden />
                        <input type="submit" value="Remove">
                    </form>
                </th>

            </tr>
            @endforeach

            <tr class="total-section">
                <th>
                    <h2>Total</h2>
                </th>
                <td></td>
                <td></td>

                <th>
                    <h2>Rs.{{$cart_total}}</h2>
                </th>
                <th>
                    @if ($cart_total>0)
                        <form action="/checkout/" method="post">
                            @csrf
                            <input type="number" name="total" value="{{$cart_total}}" hidden />
                            <input type="number" name="active" value="1" hidden />
                            <input type="submit" class="checkout" />
                        </form>                        
                    @endif
               </th>

            </tr>

        </table>
    </div>
@stop