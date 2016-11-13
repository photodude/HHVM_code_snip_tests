<?php
error_reporting(E_ALL);
$b = array(
  'index.php' =>
  array(
    'relation' => "Start",
    'relType'  => "rel",
    'attribs'  => array(),
  ),
  'foo' => array('bar')
);
$c = array(
  'index.php' => 
  array(
    'relation' => "Start",
    'relType'  => "rel",
    'attribs'  => array(),
  ),
  'foo' => array('bar')
);
$u = array_unique(array_merge($b,$c), SORT_REGULAR);
