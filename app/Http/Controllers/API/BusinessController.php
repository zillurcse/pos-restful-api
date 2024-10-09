<?php

namespace App\Http\Controllers\API;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessRequest;
use App\Http\Resources\BusinessResource;
use App\Models\Business;
use App\Services\BusinessService;
use Illuminate\Support\Facades\DB;

class BusinessController extends Controller
{
    protected $businessService;

    public function __construct(BusinessService $businessService)
    {
        $this->businessService = $businessService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Business::all();

            return ApiResponseClass::sendResponse(BusinessResource::collection($data));
        }catch (\Exception $exception){
            return ApiResponseClass::rollback($ex);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusinessRequest $request)
    {
        try {
            $business = $this->businessService->create($request->validated());

            return ApiResponseClass::sendResponse(BusinessResource::make($business), 'Invoice layout created successfully', 201);
        } catch (\Exception $e) {
            return ApiResponseClass::rollback($ex);
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
    public function update(StoreBusinessRequest $request, string $id)
    {
        try {
            $business = $this->businessService->findById($id);

            if (!$business) {
                return ApiResponseClass::sendResponse(null, 'Business not found', 404);
            }

            $updatedBusiness = $this->businessService->update($business, $request->validated());

            return ApiResponseClass::sendResponse(BusinessResource::make($updatedBusiness), 'Business updated successfully', 201);

        } catch (\Exception $e) {
            return ApiResponseClass::rollback($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $business = Business::find($id);
            if (!$business) {
                return ApiResponseClass::sendResponse(null, 'Business not found', 404);
            }
            $business->delete();
            DB::commit();
            return ApiResponseClass::sendResponse(null, 'Business deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return ApiResponseClass::rollback($e, 'Failed to delete Business.');
        }
    }
}
