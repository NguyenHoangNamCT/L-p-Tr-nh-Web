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
		
		table {
			width: 550px;
			border-collapse: collapse;
		}
		
		td {
			border: 1px solid #000000;
			padding: 5px;
		}
		
		.TieuDe {
			font-size: 16pt;
			text-align: center;
			height: 40px;
			font-weight: bold;
			background-color: #089542;
			color: #ffffff;
		}
		
		.TieuDeChan {
			font-size: 16pt;
			text-align: center;
			height: 40px;
			font-weight: bold;
		}
		
		input[type=submit] {
			border: 1px solid #7A2211;
			background: #CCE6FD;
			padding: 5px 12px;
			font-weight: bold;
		}
		
		input[type=reset] {
			border: 1px solid #7A2211;
			background: #D3D3D3;
			padding: 5px 21px;
			font-weight: bold;
		}

		input.error, select.error, textarea.error{
			border: 1px solid red;
		}

		label.error{
			color: red;
			display: block;/*một mình một hàng */
			font-size: 10pt;
		}
	</style>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script>
		//cách 1
		// $(document).ready(function(){
		// })
		//cách 2
		$(function(){
			var dem = 1;
			// $('choai').caigi();
			//------------------------- Áp dụng phương thức validate cho form để bắt lỗi không nhập ô bắt buộc bằng cách thêm required vào ô mình muốn bắt buộc -------------------------
			$('form').validate();
			//đổi chuổi báo lỗi thông tin bắt buộc theo ý mình
			$.validator.messages.required = 'Đây là thông tin bắt buộc nhập';
			//đổi chuổi báo lỗi email theo ý mình
			$.validator.messages.email = 'email không đúng định dạng';
			//đổi chuổi báo lỗi number theo ý mình
			$.validator.messages.number = 'Điện thoại phải là số';
			//------------------------- Ẩn hiện form -------------------------
			//cách 1
			// $('a').on('click', function(){
			// 	show();
			// });
			//cách 2
			$('a').click(function(){
				if(dem%2==0)
					document.getElementById("TrangThai").innerHTML = "Ẩn form";
				else
					document.getElementById("TrangThai").innerHTML = "Hiện form";
				$('form').toggle();
				// $('form').show();
				dem++;
			});
		})

	</script>
</head>

<body>
	<a href="#" id="TrangThai">Ẩn form</a>
	<form name ="f" method="post	" action="xuly.php">
		<table border="1" cellpadding="2" align="center">
			<tr>
				<td colspan="2" class="TieuDe">LIÊN HỆ GÓP Ý</td>
			</tr>
			<tr>
				<td width="30%">Họ và tên: (*)</td>
				<td width="70%"><input required type="text" name="HoVaTen" style="width:380px;"></td>
			</tr>
			<tr>
				<td>Email: (*)</td>
				<td><input class="email" required type="text" name="Email" style="width:380px;"></td>
			</tr>
			<tr>
				<td>Điện thoại:</td>
				<td><input class="number" type="text" name="DienThoai" style="width:380px;"></td>
			</tr>
			<tr>
				<td>Lĩnh vực góp ý: (*)</td>	
				<td>
					<select required name="LinhVucGopY" size="1">
						<option value="">-- Chọn --</option>
						<option value="Giao diện trang web">Giao diện trang web</option>
						<option value="Nội dung trang web">Nội dung trang web</option>
						<option value="Phạm vi khác">Phạm vi khác</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nội dung góp ý: (*)</td>	
				<td>
					<textarea required name="NoiDungGopY" style="width:380px;" rows="5"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="TieuDeChan">
					<input type="submit" value="Gởi góp ý">
					<input type="reset" value="Xóa làm lại">
				</td>
			</tr>
		</table>
	</form>
</body>

</html>