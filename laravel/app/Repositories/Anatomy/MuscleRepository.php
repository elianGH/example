<?php
namespace App\Repositories\Anatomy;

use App\Models\Backend\Anatomy\Muscle;
use App\Contracts\Repositories\Anatomy\MuscleRepository as Contract;
use Illuminate\Database\Eloquent\Collection;

class MuscleRepository implements Contract
{
    /**
     * Find by id
     *
     * @param int $id
     * @return Muscle
     */
    public function find(int $id): Muscle
    {
        return Muscle::findOrFail($id);
    }

    /**
     * Find by
     *
     * @param string $attribute
     * @param $value
     * @return Muscle|null
     */
    public function findBy(string $attribute, $value): ?Muscle
    {
        return Muscle::where($attribute, $value)->first();
    }

    /**
     * Get all data
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return Muscle::all();
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
        return Muscle::paginate($perPage);
    }
}
