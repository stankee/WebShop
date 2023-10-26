<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index()
    {
        $payments = Payments::all();
        return response()->json($payments);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|string|max:45',
            'type' => 'required|string|max:45',
            'created_by' => 'nullable|exists:users,id',
            'updated_by' => 'nullable|exists:users,id',
        ]);

        $payment = Payments::create($validatedData);
        return response()->json($payment, 201);
    }

    public function show(Payments $payment)
    {
        return response()->json($payment);
    }

    public function update(Request $request, Payments $payment)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:0',
            'status' => 'required|string|max:45',
            'type' => 'required|string|max:45',
            'created_by' => 'nullable|exists:users,id',
            'updated_by' => 'nullable|exists:users,id',
        ]);

        $payment->update($validatedData);
        return response()->json($payment);
    }

    public function destroy(Payments $payment)
    {
        $payment->delete();
        return response()->json(null, 204);
    }
}
