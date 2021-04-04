<?php

class RoundedShapeFactory extends AbstractFactory{
    public function getShape($shape){
        if($shape == 'RoundedSquare'){
            return new RoundedSquare();
        }else{
            return new RoundedRectangle();
        }
    }
}