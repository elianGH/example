<?php
namespace App\Contracts\Repositories\Workout;

use App\Models\Backend\Workout\Exercise;
use Illuminate\Database\Eloquent\Collection;

interface ExerciseRepository
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
     * @return Exercise|null
     */
    public function find(int $id): ?Exercise;

    /**
     * Find by attribute
     *
     * @param string $attribute
     * @param $value
     * @return Exercise|null
     */
    public function findBy(string $attribute, $value): ?Exercise;

    /**
     * Get data with filters and paginate
     *
     * @param $filters
     * @param int $perPage
     * @return Collection
     */
    public function get($filters, int $perPage = 10): Collection;
}
