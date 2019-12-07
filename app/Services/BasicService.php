<?php


namespace App\Services;
use App\Services\TestOne;

class BasicService
{
    private $TestOne;

    function __construct(TestOne $TO)
    {
        $this->TestOne = $TO;
    }

    public function getOne()
    {
        return $this->TestOne->get_all();
    }

    public function setOne($request)
    {
        $this->TestOne->set_all($request->input('ASS'), $request->input('DICK'), $request->input('ASSINSHIT'));
        return $this->TestOne->get_all();
    }
}
