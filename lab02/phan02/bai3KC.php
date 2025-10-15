<?php
if (isset($_POST)) {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $phone_number = $_POST["phone-number"];
  $content = $_POST["content"];

  echo "<h1>Thông tin liên hệ:</h1>";
  echo "Họ và tên: $username<br>";
  echo "Email: $email<br>";
  echo "Số điện thoại: $phone_number<br>";
  echo "Nội dung liên hệ: $content";
}
