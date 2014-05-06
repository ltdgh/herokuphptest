<?php

$tz = new DateTimeZone('Asia/Tokyo');
$now = new DateTime('now', $tz);
echo $now->format('G');

$now2 = new DateTime('now', new DateTimeZone('asia/tokyo'));
echo $now2->format('G');

//$hoge = getenv('LTDNAME');
//echo $hoge;
