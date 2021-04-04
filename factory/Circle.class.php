<?php

class Circle implements Shape{
    public function draw(){
        echo 'This is circle';
    }

    public function generateIterator($array){
        for($i = 0; $i<count($array); $i++){
            yield $array[$i];
        }
        
    }
}