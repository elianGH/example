<?php
namespace App\Services\FileStorage\Facades;

use Illuminate\Support\Facades\Facade;
use App\Services\FileStorage\StorageService;

class Storage extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return StorageService::class;
    }
}
