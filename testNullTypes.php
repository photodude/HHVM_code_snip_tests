<?php

$reporting = error_reporting(E_ERROR | E_COMPILE_ERROR);
$result = false;

try {
    $result = eval('function(?int $a){};return true;');
} catch (Throwable $e) {
} catch (Exception $e) {
    // ignore 
}

error_reporting($reporting);
$isSupported = true === $result;

var_dump($isSupported);
