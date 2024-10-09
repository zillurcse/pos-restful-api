<?php
namespace App\Services;

use App\Classes\ApiResponseClass;
use App\Models\Business;
use Illuminate\Support\Facades\DB;

class BusinessService
{
    /**
     * Store a new business location.
     *
     * @param array $data
     * @return Business
     */
    public function create(array $data): Business
    {
        DB::beginTransaction();

        try {
            $business = Business::create($data);
            DB::commit();

            return $business;
        } catch (\Exception $e) {
            DB::rollBack();
            return ApiResponseClass::rollback($e);
        }
    }

    /**
     * Update an existing business location.
     *
     * @param Business $business
     * @param array $data
     * @return Business
     */
    public function update(Business $business, array $data): Business
    {
        DB::beginTransaction();

        try {
            $business->update($data);

            DB::commit();

            return $business;
        } catch (\Exception $e) {
            DB::rollBack();
            return ApiResponseClass::rollback($e);
        }
    }

    /**
     * Delete a business location.
     *
     * @param Business $business
     * @return void
     */
    public function delete(Business $business): void
    {
        DB::beginTransaction();

        try {
            // Soft delete the business location
            $business->delete();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception('Failed to delete business location. Error: ' . $e->getMessage());
        }
    }

    public function findById($id)
    {
        return Business::findOrFail($id);
    }
}
