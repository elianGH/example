<?php
namespace App\Storages\Database\Workout;

use App\Contracts\Storages\Database\Workout\EquipmentStorage as Contract;
use App\Models\Backend\Workout\Equipment;
use Illuminate\Http\Request;

class EquipmentStorage implements Contract
{
    /**
     * Store a newly created resource in database
     *
     * @param Request $request
     * @return Equipment
     */
    public function store(Request $request): Equipment
    {
        return Equipment::create($request->only([
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
        return Equipment::where('id', $id)->update($request->only([
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
        return Equipment::destroy($id);
    }
}
