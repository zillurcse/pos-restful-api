<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessLocationRequest;
use App\Http\Requests\StoreBusinessRequest;
use App\Http\Resources\BusinessLocationResource;
use App\Models\BusinessLocation;
use App\Classes\ApiResponseClass;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use App\Services\BusinessLocationService;


class BusinessLocationController extends Controller
{
    protected $businessLocationService;

    public function __construct(BusinessLocationService $businessLocationService)
    {
        $this->businessLocationService = $businessLocationService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        try {
            $business = BusinessLocation::all();

            return ApiResponseClass::sendResponse(BusinessLocationResource::collection($business));
        }catch (\Exception $e){
            return ApiResponseClass::rollback($e);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusinessLocationRequest $request): JsonResponse
    {
        try {
            $businessLocation = $this->businessLocationService->createBusinessLocation($request->validated());

            return ApiResponseClass::sendResponse(new BusinessLocationResource($businessLocation), 'Business location created successfully.', 201);
        } catch (\Exception $e) {
            return ApiResponseClass::rollback($e, 'Failed to create business location.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $businessLocation = BusinessLocation::find($id);

        if (!$businessLocation) {
            return ApiResponseClass::sendResponse(new BusinessLocationResource($businessLocation), 'Business location not found.', 404);
        }

        return ApiResponseClass::sendResponse(new BusinessLocationResource($businessLocation));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBusinessLocationRequest $request, BusinessLocation $businessLocation): JsonResponse
    {
        try {
            $updatedLocation = $this->businessLocationService->updateBusinessLocation($businessLocation, $request->validated());

            return ApiResponseClass::sendResponse(new BusinessLocationResource($businessLocation), 'Business location updated successfully.', 201);

        } catch (\Exception $e) {
            return ApiResponseClass::rollback($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $businessLocation = BusinessLocation::findOrFail($id);

            $businessLocation->delete();

            return ApiResponseClass::sendResponse(null, 'Business location deleted!', 200);
        } catch (ModelNotFoundException $e) {
            return ApiResponseClass::sendResponse(null, 'Business location not found!', 404);
        } catch (\Exception $e) {
            return ApiResponseClass::sendResponse(null, 'Failed to delete business location.', 500);
        }
    }
}
