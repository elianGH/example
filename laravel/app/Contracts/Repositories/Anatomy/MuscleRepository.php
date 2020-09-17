<?php
namespace App\Contracts\Repositories\Anatomy;

use App\Models\Backend\Anatomy\Muscle;
use Illuminate\Database\Eloquent\Collection;

interface MuscleRepository
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
     * @return Muscle|null
     */
    public function find(int $id): ?Muscle;

    /**
     * Find by attribute
     *
     * @param string $attribute
     * @param $value
     * @return Muscle|null
     */
    public function findBy(string $attribute, $value): ?Muscle;

    /**
     * Get data with filters and paginate
     *
     * @param $filters
     * @param int $perPage
     * @return Collection
     */
    public function get($filters, int $perPage = 10): Collection;
}
