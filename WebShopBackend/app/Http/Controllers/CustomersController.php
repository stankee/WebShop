<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customers::all();
        return response()->json($customers);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:45',
            'created_by' => 'nullable|exists:users,id',
            'updated_by' => 'nullable|exists:users,id',
        ]);

        $customer = Customers::create($validatedData);
        return response()->json($customer, 201);
    }

    public function show(Customers $customer)
    {
        return response()->json($customer);
    }

    public function update(Request $request, Customers $customer)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:45',
            'created_by' => 'nullable|exists:users,id',
            'updated_by' => 'nullable|exists:users,id',
        ]);

        $customer->update($validatedData);
        return response()->json($customer);
    }

    public function destroy(Customers $customer)
    {
        $customer->delete();
        return response()->json(null, 204);
    }
}
