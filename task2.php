<?php
 
function addPrefix($prefix, $array) {
    foreach ($array as &$string) {
        $string = $prefix.$string;
    }
    return $array;
}

$prefix2 = "prefix_";
$array2 = array("string1", "string2", "string3");
$modifiedStringArray = addPrefix($prefix2, $array2);
var_dump($modifiedStringArray);




