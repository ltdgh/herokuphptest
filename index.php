<?php
$now = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
echo $now->format('G');
