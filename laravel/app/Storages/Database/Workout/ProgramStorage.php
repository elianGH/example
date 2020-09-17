<?php
namespace App\Storages\Database\Workout;

use App\Contracts\Storages\Database\Workout\ProgramStorage as Contract;
use App\Models\Backend\Workout\Program;
use Illuminate\Http\Request;

class ProgramStorage implements Contract
{
    /**
     * Store a newly created resource in database
     *
     * @param Request $request
     * @return Program
     */
    public function store(Request $request): Program
    {
        return Program::create($request->only([
            'title', 'body_part',
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
        return Program::where('id', $id)->update($request->only([
            'title', 'body_part',
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
        return Program::destroy($id);
    }
}
