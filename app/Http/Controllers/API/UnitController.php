<?php

namespace App\Http\Controllers\API;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Resources\UnitResource;
use App\Models\Unit;
use App\Services\UnitService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitController extends Controller
{
    protected $unitService;

    public function __construct(UnitService $unitService)
    {
        $this->unitService = $unitService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $unit = Unit::all();

            return ApiResponseClass::sendResponse(UnitResource::collection($unit));
        }catch (\Exception $e){
            return ApiResponseClass::rollback($e);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnitRequest $request)
    {
        try {
            $unit = $this->unitService->create($request->validated());

            return ApiResponseClass::sendResponse(new UnitResource($unit), 'Unit created successfully.', 201);
        } catch (\Exception $e) {
            return ApiResponseClass::rollback($e, 'Failed to create unit.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unit = Unit::find($id);

        if (!$unit) {
            // Return a custom 404 response
            return ApiResponseClass::sendResponse(null, 'Unit not found', 404);
        }

        return ApiResponseClass::sendResponse(
            new UnitResource($unit)
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUnitRequest $request, string $id)
    {
        try {
            $unit = $this->unitService->findById($id);

            if (!$unit) {
                return ApiResponseClass::sendResponse(null, 'Unit not found', 404);
            }

            // Update the invoice layout using the validated request data
            $updatedUnit = $this->unitService->update($unit, $request->validated());

            return ApiResponseClass::sendResponse(UnitResource::make($updatedUnit), 'Unit updated successfully', 201);

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
            $unit = Unit::find($id);
            if (!$unit) {
                return ApiResponseClass::sendResponse(null, 'Unit not found', 404);
            }
            $unit->delete();
            DB::commit();
            return ApiResponseClass::sendResponse(null, 'Unit deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return ApiResponseClass::rollback($e, 'Failed to delete invoice layout.');
        }
    }
}
