<?php
require("../model/model_user.php");
session_start();

if (isset($_POST)) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $role = 1;

  $new_user = new User();
  $new_user->create_1_user($username, $password, $firstname, $lastname, $role);

  echo "Đăng ký thành công";
}
?>
