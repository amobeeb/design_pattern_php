<?php

class ShapeFactory extends AbstractFactory{
    public function getShape($shape){
        if($shape == 'Square'){
            return new Square();
        }else{
            return new Rectangle();
        }
    }
}