<?php


namespace App\Services;

class BasicService
{
    private $TestOne;

    function __construct($TO)
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

    public function retSixItem($request)
    {
        try{
            if (isset($request->input('string')[5])){
                return $request->input('string')[5];
            } else {
                throw new \ErrorException('Set STRING IN BODY MYDAK!', 500);
            }
        } catch (\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ],$e->getCode());
        }
    }
}
