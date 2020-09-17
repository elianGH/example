<?php
namespace App\Repositories\Workout;

use App\Models\Backend\Workout\Equipment;
use App\Contracts\Repositories\Workout\EquipmentRepository as Contract;
use Illuminate\Database\Eloquent\Collection;

class EquipmentRepository implements Contract
{
    /**
     * Find by id
     *
     * @param int $id
     * @return Equipment
     */
    public function find(int $id): Equipment
    {
        return Equipment::findOrFail($id);
    }

    /**
     * Find by
     *
     * @param string $attribute
     * @param $value
     * @return Equipment|null
     */
    public function findBy(string $attribute, $value): ?Equipment
    {
        return Equipment::where($attribute, $value)->first();
    }

    /**
     * Get all data
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return Equipment::all();
    }

    /**
     * Get data with filters and paginate
     *
     * @param $filters
     * @param int $perPage
     * @return Collection
     */
    public function get($filters, int $perPage = 10): Collection
    {
        return Equipment::paginate($perPage);
    }
}
