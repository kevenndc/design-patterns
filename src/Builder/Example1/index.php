<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/vendor/autoload.php';

require($path);

$app = new \Src\Builder\Example1\App();
