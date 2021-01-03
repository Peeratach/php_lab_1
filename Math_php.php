<!DOCTYPE html>
<html>
<body>

<?php
//pi() Function
echo (pi());
echo "<br>";

//min() and max() Functions หาค้าน้อย ค่ามากสุด
echo(min(0, 150, 30, 20, -8, -200));
echo "<br>";
echo(max(0, 150, 30, 20, -8, -200));
echo "<br>";

//abs() Function
echo(abs(-6.7)); //ทำให้ค่าเป็น +
echo "<br>";

//sqrt() Function
echo(sqrt(64)); //หาค่าที่รากที่ 2 ของ 64
echo "<br>";

//round() Function
echo(round(0.60));  // ปัดค่า เป็น 1
echo "<br>";
echo(round(0.49));  // ปัดค่า เป็น 0
echo "<br>";

//Random Numbers
echo(rand()); // สุ่มค้าตัวเลข
echo "<br>";
echo(rand(10, 100)); //เป็นการกำหนดขอบเขตการสุ่ม
echo "<br>";

?>

</body>
</html>