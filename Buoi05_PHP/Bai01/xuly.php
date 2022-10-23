<!DOCTYPE html>		
<html>

<head>
	<meta charset="utf-8">
	<title>Bài 1</title>
	<style>
		* {
			font-family: Arial;
			font-size: 12pt;
		}
		
		p.ThongBaoLoi {
			color: #ff0000;
			margin: 3px 0 3px 0;
		}
		
		p.ThongBao {
			color: #0000ff;
			margin: 3px 0 3px 0;
		}
	</style>
</head>

<body>
	<?php
		// Kết nối và chọn cơ sở dữ liệu
		
		
		// Lấy dữ liệu trừ form
		
		
		// Kiểm tra
		
		
		// Lưu dữ liệu
		
		
		function ThongBaoLoi($thongbao = "")
		{
			echo "<h3>Lỗi</h3><p class='ThongBaoLoi'>$thongbao <a href='javascript:history.go(-1);'>Quay lại trang trước</a></p>";
		}
		
		function ThongBao($thongbao = "")
		{
			echo "<h3>Hoàn thành</h3><p class='ThongBao'>$thongbao</p>";
		}
	?>
</body>

</html>