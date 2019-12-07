<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BasicService;

class TestController extends Controller
{
    private $BasicServise;

    function __construct(BasicService $BS)
    {
        $this->BasicServise = $BS;
    }

    public function getOne()
    {
        return response()->json($this->BasicServise->getOne());
    }

    public function setOne(Request $request)
    {
        return response()->json($this->BasicServise->setOne($request));
    }
}
