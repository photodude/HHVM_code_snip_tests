<?php
require __DIR__ . '/vendor/autoload.php';
// ini_set('memory_limit', '512M');
echo "Memory is = " . ini_get("memory_limit") / 1048576 . " MB\n";
PHP_Timer::start();

class Left {
   public $right;
   public $one = 1;
}
class Right {
   public $left;
   public $two = 1;
}
$iter = 0;
while (true) {
   $left = new Left();
   $right = new Right();
   $left->right = $right;
   $right->left = $left;
   $iter++;
   if ($iter % 1000000 === 0) {
      $formattedIter = number_format($iter, 0);
      $memoryUsage = memory_get_peak_usage(true) / (1024 * 1024);
      echo "Survived {$formattedIter} iterations: {$memoryUsage}MB used\n";
      echo "resource useage" . PHP_Timer::resourceUsage() . "\n";
   }
}


//$var1 = array();
//$prePop = 268036506;
//
//
//for ($i = 0; $i < $prePop; $i++)
//{
//	$var1[] = "this is a short string";
//}
//
//$r = 0;
//
//for ($i = 0; $i < PHP_INT_MAX - 10000; $i++)
//{
//	$var1[] = "this is a short string";
//	$e = $prePop + $i;
//
//	if ($i = $r + 100000000000000000)
//	{
//		echo PHP_Timer::resourceUsage() . "\n";
//		echo "Memory usage for $e elements = " . memory_get_usage() / 1048576 . " MB\n";
//		$r = $i;
//		// echo "Maximum Memory usage at $e elements is = " . memory_get_peak_usage(true) / 1048576 . " MB\n";
//	}
//}
//
//$r = sizeof($var1);
//
//while ($i = sizeof($var1))
//{
//	if ($i = $r - 100 || $r < 100)
//	{
//		echo "Memory usage for $e elements = " . memory_get_usage() / 1048576 . " MB\n";
//		$r = $i;
//	}
//
//	unset($var1[$i -1]);
//}
//	echo "Maximum Memory usage = " . memory_get_peak_usage(true) / 1048576 . " MB\n";
