<?php
namespace App\Storages\Database\Users;

use App\Contracts\Storages\Database\Users\ClientStorage as Contract;
use App\Models\Backend\Client;
use Illuminate\Http\Request;

class ClientStorage implements Contract
{
    /**
     * Store a newly created resource in database
     *
     * @param Request $request
     * @return Client
     */
    public function store(Request $request): Client
    {
        return Client::create($request->only([
            'username', 'first_name', 'last_name',
            'phone', 'email', 'password', 'client_role'
        ]));
    }

    /**
     * Update the specified resource in database.
     *
     * @param Request $request
     * @param int $id
     * @return bool
     */
    public function update(Request $request, int $id): bool
    {
        return Client::where('id', $id)->update($request->only([
            'username', 'first_name', 'last_name',
            'phone', 'email', 'client_role'
        ]));
    }

    /**
     * Destroy the specified resource
     *
     * @param int $id
     * @return bool
     */
    public function destroy(int $id): bool
    {
        return Client::destroy($id);
    }
}
