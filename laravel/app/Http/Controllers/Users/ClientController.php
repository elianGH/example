<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\User\UpdateClient;
use App\Http\Resources\Users\ClientResource;
use App\Http\Resources\Users\ClientCollection;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreClient;
use App\Contracts\Repositories\Users\ClientRepository;
use App\Storages\Database\Users\ClientStorage;

class ClientController extends Controller
{
    /**
     * @var ClientRepository
     */
    protected ClientRepository $Client;

    /**
     * AuthController constructor.
     * @param ClientRepository $Client
     */
    public function __construct(ClientRepository $Client)
    {
        $this->Client = $Client;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response->resource(
            new ClientCollection($this->Client->all())
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClient $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClient $request)
    {
        $member = app(ClientStorage::class)->store($request);

        return $this->response->created(new ClientResource($member));
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
            new ClientResource($this->Client->find($id))
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClient $request, int $id)
    {
        if(app(ClientStorage::class)->update($request, $id)) {
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
        if(app(ClientStorage::class)->destroy($id)) {
            return $this->response->accepted();
        }

        return $this->response->notAcceptable();
    }
}
