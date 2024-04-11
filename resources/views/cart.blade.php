<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="{{ asset('css/Cart.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    @include('layout.nav')

    <div class="card">
        <div class="top_card">
            <h3>Order Summary</h3>
        </div>
        <div class="middle_card">
            @foreach($cartItems as $cartItem)
            <div class='item_box'>
                <ul>
                    <li class='item_pic'><img src='{{ $cartItem->image_path }}'/></li>
                    <li class='item_desc'>
                        {{ $cartItem->title }}<br />
                        RM{{ $cartItem->total / $cartItem->quantity }} Per Piece
                    </li>
                    <li class='item_quan_price'>
                        <div class='quantity'>
                            <!-- Decrement button -->
                            @if($cartItem->quantity == 1)
                                <form method="POST" action="{{ route('cart.delete') }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="userId" value="{{ Auth::id()}}">
                                    <input type="hidden" name="Id" value="{{ $cartItem->id }}">
                                    <button type="submit" class="delete" id="{{ $cartItem->id }}">-</button>
                                </form>
                            @else
                            <form method="POST" action="{{ route('cart.decrement') }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="userId" value="{{ Auth::id()}}">
                                <input type="hidden" name="Id" value="{{ $cartItem->id }}">
                                <button type="submit" class="minus" id="{{ $cartItem->id }}">-</button>
                            </form>
                            @endif
                            <span class="num">{{ $cartItem->quantity }}</span> <!-- Show quantity here -->
                            <!-- Increment button -->
                            <form method="POST" action="{{ route('cart.increment') }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="userId" value="{{ Auth::id()}}">
                                <input type="hidden" name="Id" value="{{ $cartItem->id }}">
                                <button type="submit" class="plus" id="{{ $cartItem->id }}">+</button>
                            </form>
                        </div>
                        
                        <span class='price'>RM{{ $cartItem->total }}</span>
                    </li>
                </ul>
                <div class='line'></div>
            </div>
            @endforeach
        </div>
        <div class='alert hide'></div><br>
        <div class="bottom_card">
            <div class="total">
                <span style="float: left">
                    <div class="small">Delivery</div>
                    TOTAL
                </span>
                <span style="float: right; text-align: right">
                    <div class="small">RM4.95</div>
                    <div class="total_price">RM435.55</div>
                </span>
                <a href="{{ route('checkout-show') }}" class="login_bttn">Proceed</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/cart.js') }}"></script>
</body>

</html>
