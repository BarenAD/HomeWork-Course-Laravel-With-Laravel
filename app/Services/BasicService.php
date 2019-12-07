<?php


namespace App\Services;
use App\Services\TestOne;

class BasicService
{
    public static function getOne()
    {
        $TempClass = new TestOne();
        return $TempClass->get_all();
    }

    public static function setOne($request)
    {
        $TempClass = new TestOne($request->input('ASS'), $request->input('DICK'), $request->input('ASSINSHIT'));
        return $TempClass->get_all();
    }
}
