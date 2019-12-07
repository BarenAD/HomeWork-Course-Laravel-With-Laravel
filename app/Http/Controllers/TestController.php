<?php

namespace App\Http\Controllers;

use App\Facades\BasicServiceFacade;
use Illuminate\Http\Request;
use App\Services\BasicService;

class TestController extends Controller
{

    public function getOne()
    {
        return response()->json($this->BasicService->getOne());
    }

    public function setOne(Request $request)
    {
        return response()->json($this->BasicService->setOne($request));
    }
}
