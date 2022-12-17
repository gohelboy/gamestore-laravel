@extends('base')
@section('content')
<div class="main-cart-container">  
        <table class="cart">
            <tr class="th">
                <th colspan="2">Game</th>
                <th>quantity</th>
                <th>price</th>
            </tr>

            {{-- {% for i in items %}
            <tr class="items">
                <th>
                    <img src="{{i.product.image.url}}" width="100px" height="140px" />
                </th>
                <th>
                    <h2>{{i.product.name}}</h2>
                </th>
                <th>
                    <h4>{{i.quantity}}</h4>
                </th>
                <th>
                    <h3>{{i.total}}</h3>
                </th>
                <th>
                    <form action="/remove-from-cart/" method="post">
                        {%csrf_token%}
                        <input type="text" name="cart-id" value="{{i.id}}" hidden />
                        <input type="submit" value="Remove">
                    </form>
                </th>

            </tr>
            {% endfor %} --}}
            <tr class="total-section">
                <th>
                    <h2>Total</h2>
                </th>
                <td></td>
                <td></td>

                <th>
                    <h2>Rs.{{-- {{total}} --}}</h2>
                </th>
                <th>
                    {{-- {%if total > 0%} --}}
                    <form action="/checkout/" method="post">
                        @csrf
                        <input type="number" name="total" value="{{-- {{total}} --}}" hidden />
                        <input type="submit" class="checkout" />
                    </form>
                    {{-- {%endif%} --}}
                </th>

            </tr>

        </table>
    </div>
@stop