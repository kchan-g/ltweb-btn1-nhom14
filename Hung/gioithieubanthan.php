<?php
$hoten   = "Đinh Trịnh Ngọc Hưng";
$maSV    =  3120224065;
$lop     = "24CNTT2";
$sothich = "bóng đá, chơi game, lập trình web";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Giới thiệu bản thân</title>
</head>
<body>
  <h1>Tôi là <?php echo $hoten; ?> — lớp <?php echo $lop; ?></h1>
  <p>Mã sinh viên: <?php echo $maSV; ?></p>
  
  <p>Sở thích: <?php echo $sothich; ?></p>
  <p>Trang được tạo lúc: <?php echo date("H:i:s d/m/Y"); ?></p>
</body>
</html>
