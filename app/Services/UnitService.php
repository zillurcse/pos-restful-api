<?php
namespace App\Services;

use App\Classes\ApiResponseClass;
use App\Models\BusinessLocation;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;

class UnitService
{
    /**
     * Store a new business location.
     *
     * @param array $data
     * @return Unit
     */
    public function create(array $data): Unit
    {
        DB::beginTransaction();

        try {
            $unit = Unit::create($data);
            DB::commit();

            return $unit;
        } catch (\Exception $e) {
            DB::rollBack();
            return ApiResponseClass::rollback($e);
        }
    }

    /**
     * Update an existing business location.
     *
     * @param Unit $unit
     * @param array $data
     * @return Unit
     */
    public function update(Unit $unit, array $data): Unit
    {
        DB::beginTransaction();

        try {
            $unit->update($data);

            DB::commit();

            return $unit;
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
    public function deleteUnit(Unit $unit): void
    {
        DB::beginTransaction();

        try {
            // Soft delete the business location
            $unit->delete();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception('Failed to delete business location. Error: ' . $e->getMessage());
        }
    }

    public function findById($id)
    {
        return Unit::findOrFail($id);
    }
}
