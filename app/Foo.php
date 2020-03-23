<?php

namespace App;

class Foo
{
    function run(){
        return true;
    }

    function add($a, $b){
        return $a + $b;
    }

    function throwException(){
        throw new \Exception('Divide by zero');
    }
}