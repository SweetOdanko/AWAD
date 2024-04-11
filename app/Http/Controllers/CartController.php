<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCart()
    {

        $uid = Auth::id();
        $cartItems = DB::table('cart')
            ->join('item', 'cart.item_id', '=', 'item.id')
            ->where('cart.user_id', $uid)
            ->get();

        return view('cart', ['cartItems' => $cartItems]);
    }

   public function addToCart(Request $request)
{
    $userId = Auth::id();
    $itemId = $request->input('itemId');
    $quantity = $request->input('quantity');
    $itemPrice = $request->input('itemprice') * $quantity;

    try {
        // Validate quantity
        if ($quantity < 1) {
            throw new \Exception("Quantity must be at least 1.");
        }

        // Check if item already exists in cart
        $cartItem = Cart::where('item_id', $itemId)->where('user_id', $userId)->first();

        if ($cartItem) {
            // Update existing cart item
            $cartItem->quantity += $quantity;
            $cartItem->total += $itemPrice * $quantity; // Update total based on new quantity
            $cartItem->save();
        } else {
            // Add new item to cart
            Cart::create([
                'user_id' => $userId,
                'item_id' => $itemId,
                'quantity' => $quantity,
                'total' => $itemPrice * $quantity
            ]);
        }

        return response()->json(['message' => "{$quantity} item(s) added to cart successfully"]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function increment(Request $request)
{
    $userId = $request->input('userId');
    $Id = $request->input('Id');

    $cartItem = Cart::where('user_id', $userId)->where('item_id', $Id)->firstOrFail();
    $cartItem->quantity += 1;
    $item = Item::findOrFail($Id);
    $cartItem->total = $cartItem->quantity * $item->price;
    $cartItem->save();

    $totalPrice = Cart::where('user_id', $userId)->sum('total');

    return redirect('/cart');
}

public function decrement(Request $request)
{
    $userId = $request->input('userId');
    $Id = $request->input('Id');

    $cartItem = Cart::where('user_id', $userId)->where('item_id', $Id)->first();

    if ($cartItem) {
        $cartItem->quantity -= 1;
        if ($cartItem->quantity <= 0) {
            $cartItem->delete();
        } else {
            $item = Item::findOrFail($Id);
            $cartItem->total = $cartItem->quantity * $item->price;
            $cartItem->save();
        }

        $totalPrice = Cart::where('user_id', $userId)->sum('total');

        return redirect('/cart');
    }

    return response()->json(['message' => 'Cart item not found'], 404);
}
public function delete(Request $request)
{
    $userId = $request->input('userId');
    $Id = $request->input('Id');

    $cartItem = Cart::where('user_id', $userId)->where('item_id', $Id)->first();

    if ($cartItem) {
        $cartItem->delete();
    }

    return redirect('/cart');
}


}
