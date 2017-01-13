<?php

$items = [1, 2, 3];

foreach ($items as &$v)
{
}

unset($v);
