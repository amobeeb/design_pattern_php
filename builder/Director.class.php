<?php
class Director{
    public function __construct(BuilderAbstract $build){
        $build->build();
    }
}