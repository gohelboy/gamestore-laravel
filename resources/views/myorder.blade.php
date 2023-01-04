@extends('base')

@section('content')
    <div class="myorders-container">
        <div class="myorders-box">
            <table>
                <tr>
                    <th>ORDER NO</th>
                    <th>IMAGE</td>
                    <th>NAME</th>
                    <th>ORDER</th>
                    <th>DATE</th>
                    <th>STATUS</th>
                    <th>TOTAL</th>
                </tr>

                {{-- {% for i in items %} --}}
                <tr class="orders">
                    <td>#{{-- {{i.pk}} --}}</td>
                    <td><img src="{{-- {{i.cart.product.image.url}} --}}" width="100px"></td>
                    <td>{{-- {{i.cart.product.name}} --}}</td>
                    <td>{{-- {{i.cart.quantity}} --}}</td>
                    <td>{{-- {{i.time}} --}}</td>
                    <td>{{-- {{i.get_status_display}} --}}</td>
                    <td>Rs.{{-- {{i.total}} --}}</td>
                </tr>
                {{-- {% endfor %} --}}
            </table>
        </div>
    </div>
@stop