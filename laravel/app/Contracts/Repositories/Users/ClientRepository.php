<?php
namespace App\Contracts\Repositories\Users;

use App\Models\Backend\Client;
use Illuminate\Database\Eloquent\Collection;

interface ClientRepository
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
     * @return Client|null
     */
    public function find(int $id): ?Client;

    /**
     * Find by attribute
     *
     * @param string $attribute
     * @param $value
     * @return Client|null
     */
    public function findBy(string $attribute, $value): ?Client;

    /**
     * Get data with filters and paginate
     *
     * @param $filters
     * @param int $perPage
     * @return Collection
     */
    public function get($filters, int $perPage = 10): Collection;
}
