<?php
  // กำหนดตัวแปรสำหรับชื่อ
  $name_th = "จิราภา บุญสมยา";
  $nickname = "นิ้ง";
  $faculty = "คณะการบัญชีและการจัดการ";
 $subject = "Web Programing";
  $university = "Mahasarakham University";
  $name_en = "Jirapa Bunsomya";
  $score = 21.3;

  // ส่วนแสดงผล
  echo "<h1>$name_th ($nickname)</h1>";
  
  echo $faculty . "<br>";
  echo $subject . "<br>";
  echo $university . "<br>";
  echo $name_en . "<br>";
  
  // แสดงผลประเภทข้อมูล (float)
  echo "float(" . $score . ")<br>";

  echo "<hr>"; // เส้นคั่นบรรทัดแรก

  // แสดงชื่อเพิ่มเติม
  echo "จิราภา บุญสมยา<br>";
  echo "ฝันให้ไกล ไปให้ถึง<br>";

  echo "<hr>"; // เส้นคั่นบรรทัดที่สอง

  // แสดงตัวเลขด้านล่าง
  echo "30";
?>