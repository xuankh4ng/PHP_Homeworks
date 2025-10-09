<h1>Tính tổng, hiệu, tích, thương của 2 số</h1>
<?php
if (isset($_POST)) {
  $x = $_POST["first_number"];
  $y = $_POST["second_number"];

  echo "<h2>x = $x; y = $y</h2><br>";

  $sum = $x + $y;
  $minus = $x - $y;
  $multi = $x * $y;
  $divide = $x / $y;

  echo "Tổng: $x + $y = $sum<br>";
  echo "Hiệu: $x - $y = $minus<br>";
  echo "Tích: $x * $y = $multi<br>";
  echo "Thương: $x / $y = $divide<br>";
}
?>
