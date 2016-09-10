<?php
$var1 = array();
$prePop = 368036506;


for ($i = 0; $i < $prePop; $i++)
{
	$var1[] = "this is a short string";
}

$r = 0;

for ($i = 0; $i < PHP_INT_MAX - 10000; $i++)
{
	$var1[] = "this is a short string";
	$e = $prePop + $i;

	if ($i = $r + 1000)
	{
		//echo "Memory usage for $e elements = " . memory_get_usage() / 1048576 . " MB\n";
		$r = $i;
		echo "Maximum Memory usage at $e elements is = " . memory_get_peak_usage(true) / 1048576 . " MB\n";
	}
}

$r = sizeof($var1);

while ($i = sizeof($var1))
{
	if ($i = $r - 100 || $r < 100)
	{
		echo "Memory usage for $e elements = " . memory_get_usage() / 1048576 . " MB\n";
		$r = $i;
	}

	unset($var1[$i -1]);
}
	echo "Maximum Memory usage = " . memory_get_peak_usage(true) / 1048576 . " MB\n";
