<?php
/*
$items = [1, 2, 3];

foreach ($items as &$v)
{
}

unset($v);
*/
$items = [1, 2, 3];

foreach ($items as $k => $v)
{
	$z = &$items[$k];
}

unset($z);
