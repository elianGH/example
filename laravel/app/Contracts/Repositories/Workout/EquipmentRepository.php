<?php
namespace App\Contracts\Repositories\Workout;

use App\Models\Backend\Workout\Equipment;
use Illuminate\Database\Eloquent\Collection;

interface EquipmentRepository
{
    /**
     * Get all data
     *
     * @return Collection
     */
    public function all(): Collection;

    /**
     * Find data by id
     *
     * @param int $id
     * @return Equipment|null
     */
    public function find(int $id): ?Equipment;

    /**
     * Find by attribute
     *
     * @param string $attribute
     * @param $value
     * @return Equipment|null
     */
    public function findBy(string $attribute, $value): ?Equipment;

    /**
     * Get data with filters and paginate
     *
     * @param $filters
     * @param int $perPage
     * @return Collection
     */
    public function get($filters, int $perPage = 10): Collection;
}
