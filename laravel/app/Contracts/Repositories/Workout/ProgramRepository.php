<?php
namespace App\Contracts\Repositories\Workout;

use App\Models\Backend\Workout\Program;
use Illuminate\Database\Eloquent\Collection;

interface ProgramRepository
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
     * @return Program|null
     */
    public function find(int $id): ?Program;

    /**
     * Find by attribute
     *
     * @param string $attribute
     * @param $value
     * @return Program|null
     */
    public function findBy(string $attribute, $value): ?Program;

    /**
     * Get data with filters and paginate
     *
     * @param $filters
     * @param int $perPage
     * @return Collection
     */
    public function get($filters, int $perPage = 10): Collection;
}
