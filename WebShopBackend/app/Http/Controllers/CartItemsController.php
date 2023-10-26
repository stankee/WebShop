<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use Illuminate\Http\Request;

class CartItemsController extends Controller
{
    
    public function index()
    {
        $cartItems = CartItems::all();
        return response()->json($cartItems);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = CartItems::create($validatedData);
        return response()->json($cartItem, 201);
    }

    public function show(CartItems $cartItem)
    {
        return response()->json($cartItem);
    }

    public function update(Request $request, CartItems $cartItem)
    {
        $validatedData = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem->update($validatedData);
        return response()->json($cartItem);
    }

    public function destroy(CartItems $cartItem)
    {
        $cartItem->delete();
        return response()->json(null, 204);
    }
}
