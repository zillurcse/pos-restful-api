<?php
namespace App\Services;

use App\Classes\ApiResponseClass;
use App\Models\BusinessLocation;
use Illuminate\Support\Facades\DB;

class BusinessLocationService
{
    /**
     * Store a new business location.
     *
     * @param array $data
     * @return BusinessLocation
     */
    public function createBusinessLocation(array $data): BusinessLocation
    {
        DB::beginTransaction();

        try {
            $businessLocation = BusinessLocation::create($data);
            DB::commit();

            return $businessLocation;
        } catch (\Exception $e) {
            DB::rollBack();
            return ApiResponseClass::rollback($e);
        }
    }

    /**
     * Update an existing business location.
     *
     * @param BusinessLocation $businessLocation
     * @param array $data
     * @return BusinessLocation
     */
    public function updateBusinessLocation(BusinessLocation $businessLocation, array $data): BusinessLocation
    {
        DB::beginTransaction();

        try {
            $businessLocation->update($data);

            DB::commit();

            return $businessLocation;
        } catch (\Exception $e) {
            DB::rollBack();
            return ApiResponseClass::rollback($e);
        }
    }

    /**
     * Delete a business location.
     *
     * @param BusinessLocation $businessLocation
     * @return void
     */
    public function deleteBusinessLocation(BusinessLocation $businessLocation): void
    {
        DB::beginTransaction();

        try {
            // Soft delete the business location
            $businessLocation->delete();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception('Failed to delete business location. Error: ' . $e->getMessage());
        }
    }
}
