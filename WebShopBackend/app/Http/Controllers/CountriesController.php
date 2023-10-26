<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index()
    {
        $countries = Countries::all();
        return response()->json($countries);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|size:3|unique:countries',
            'name' => 'required|string|max:255',
            'states' => 'nullable|json',
        ]);

        $country = Countries::create($validatedData);
        return response()->json($country, 201);
    }

    public function show(Countries $country)
    {
        return response()->json($country);
    }

    public function update(Request $request, Countries $country)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'states' => 'nullable|json',
        ]);

        $country->update($validatedData);
        return response()->json($country);
    }

    public function destroy(Countries $country)
    {
        $country->delete();
        return response()->json(null, 204);
    }
}
