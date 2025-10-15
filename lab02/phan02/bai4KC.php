<h1>Tính diện tích hình chữ nhật</h1>
<?php
if (isset($_POST)) {
  $width = $_POST["width"];
  $height = $_POST["height"];

  echo "Chiều dài: $width<br>";
  echo "Chiều rộng: $height<br>";

  $area = $height * $width;
  echo "=> Kết quả: $area<br>";
}
