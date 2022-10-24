<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
	table {border-collapse:collapse;width:620px;margin:auto;border:solid green 1px;}
	th, td {font-size: 20px;text-align: left;padding: 8px; border-bottom:solid green 1px; color: #000080;}
	th{color: blue;background-color:#F0FFF0;}
	/*tr{border-bottom: dotted darkgreen 1px;}*/
	tr:hover{
		background-color: #FFFACD;
	}
	img{height:80px;border-radius:5px;}
	span{color: red;}
</style>
</head>
<body>
	<table>
		<tr><th>STT</th><th>Hình ảnh</th><th>Tên sách</th><th>Đơn giá</th><th>NXB</th></tr>

			<?php
			$servername = "localhost";
			$username = "root";
			$password = "vertrigo";
			$dbname = "qlsach";

			//Kết nối
			$link = mysqli_connect($servername, $username, $password);//Kết nối
			mysqli_select_db($link, $dbname);//chọn database
			
			//Sử lý truy vấn
			mysqli_set_charset($link, 'latin1');//data base ban đầu là utf-8 nhưng dữ liệU bên trong nó là latin1 nên phải chuyển về latin 1 trước khi thực hiện câu truy vấn đề không bị lỗi font
			$kq = mysqli_query($link, 'SELECT * FROM `sach` WHERE 1');//truy vấn xong gán vô biến kq

			//Hiện lên table
			$stt = 1;
			while($dong = mysqli_fetch_array($kq))
			{
				echo 
					'<tr>
						<td>'.$stt++.'</td>
						<td> <img src="'.$dong['hinhanh'].'"></td>
						<td>'.$dong['tensach'].'</td>
						<td>'.number_format($dong['dongia']).'</td>
						<td>'.$dong['nxb'].'</td>
					</tr>';//Cái hình thì để dô thẻ img
			}
			?>
	</table>
</body>
</html>