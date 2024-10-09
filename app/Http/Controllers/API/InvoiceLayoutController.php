<?php

namespace App\Http\Controllers\API;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessRequest;
use App\Http\Requests\StoreInvoiceLayoutRequest;
use App\Http\Resources\InvoiceLayoutResource;
use App\Models\InvoiceLayout;
use App\Services\InvoiceLayoutService;
use Illuminate\Support\Facades\DB;

class InvoiceLayoutController extends Controller
{
    protected $invoiceLayoutService;

    public function __construct(InvoiceLayoutService $invoiceLayoutService)
    {
        $this->invoiceLayoutService = $invoiceLayoutService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $invoiceLayouts = InvoiceLayout::all();

            return ApiResponseClass::sendResponse(InvoiceLayoutResource::collection($invoiceLayouts));
        }catch (\Exception $exception){
            return ApiResponseClass::rollback($ex);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoiceLayoutRequest $request)
    {
        try {
            $invoiceLayoutSetting = $this->invoiceLayoutService->store($request->validated());

            return ApiResponseClass::sendResponse(InvoiceLayoutResource::make($invoiceLayoutSetting), 'Invoice layout created successfully', 201);
        } catch (\Exception $e) {
            return ApiResponseClass::rollback($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $invoiceLayout = InvoiceLayout::find($id);

        if (!$invoiceLayout) {
            // Return a custom 404 response
            return ApiResponseClass::sendResponse(null, 'Invoice layout not found', 404);
        }

        return ApiResponseClass::sendResponse(
            new InvoiceLayoutResource($invoiceLayout)
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreInvoiceLayoutRequest $request, $id)
    {
        try {
            $invoiceLayout = $this->invoiceLayoutService->findById($id);

            if (!$invoiceLayout) {
                return ApiResponseClass::sendResponse(null, 'Invoice layout not found', 404);
            }

            // Update the invoice layout using the validated request data
            $updatedInvoiceLayout = $this->invoiceLayoutService->update($id, $request->validated());

            return ApiResponseClass::sendResponse(InvoiceLayoutResource::make($updatedInvoiceLayout), 'Invoice layout updated successfully', 201);

        } catch (\Exception $e) {
            return ApiResponseClass::rollback($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $invoiceLayout = InvoiceLayout::find($id);
            if (!$invoiceLayout) {
                return ApiResponseClass::sendResponse(null, 'Invoice layout not found', 404);
            }
            $invoiceLayoutSetting->delete();
            DB::commit();
            return ApiResponseClass::sendResponse(null, 'Invoice layout deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return ApiResponseClass::rollback($e, 'Failed to delete invoice layout.');
        }
    }

}
