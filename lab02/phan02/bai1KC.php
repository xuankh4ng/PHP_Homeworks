<?php
if (isset($_POST)) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username == "admin" && $password == "123456") {
    echo "Đăng nhập thành công";
  } else {
    echo "Sai thông tin";
  }
}
