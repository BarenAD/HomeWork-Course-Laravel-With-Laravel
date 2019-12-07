<?php


namespace App\Services;


class TestOne
{
    private $Ass;
    private $Dick;
    private $assInShit;

    function __construct($inAss = "BIG", $inDick = 800, $inAssInShit = true)
    {
        $this->Ass = $inAss;
        $this->Dick = $inDick;
        $this->assInShit = $inAssInShit;
    }

    public function set_all($inAss = "BIG", $inDick = 800, $inAssInShit = true)
    {
        $this->Ass = $inAss;
        $this->Dick = $inDick;
        $this->assInShit = $inAssInShit;
    }

    public function get_all()
    {
        return [
            "ASS" => $this->Ass,
            "Dick" => $this->Dick,
            "assInShit" => $this->assInShit,
        ];
    }
}
