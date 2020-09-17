<?php

namespace App\Http\Controllers;

use App\Http\Response\ResponseFactory;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use ErrorException;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Authenticated user
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function user()
    {
        return Auth::user();
    }

    /**
     * Response factory
     *
     * @return ResponseFactory
     */
    public function response(): ResponseFactory
    {
        return app(ResponseFactory::class);
    }

    /**
     * Magically handle calls to certain properties.
     *
     * @param string $key
     *
     * @throws ErrorException
     *
     * @return mixed
     */
    public function __get($key)
    {
        $callable = [
            'user',
            'response',
        ];
        if (in_array($key, $callable) && method_exists($this, $key)) {
            return $this->$key();
        }
        throw new ErrorException(sprintf('Undefined property %s::%s', get_class($this), $key));
    }
    /**
     * Magically handle calls to certain methods on the response factory.
     *
     * @param string $method
     * @param array  $parameters
     *
     * @throws ErrorException
     *
     * @return ResponseFactory
     */
    public function __call($method, $parameters): ResponseFactory
    {
        if (method_exists($this->response(), $method) || $method == 'array') {
            return call_user_func_array([$this->response(), $method], $parameters);
        }
        throw new ErrorException(sprintf('Undefined method %s::%s', get_class($this), $method));
    }
}
