<?php

require_once '/vendor/autoload.php';
use App\Bar;

$foo = new Bar();

if($foo->run()){
    echo 'true';
} else {
    echo 'false';
}