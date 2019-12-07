<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BasicService;

class TestController extends Controller
{

    public function getOne()
    {
        return response()->json(BasicService::getOne());
    }

    public function setOne(Request $request)
    {
        return response()->json(BasicService::setOne($request));
    }
}
