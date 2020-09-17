<?php
namespace App\Repositories\Users;

use App\Models\Backend\Client;
use App\Contracts\Repositories\Users\ClientRepository as Contract;
use Illuminate\Database\Eloquent\Collection;

class ClientRepository implements Contract
{
    /**
     * Find by id
     *
     * @param int $id
     * @return Client
     */
    public function find(int $id): Client
    {
        return Client::findOrFail($id);
    }

    /**
     * Find by
     *
     * @param string $attribute
     * @param $value
     * @return Client|null
     */
    public function findBy(string $attribute, $value): ?Client
    {
        return Client::where($attribute, $value)->first();
    }

    /**
     * Get all data
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return Client::all();
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
        return Client::paginate($perPage);
    }
}
