<?php
class Database
{
  public $CONFIG_servername = "localhost";  // Domain cần kết nối
  public $CONFIG_username = "root";  // Default
  public $CONFIG_password = "";  // Default
  public $CONFIG_dbname = "bookshop";

  public $connect;  // Connector
  public $query = null;

  // Khởi tạo
  public function __construct()
  {
    $this->connect = new mysqli(
      $this->CONFIG_servername,
      $this->CONFIG_username,
      $this->CONFIG_password,
      $this->CONFIG_dbname
    );
  }

  // Đặt câu truy vấn
  public function setQuery($sql_query)
  {
    $this->query = $sql_query;
  }

  // Thực thi
  public function excuteQuery()
  {
    $result = $this->connect->query($this->query);
    return $result;
  }

  // Ngắt kết nối
  public function close()
  {
    $this->connect->close();
  }
}
