<?php

function getCount($hipster, $smoothy) {
   $count = floor($hipster / $smoothy);
   return $count;
}

$n = 25;
$m = 10;

$hipster2 = getCount($n, $m);
var_dump($hipster2);