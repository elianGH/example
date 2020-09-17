<?php
namespace App\Contracts\Storages\Database\Workout;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface ExerciseStorage
{
    /**
     * Store a newly created resource in database
     *
     * @param Request $request
     * @return Model
     */
    public function store(Request $request): Model;

    /**
     * Update the specified resource in database.
     *
     * @param Request $request
     * @param int $id
     * @return bool
     */
    public function update(Request $request, int $id): bool;

    /**
     * Destroy the specified resource
     *
     * @param int $id
     * @return bool
     */
    public function destroy(int $id): bool;
}
