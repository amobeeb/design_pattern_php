<?php
class FactoryProducer{
    public static function getFactory($isRounded){
        if($isRounded == true){
            return new RoundedShapeFactory();
        }else{
            return new ShapeFactory();
        }
    }
}