<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    public function index()
    {
        $orderItems = OrderItems::all();
        return response()->json($orderItems);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'unit_price' => 'required|numeric|min:0',
        ]);

        $orderItem = OrderItems::create($validatedData);
        return response()->json($orderItem, 201);
    }

    public function show(OrderItems $orderItem)
    {
        return response()->json($orderItem);
    }

    public function update(Request $request, OrderItems $orderItem)
    {
        $validatedData = $request->validate([
            'quantity' => 'required|integer|min:1',
            'unit_price' => 'required|numeric|min:0',
        ]);

        $orderItem->update($validatedData);
        return response()->json($orderItem);
    }

    public function destroy(OrderItems $orderItem)
    {
        $orderItem->delete();
        return response()->json(null, 204);
    }
}
