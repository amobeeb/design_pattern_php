<?php

class ShapeFactory{
    public function getShape($shapeType){
        if($shapeType == 'Circle'){
            return new Circle();
        }else{
            return new Rectangle();
        }
    }
}