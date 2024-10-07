<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            return response()->json(Business::all(), 200);
        }catch (\Exception $exception){
            return response()->json([
                'error' => $exception->getMessage(),
                'trace' => $exception->getTraceAsString()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'owner_id' => 'required|exists:users,id',
                'currency_id' => 'required|exists:currencies,id',
                'start_date' => 'nullable|date',
                'tax_number_1' => 'nullable|string|max:100',
                'tax_number_2' => 'nullable|string|max:100',
                'default_profit_percent' => 'numeric|min:0|max:100',
                'time_zone' => 'string',
                'fy_start_month' => 'integer|min:1|max:12',
                'accounting_method' => 'in:fifo,lifo,avco',
                'default_sales_discount' => 'nullable|numeric|min:0|max:100',
                'sell_price_tax' => 'in:includes,excludes',
                'default_sales_tax' => 'nullable',
                'logo' => 'nullable|string',
                'sku_prefix' => 'nullable|string|max:100',
                'enable_tooltip' => 'boolean',
            ]);

            $business = Business::create($request->all());
            return response()->json($business, 201);
        }catch (\Exception $exception){
            return response()->json([
                'error' => $exception->getMessage(),
                'trace' => $exception->getTraceAsString()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $business = Business::find($id);

        if (!$business) {
            return response()->json(['message' => 'Business not found'], 404);
        }

        return response()->json($business, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $business = Business::find($id);

            if (!$business) {
                return response()->json(['message' => 'Business not found'], 404);
            }

            $request->validate([
                'name' => 'required|string|max:255',
                'owner_id' => 'required|exists:users,id',
                'currency_id' => 'required|exists:currencies,id',
                'start_date' => 'nullable|date',
                'tax_number_1' => 'nullable|string|max:100',
                'tax_number_2' => 'nullable|string|max:100',
                'default_profit_percent' => 'numeric|min:0|max:100',
                'time_zone' => 'string',
                'fy_start_month' => 'integer|min:1|max:12',
                'accounting_method' => 'in:fifo,lifo,avco',
                'default_sales_discount' => 'nullable|numeric|min:0|max:100',
                'sell_price_tax' => 'in:includes,excludes',
                'default_sales_tax' => 'nullable',
                'logo' => 'nullable|string',
                'sku_prefix' => 'nullable|string|max:100',
                'enable_tooltip' => 'boolean',
            ]);

            $business->update($request->all());

            return response()->json($business, 200);
        }catch (\Exception $exception){
            return response()->json([
                'error' => $exception->getMessage(),
                'trace' => $exception->getTraceAsString()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $business = Business::find($id);

            if (!$business) {
                return response()->json(['message' => 'Business not found'], 404);
            }

            $business->delete();

            return response()->json(['message' => 'Business deleted'], 200);
        }catch (\Exception $exception){
            return response()->json([
                'error' => $exception->getMessage(),
                'trace' => $exception->getTraceAsString()
            ], 500);
        }
    }
}
