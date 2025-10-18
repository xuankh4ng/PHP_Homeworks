<?php
// Kế thừa
class Human
{
  public $name;
  public $ns;
  public $gt;

  function __construct($name, $ns, $gt)
  {
    $this->name = $name;
    $this->ns = $ns;
    $this->gt = $gt;
  }

  function gtbt()
  {
    echo "Tôi tên là $this->name | Sinh năm $this->ns | Giới tính: $this->gt<br>";
  }
}

/* Kế thừa Human thông qua "extends" */
class SinhVien extends Human
{
  public $mssv;
  public $khoa;
  public $gpa;

  function __construct($name, $ns, $gt, $mssv, $khoa, $gpa)
  {
    $this->name = $name;
    $this->ns = $ns;
    $this->gt = $gt;
    $this->mssv = $mssv;
    $this->khoa = $khoa;
    $this->gpa = $gpa;
  }

  function qua_mon($ten_mon)
  {
    echo "Chúc mừng bạn $this->name đã qua môn $ten_mon<br>";
  }
}

$khang = new SinhVien("Khang", 2004, "Nam", "065", "CNTT", 3.8);
$phi = new SinhVien("Phi", 2005, "Nam", "125", "CNTT", 2.8);

$khang->gtbt();
$khang->qua_mon("PHP");

$phi->gtbt();
$phi->qua_mon("Cơ sở Toán");
