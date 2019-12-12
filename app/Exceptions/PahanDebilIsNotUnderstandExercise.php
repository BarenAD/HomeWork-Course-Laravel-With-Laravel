<?php

namespace App\Exceptions;

use Exception;

class PahanDebilIsNotUnderstandExercise extends Exception
{
    public function render($request)
    {
        return response()->json([
            'error' => $this->getMessage()
        ],500);
    }
}
