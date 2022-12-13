@extends('base')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/static/css/checkout.css" />
    <title>checkout</title>
</head>

<body>
    @section('content')
    <div class="checkout-container">
        <h1>Fill the details</h1>
        <div class="box">
            <form action="/order/" method="post">
                @csrf
                <input type="text" name="first-name" placeholder="First name" required />
                <input type="text" name="last-name" placeholder="Last name" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="number" name="phone" placeholder="Phone No" required />
                <input type="text" name="city" placeholder="City" required />
                <select name="state" id="state" class="form-control">
                    <option value="none">State</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
                <input type="text" name="address" placeholder="Address" required />
                <select name="pm" class="form-control">
                    <option value="Cash on delivery">Cash on delivery</option>
                    <option value="Credit Card">Credit card</option>
                    <option value="Debit Card">Debit card</option>
                </select>

                <input type="number" {{-- value="{{total}}" --}} name="total" hidden />
                <input type="submit" class="btn" value="Confirm order" />
            </form>
        </div>
    </div>
    @stop
</body>

</html>