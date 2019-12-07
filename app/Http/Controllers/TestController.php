<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BasicService;

class TestController extends Controller
{
    private $BasicService;

    function __construct(BasicService $BS)
    {
        $this->BasicService = $BS;
    }

    public function getOne()
    {
        return response()->json($this->BasicService->getOne());
    }

    public function setOne(Request $request)
    {
        return response()->json($this->BasicService->setOne($request));
    }
}
