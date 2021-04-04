<?php
require_once('Shape.interface.php');
require_once('Circle.class.php');
require_once('Rectangle.class.php');
require_once('ShapeFactory.class.php');

 $shape = new ShapeFactory();
 $shape2 = $shape->getShape('Circle');
 $shape2->draw();
 foreach($shape2->generateIterator(['Habeeb', 'Amode']) as $a){
     echo $a;
 }