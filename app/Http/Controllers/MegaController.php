<?php

namespace App\Http\Controllers;

use App\Exceptions\PahanDebilIsNotUnderstandExercise;
use App\Test;
use Illuminate\Http\Request;

class MegaController extends Controller
{
    public function get_test_by_id($in_id)
    {
        $response = Test::find_by_id($in_id);
        if (isset($response)) {
            return response()->json($response,200);
        } else {
            throw new PahanDebilIsNotUnderstandExercise("ROW IS NOT FOUND! BIG ASSS!");
        }
    }

    public function get_test_by_text($in_text)
    {
        return response()->json(Test::find_by_text($in_text));
    }
}
