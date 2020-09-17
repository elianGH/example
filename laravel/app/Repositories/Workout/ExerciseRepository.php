<?php
namespace App\Repositories\Workout;

use App\Models\Backend\Workout\Exercise;
use App\Contracts\Repositories\Workout\ExerciseRepository as Contract;
use Illuminate\Database\Eloquent\Collection;

class ExerciseRepository implements Contract
{
    /**
     * Find by id
     *
     * @param int $id
     * @return Exercise
     */
    public function find(int $id): Exercise
    {
        return Exercise::findOrFail($id);
    }

    /**
     * Find by
     *
     * @param string $attribute
     * @param $value
     * @return Exercise|null
     */
    public function findBy(string $attribute, $value): ?Exercise
    {
        return Exercise::where($attribute, $value)->first();
    }

    /**
     * Get all data
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return Exercise::all();
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
        return Exercise::paginate($perPage);
    }
}
