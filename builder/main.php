<?php
require_once('BuilderAbstract.class.php');
require_once('BuilderOne.class.php');
require_once('BuilderTwo.class.php');
require_once('Director.class.php');
/*
 *Builder deals with a  complex products
 *It enters the director, builder, concrete builder and product
 *Director controls the builder
 * Builder is an abstract class that contains the functions that can be used to build product
 * Concrete Builder extend Builder to implement Builder abstract class functions
 * Product is the final result
 * */
 
    $builder = new BuilderTwo();
    $director = new Director($builder);