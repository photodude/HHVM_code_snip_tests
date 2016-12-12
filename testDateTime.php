<?php

$dateTime = new DateTime('2016-10-29 10:00:00');
var_dump('created :' . $dateTime->format('Y-m-d\TH:i:s.u')); // 2016-10-29 10:00:00
$dateTime->add(new DateInterval('P1D'));
var_dump($dateTime); // 2016-10-30 10:00

$dateTime = new DateTime('2016-10-29 10:00:00');
var_dump('created :' . $dateTime->format('Y-m-d\TH:i:s.u')); // 2016-10-29 10:00:00
$dateTime->add(new DateInterval('PT24H'));
var_dump($dateTime); // 2016-10-30 09:00
