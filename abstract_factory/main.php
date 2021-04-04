<?php


require_once('Shape.Interface.php');
require_once('AbstractFactory.class.php'); 
require_once('ShapeFactory.class.php');
require_once('FactoryProducer.class.php');
require_once('Rectangle.class.php');
require_once('RoundedRectangle.class.php');
require_once('RoundedSquare.class.php');
require_once('Square.class.php');

$a = FactoryProducer::getFactory(false);
 
$a->getShape('Square')->draw();