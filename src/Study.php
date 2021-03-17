<?php


namespace Breeze;


class Study
{

    protected $version = '1.3';

    public function index(){
        return 'hello word';
    }


    public function newSum(int $a, int $b){

        return $a+$b;
    }
}