<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function showCheckout()
{
    $uid = Auth::id();
    $total = 4.95;
    $cartItems = Cart::where('user_id', $uid)->get();
    foreach ($cartItems as $item) {
        $total += $item->total;
    }

    return view('checkout', ['total' => $total]);
}

public function checkout(Request $request)
{
    Cart::where('user_id', Auth::id())->delete();

    return response()->json(['message' => 'Payment Successful']);
}


}
