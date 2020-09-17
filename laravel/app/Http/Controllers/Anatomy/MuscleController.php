<?php

namespace App\Http\Controllers\Anatomy;

use App\Repositories\Anatomy\MuscleRepository;
use App\Http\Controllers\Controller;
use App\Http\Resources\Anatomy\Muscles\MuscleCollection;
use App\Http\Resources\Anatomy\Muscles\MuscleResource;
use App\Http\Requests\Anatomy\Muscle\StoreMuscle;
use App\Http\Requests\Anatomy\Muscle\UpdateMuscle;
use App\Storages\Database\Anatomy\MuscleStorage;

class MuscleController extends Controller
{
    /**
     * @var MuscleRepository
     */
    protected MuscleRepository $muscle;

    /**
     * AuthController constructor.
     * @param MuscleRepository $muscle
     */
    public function __construct(MuscleRepository $muscle)
    {
        $this->muscle = $muscle;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response->resource(
            new MuscleCollection($this->muscle->all())
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMuscle $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMuscle $request)
    {
        $muscle = app(MuscleStorage::class)->store($request);

        return $this->response->created(new MuscleResource($muscle));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return $this->response->resource(
            new MuscleResource($this->muscle->find($id))
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMuscle $request, int $id)
    {
        if(app(MuscleStorage::class)->update($request, $id)) {
            return $this->response->accepted();
        }

        return $this->response->notAcceptable();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        if(app(MuscleStorage::class)->destroy($id)) {
            return $this->response->accepted();
        }

        return $this->response->notAcceptable();
    }
}
