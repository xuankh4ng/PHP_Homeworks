<?php

$sv = array(
  "065" => array(
    "name" => "Khang",
    "NS" => 2004,
    "DTB" => 9.5,
  ),
  "109" => array(
    "name" => "Quan",
    "NS" => 2006,
    "DTB" => 7.5,
  ),
);

foreach ($sv as $key => $value) {
  echo "SV co MSSV la $key, ten la {$value["name"]} co diem TB la {$value["DTB"]} <br>";
}

?>
