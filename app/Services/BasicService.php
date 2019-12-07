<?php


namespace App\Services;
use App\Services\TestOne;

class BasicService
{
    public function getOne()
    {
        $TempClass = new TestOne();
        return $TempClass->get_all();
    }

    public function setOne($request)
    {
        $TempClass = new TestOne($request->input('ASS'), $request->input('DICK'), $request->input('ASSINSHIT'));
        return $TempClass->get_all();
    }
}
