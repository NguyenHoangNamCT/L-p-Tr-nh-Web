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
				$link = mysqli_connect('127.0.0.1', 'root', 'vertrigo');
				mysqli_select_db($link, 'qlsach');
				mysqli_set_charset($link, 'latin1');
				$kq = mysqli_query($link, "select * from sach");
				$dem = 1;
				while($dong = mysqli_fetch_array($kq)){
					echo'
						<tr>
							<td>'.$dem++.'</td>
							<td><img src="'.$dong['hinhanh'].'" alt="Không tìm thấy hình ảnh"></td>
							<td>'.$dong['tensach'].'</td>
							<td>'.number_format($dong['dongia']).'</td>
							<td>'.$dong['nxb'].'</td>
						</tr>
					';
				}
			?>
	</table>
</body>
</html>