<?php

namespace App\Http\Controllers;

use App\Models\CustomerAddresses;
use Illuminate\Http\Request;

class CustomerAddressesController extends Controller
{
    public function index()
    {
        $customerAddresses = CustomerAddresses::all();
        return response()->json($customerAddresses);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:45',
            'address1' => 'required|string|max:255',
            'address2' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'nullable|string|max:45',
            'zipcode' => 'required|string|max:45',
            'country_code' => 'required|string|size:3',
            'customer_id' => 'required|exists:customers,id',
        ]);

        $customerAddress = CustomerAddresses::create($validatedData);
        return response()->json($customerAddress, 201);
    }

    public function show(CustomerAddresses $customerAddress)
    {
        return response()->json($customerAddress);
    }

    public function update(Request $request, CustomerAddresses $customerAddress)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:45',
            'address1' => 'required|string|max:255',
            'address2' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'nullable|string|max:45',
            'zipcode' => 'required|string|max:45',
            'country_code' => 'required|string|size:3',
            'customer_id' => 'required|exists:customers,id',
        ]);

        $customerAddress->update($validatedData);
        return response()->json($customerAddress);
    }

    public function destroy(CustomerAddresses $customerAddress)
    {
        $customerAddress->delete();
        return response()->json(null, 204);
    }
}
