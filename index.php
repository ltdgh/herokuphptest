<?php
$now = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
echo $now->format('G');

$hoge = getenv('LTDNAME');
echo $hoge;
