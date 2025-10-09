<?php

$original = array("a", "b", "c", "d", "e");
$insterted = "x";

array_splice($original, 3, 0, $insterted);

echo var_dump($original);
?>
