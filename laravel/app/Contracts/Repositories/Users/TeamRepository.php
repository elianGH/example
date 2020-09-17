<?php
namespace App\Contracts\Repositories\Users;

use App\Models\Manager\User\Team;
use Illuminate\Database\Eloquent\Collection;

interface TeamRepository
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
     * @return Team|null
     */
    public function find(int $id): ?Team;

    /**
     * Find by attribute
     *
     * @param string $attribute
     * @param $value
     * @return Team|null
     */
    public function findBy(string $attribute, $value): ?Team;

    /**
     * Get data with filters and paginate
     *
     * @param $filters
     * @param int $perPage
     * @return Collection
     */
    public function get($filters, int $perPage = 10): Collection;
}
