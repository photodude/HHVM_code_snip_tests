<?php
$filename = 'bad.ini'; // The bad.ini file
$contents = file_get_contents($filename);
$contents = str_replace('_QQ_', '"\""', $contents);
$strings = @parse_ini_string($contents);

if (!is_array($strings))
{
$strings = array();
}

echo $strings;
