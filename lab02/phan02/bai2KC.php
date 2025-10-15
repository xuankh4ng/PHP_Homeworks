<?php
if (isset($_POST)) {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm = $_POST["confirm"];

  if ($password == $confirm) {
    echo "<h1>Đăng ký thành công</h1>";
    echo "Họ và tên: $username<br>";
    echo "Email: $email<br>";
  } else {
    echo "<strong>Mật khẩu và xác thực không trùng khớp</strong>";
  }
}
