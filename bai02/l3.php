<?php
// Hour, Minute, Second, Month, Day, Year
$d1 = strtotime("2025-10-04 08:30:00");
echo date("d/m/y h:i:s", $d1);
echo "<br>";

$new_d1 = strtotime("+80 minutes", $d1);

echo date("d/m/y h:i:s", $new_d1);
?>
