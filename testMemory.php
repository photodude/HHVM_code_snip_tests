<?php
$var1 = array();
$prePop = 1000000;


for ($i = 0; $i < $prePop; $i++)
{
	$var1[] = "this is a short string";
}

for ($i = 0; $i < PHP_INT_MAX - 10000; $i++)
{
	$var1[] = "this is a short string";
	$e = $prePop + $i;
	echo "Memory usage for $e elements = " . memory_get_usage() / 1048576 . " MB\n";
}

while ($i = sizeof($var1))
{
	echo "Memory usage for $i elements = " . memory_get_usage() / 1048576 . " MB\n";
	unset($var1[$i -1]);
}
	echo "Maximum Memory usage = " . memory_get_peak_usage(true) / 1048576 . " MB\n";
