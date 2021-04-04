<?php
require_once('Singleton.class.php');
require_once('Config.class.php');

 $config = Config::getInstance();
 $config1 = Config::getInstance();
$config->setValue('name', 'Habeeb');
echo $config1->getValue('name');