<?php

namespace App\Http\Controllers;

use App\Facades\BasicServiceFacade;
use App\Test;
use Illuminate\Http\Request;
use App\Services\BasicService;

class TestController extends Controller
{
    public function getOne()
    {
        return response()->json(BasicServiceFacade::getOne());
    }

    public function setOne(Request $request)
    {
        return response()->json(BasicServiceFacade::setOne($request));
    }
}
