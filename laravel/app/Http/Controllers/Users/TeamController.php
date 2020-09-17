<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\User\UpdateTeam;
use App\Http\Resources\Users\TeamResource;
use App\Http\Resources\Users\TeamCollection;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreTeam;
use App\Contracts\Repositories\Users\TeamRepository;
use App\Storages\Database\Users\TeamStorage;

class TeamController extends Controller
{
    /**
     * @var TeamRepository
     */
    protected TeamRepository $team;

    /**
     * AuthController constructor.
     * @param TeamRepository $team
     */
    public function __construct(TeamRepository $team)
    {
        $this->team = $team;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response->resource(
            new TeamCollection($this->team->all())
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTeam $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeam $request)
    {
        $member = app(TeamStorage::class)->store($request);

        return $this->response->created(new TeamResource($member));
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
            new TeamResource($this->team->find($id))
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeam $request, int $id)
    {
        if(app(TeamStorage::class)->update($request, $id)) {
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
        if(app(TeamStorage::class)->destroy($id)) {
            return $this->response->accepted();
        }

        return $this->response->notAcceptable();
    }
}
