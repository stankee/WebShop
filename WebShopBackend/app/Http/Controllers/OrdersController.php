<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Orders::all();
        return response()->json($orders);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'total_price' => 'required|numeric',
            'status' => 'required|string|max:45',
        ]);

        $order = Orders::create($validatedData);
        return response()->json($order, 201);
    }

    public function show(Orders $order)
    {
        return response()->json($order);
    }

    public function update(Request $request, Orders $order)
    {
        $validatedData = $request->validate([
            'total_price' => 'required|numeric',
            'status' => 'required|string|max:45',
        ]);

        $order->update($validatedData);
        return response()->json($order);
    }

    public function destroy(Orders $order)
    {
        $order->delete();
        return response()->json(null, 204);
    }
}
