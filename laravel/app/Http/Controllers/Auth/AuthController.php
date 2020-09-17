<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Auth;
use App\Contracts\Repositories\Users\TeamRepository;
use App\Http\Resources\Users\TeamResource as TeamResource;

class AuthController extends Controller
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
     * Login user
     *
     * @param LoginRequest $request
     * @return mixed
     */
    public function login(LoginRequest $request)
    {
        $credentials = array_merge($request->only('phone', 'password'), ['ban' => 'false']);

        if (Auth::attempt($credentials)) {
            $user = $this->team->findBy("phone", $request->input("phone"));

            if($user) {
                return $this->response->resource(
                    new TeamResource($user, $user->createToken($request->input('device_name'))->plainTextToken)
                );
            }
        }

        return $this->response->errorUnauthorized();
    }
}
