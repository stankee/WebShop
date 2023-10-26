<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function index()
    {
        $orderDetails = OrderDetails::all();
        return response()->json($orderDetails);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'address1' => 'required|string|max:255',
            'address2' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'nullable|string|max:45',
            'zipcode' => 'required|string|max:45',
            'country_code' => 'required|string|size:3',
        ]);

        $orderDetail = OrderDetails::create($validatedData);
        return response()->json($orderDetail, 201);
    }

    public function show(OrderDetails $orderDetail)
    {
        return response()->json($orderDetail);
    }

    public function update(Request $request, OrderDetails $orderDetail)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'address1' => 'required|string|max:255',
            'address2' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'nullable|string|max:45',
            'zipcode' => 'required|string|max:45',
            'country_code' => 'required|string|size:3',
        ]);

        $orderDetail->update($validatedData);
        return response()->json($orderDetail);
    }

    public function destroy(OrderDetails $orderDetail)
    {
        $orderDetail->delete();
        return response()->json(null, 204);
    }
}
