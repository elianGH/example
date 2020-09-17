<?php
namespace App\Repositories\Users;

use App\Models\Manager\User\Team;
use App\Contracts\Repositories\Users\TeamRepository as Contract;
use Illuminate\Database\Eloquent\Collection;

class TeamRepository implements Contract
{
    /**
     * Find by id
     *
     * @param int $id
     * @return Team
     */
    public function find(int $id): Team
    {
        return Team::findOrFail($id);
    }

    /**
     * Find by
     *
     * @param string $attribute
     * @param $value
     * @return Team|null
     */
    public function findBy(string $attribute, $value): ?Team
    {
        return Team::where($attribute, $value)->first();
    }

    /**
     * Get all data
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return Team::all();
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
        return Team::paginate($perPage);
    }
}
