<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/vendor/autoload.php';

require($path);

$app = new \Src\AbstractFactory\Example1\App();
