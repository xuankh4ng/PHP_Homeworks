<?php
class SinhVien
{
  public $mssv;
  public $ten;
  public $gt;
  public $ns;
  public $khoa;

  function __construct($mssv, $ten, $gt, $ns, $khoa)
  {
    $this->mssv = $mssv;
    $this->ten = $ten;
    $this->gt = $gt;
    $this->ns = $ns;
    $this->khoa = $khoa;
  }

  function gtbt()
  {
    echo "Em tên là $this->ten | 
      Mã số sinh viên: $this->mssv | 
      Giới tính: $this->gt | 
      Sinh năm $this->ns | 
      Thuộc khoa $this->khoa<br>";
  }
}

$phi = new SinhVien("103", "Phi", "Nam", 2005, "CNTT");
$khang = new SinhVien("065", "Khang", "Nam", 2004, "CNTT");

$phi->gtbt();
$khang->gtbt();
