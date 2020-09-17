<?php
namespace App\Storages\Database\Anatomy;

use App\Contracts\Storages\Database\Anatomy\MuscleStorage as Contract;
use App\Models\Backend\Anatomy\Muscle;
use Illuminate\Http\Request;

class MuscleStorage implements Contract
{
    /**
     * Store a newly created resource in database
     *
     * @param Request $request
     * @return Muscle
     */
    public function store(Request $request): Muscle
    {
        return Muscle::create($request->only([
            'title', 'body_part'
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
        return Muscle::where('id', $id)->update($request->only([
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
        return Muscle::destroy($id);
    }
}
