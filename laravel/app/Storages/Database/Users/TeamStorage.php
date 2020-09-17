<?php
namespace App\Storages\Database\Users;

use App\Contracts\Storages\Database\Users\TeamStorage as Contract;
use App\Models\Manager\User\Team;
use Illuminate\Http\Request;

class TeamStorage implements Contract
{
    /**
     * Store a newly created resource in database
     *
     * @param Request $request
     * @return Team
     */
    public function store(Request $request): Team
    {
        $member = Team::create($request->only([
            'nickname', 'first_name', 'last_name',
            'phone', 'email', 'password'
        ]));

        $member->assignRole($request->input('role'));

        return $member;
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
        $member = Team::findOrFail($id);

        if($member) {
            if( !$member->roles->where('id', $request->input('role'))->first()) {
                $member->assignRole($request->input('role'));
            }
        }

        return Team::where('id', $id)->update($request->only([
            'nickname', 'first_name', 'last_name',
            'phone', 'email'
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
        return Team::destroy($id);
    }
}
