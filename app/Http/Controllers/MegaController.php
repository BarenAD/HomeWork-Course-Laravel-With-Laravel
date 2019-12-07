<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class MegaController extends Controller
{
    public function get_test_by_id($in_id)
    {
        return response()->json(Test::find_by_id($in_id));
    }
}
