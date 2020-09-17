<?php
namespace App\Storages\Database\Workout;

use App\Contracts\Storages\Database\Workout\ExerciseStorage as Contract;
use App\Models\Backend\Workout\Exercise;
use Illuminate\Http\Request;

class ExerciseStorage implements Contract
{
    /**
     * Store a newly created resource in database
     *
     * @param Request $request
     * @return Exercise
     */
    public function store(Request $request): Exercise
    {
        return Exercise::create($request->only([
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
        return Exercise::where('id', $id)->update($request->only([
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
        return Exercise::destroy($id);
    }
}
