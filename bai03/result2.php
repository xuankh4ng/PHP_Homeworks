<?php
if (isset($_POST)) {
  $a = $_POST["input_a"];
  $b = $_POST["input_b"];
  $c = $_POST["input_c"];

  echo "<h1>Phương trình bậc 2: {$a}x^2 + {$b}x + {$c} = 0<br></h1>";

  if ($a == 0) {
    if ($b == 0) {
      echo "Cả a và b đều không thể bằng 0 trong phương trình bậc 2";
    } else {
      $x = -$c / $b;
      echo "Phương trình có 1 nghiệm duy nhất: x = $x";
    }
  } else {
    $d = $b*$b - 4*$a*$c;

    echo "<h2>Ta có: d = $d<br></h2>";

    if ($d > 0) {
      $x1 = (-$b + sqrt($d)) / (2 * $a);
      $x2 = (-$b - sqrt($d)) / (2 * $a);

      echo "Nghiệm thứ nhất: x1 = $x1 <br>";
      echo "Nghiệm thứ hai: x2 = $x2";
    } elseif ($d == 0) {
      $x = -$b / (2 * $a);
      echo "Phương trình có nghiệm kép: x1 = x2 = $x";
    } else {
      echo "Phương trình vô nghiệm";
    }
  }
}
