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
                    <th>TOTAL</th>
                </tr>

                @foreach ($user->orders as $order)     
                <tr class="orders">
                    <td>#{{$order->id }}</td>
                    <td><img src="{{ Storage::url($order->cart->product->main_img) }}" width="100px"></td>
                    <td>{{ $order->cart->product->name }}</td>
                    <td>{{ $order->cart->quantity }}</td>
                    <td>{{$order->created_at}}</td>
                    <td>Rs.{{$order->total}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop