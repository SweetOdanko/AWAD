
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Ice-Cream CheckOut Page</title>
    <link rel="stylesheet" href="{{ asset('css/Checkout.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="dot-spinner">
        <div class="dot-spinner__dot"></div>
        <div class="dot-spinner__dot"></div>
        <div class="dot-spinner__dot"></div>
        <div class="dot-spinner__dot"></div>
        <div class="dot-spinner__dot"></div>
        <div class="dot-spinner__dot"></div>
        <div class="dot-spinner__dot"></div>
        <div class="dot-spinner__dot"></div>
    </div>
    <div class="card">
        <div class="leftside">
            <img src="{{ asset('Element/IcecramLogo.jpg') }}" class="icelogo" alt="Logo" />
        </div>
        <div class="rightside">
            <form action="{{ route('checkout') }}" method="POST">
                <h1>CheckOut</h1>
                <h1 class="total">Total:RM{{ $total }}</h1>
                <h2>Payment Information</h2>
                <p>Cardholder Name</p>
                <input type="text" class="inputbox" name="name" required />
                <p>Card Number</p>
                <input type="number" class="inputbox" name="card_number" id="card_number" required />

                <p>Card Type</p>
                <select class="inputbox" name="card_type" id="card_type" required>
                    <option value="">--Select a Card Type--</option>
                    <option value="Visa">Visa</option>
                    <option value="MasterCard">MasterCard</option>
                </select>
                <div class="expcvv">
                    <p class="expcvv_date">Expiry</p>
                    <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

                    <p class="expcvv_password">CVV</p>
                    <input type="password" class="inputbox" name="cvv_password" id="cvv_password" required />
                </div>
                <p></p>
                <button class="button">CheckOut</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js\Checkout.js') }}"></script>
</body>

</html>
