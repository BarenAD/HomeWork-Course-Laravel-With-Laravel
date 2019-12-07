<?php


namespace App\Facades;

use http\Env\Request;
use Illuminate\Support\Facades\Facade;

/**
 * @method static getOne()
 * @method static setOne(Request $request)
 * @see \App\Facades\BasicServiceFacade
 */
class BasicServiceFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'service.basic_service';
    }
}
