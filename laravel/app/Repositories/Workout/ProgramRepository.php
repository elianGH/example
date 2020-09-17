<?php
namespace App\Repositories\Workout;

use App\Models\Backend\Workout\Program;
use App\Contracts\Repositories\Workout\ProgramRepository as Contract;
use Illuminate\Database\Eloquent\Collection;

class ProgramRepository implements Contract
{
    /**
     * Find by id
     *
     * @param int $id
     * @return Program
     */
    public function find(int $id): Program
    {
        return Program::findOrFail($id);
    }

    /**
     * Find by
     *
     * @param string $attribute
     * @param $value
     * @return Program|null
     */
    public function findBy(string $attribute, $value): ?Program
    {
        return Program::where($attribute, $value)->first();
    }

    /**
     * Get all data
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return Program::all();
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
        return Program::paginate($perPage);
    }
}
