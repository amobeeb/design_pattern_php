<?php

class Main
{

    public function __construct(Array $routeName)
    {
      if($routeName[0]){
         
          $getClassName = substr($routeName[1], 0, strpos($routeName[1],'@'));
          $getClassMethod = substr($routeName[1], strpos($routeName[1],'@') + 1, strlen($routeName[1]));
          $classInstance = new $getClassName();
          $classInstance->$getClassMethod();
      }
    }
}

class HomeController{
    public function home(){
        echo 'You are welcome Home';
    }
}
// echo $_SERVER['REQUEST_URI'];
$rawRoute =  $_SERVER['REQUEST_URI'];
$route = substr($rawRoute, strrpos($rawRoute, '/'), strlen($rawRoute));

$webRoute = ['/home','HomeController@home'];
// echo $route ;
$main = new Main($webRoute);
