<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/vendor/autoload.php';

require($path);

$app = new \Src\FactoryMethod\Example1\App();
