<?php

$menu = "
==== MENU ====<br>
1. In toàn bộ thông tin sinh viên.<br>
2. Thêm 1 sinh viên mới.<br>
3. Tính điểm trung bình của toàn bộ sinh viên.<br>
4. In ra màn hình sinh viên có điểm trung bình cao nhất.<br>
5. Xếp loại sinh viên, in ra màn hình xếp loại từng sinh viên.<br>
  - Kém < 3.5<br>
  - 3.5 <= Yếu < 5<br>
  - 5 <= Trung Bình < 6.5<br>
  - 6.5 <= Khá < 8<br>
  - Giỏi > 8<br><br>
==== Bai Lam ====<br>";

echo $menu;

$students = array(
  "SV001" => array(
    "name" => "Nguyễn Văn A",
    "dob" => "2000-05-15",
    "average_score" => 1.5
  ),
  "SV002" => array(
    "name" => "Trần Thị B",
    "dob" => "1998-08-22",
    "average_score" => 4.8
  ),
  "SV003" => array(
    "name" => "Lê Văn C",
    "dob" => "2001-02-17",
    "average_score" => 9.0
  )
);

// Print all students
echo "1. Danh sách sinh viên:<br>";
foreach ($students as $id => $student) {
  echo "SV: {$student["name"]}<br>";
  echo "MSSV: $id<br>";
  echo "Ngay sinh: {$student["dob"]}<br>";
  echo "Diem Trung Binh: {$student["average_score"]}<br>";
  echo "<br>";
}

// Add a new student
$students["SV004"] = array(
  "name" => "Phạm Thị D",
  "dob" => "2004-11-03",
  "average_score" => 6.0
);
echo "2. Thêm 1 sinh viên:<br>
SV: {$students["SV004"]["name"]}<br>
MSSV: SV004<br>
Ngay sinh: {$students["SV004"]["dob"]}<br>
Diem trung binh: {$students["SV004"]["average_score"]}<br><br>";

// Calculate average_score all students
$sum = 0;
$number_student = 0;
foreach ($students as $id => $student) {
  $sum += $student["average_score"];
  $number_student++;
}
$avg_all = $sum / $number_student;
echo "3. Điểm trung bình của toàn bộ sinh viên: $avg_all<br><br>";

// Print student has highest average_score
$maxKey = null;
$maxValue = 0;
foreach ($students as $id => $student) {
  if ($student["average_score"] >= $maxValue) {
    $maxKey = $student["name"];
    $maxValue = $student["average_score"];
  }
}
echo "4. Sinh viên $maxKey có điểm trung bình cao nhất là $maxValue<br><br>";

// Sort student
echo "5. Xếp loại sinh viên:<br>";
foreach ($students as $id => $student) {
  if ($student["average_score"] < 3.5) {
    echo "- {$student["name"]} xếp loại <b>Kém</b> với điểm trung bình là {$student["average_score"]}<br>";
  } elseif ($student["average_score"] >= 3.5 && $student["average_score"] < 5) {
    echo "- {$student["name"]} xếp loại <b>Yếu</b> với điểm trung bình là {$student["average_score"]}<br>";
  } elseif ($student["average_score"] >= 5 && $student["average_score"] < 6.5) {
    echo "- {$student["name"]} xếp loại <b>Trung bình</b> với điểm trung bình là {$student["average_score"]}<br>";
  } elseif ($student["average_score"] >= 6.5 && $student["average_score"] < 8) {
    echo "- {$student["name"]} xếp loại <b>Khá</b> với điểm trung bình là {$student["average_score"]}<br>";
  } elseif ($student["average_score"] >= 8) {
    echo "- {$student["name"]} xếp loại <b>Giỏi</b> với điểm trung bình là {$student["average_score"]}<br>";
  }
}
