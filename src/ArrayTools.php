<?php

class ArrayTools extends ArrayObject{

    public static function pretty($array){
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
    }
}