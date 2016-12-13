<?php

$e = new Exception();
$type = 'Throwable';

var_dump($e instanceof Throwable);
var_dump($e instanceof $type);
