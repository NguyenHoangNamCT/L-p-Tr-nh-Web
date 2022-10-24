<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form style="display:inline">		
	<input type="text" name="txttukhoa" placeholder="Nhập từ khóa">
	<?php 
		$link = mysqli_connect('localhost', 'root', 'vertrigo');
		mysqli_select_db($link, 'qltin');
		mysqli_set_charset($link, "latin1");
		$resultsDM = mysqli_query($link, 'select * from danhmuc');
		$resultsDD = mysqli_query($link, 'select * from diadiem');
	?>
	
	<select>
		<option value="">--- Chọn danh mục ---</option>
		<?php
		while($r = mysqli_fetch_array($resultsDM)){
			echo'
				<option>'.$r['tendm'].'</option>
			';
		}
		?>
	</select>
	<select>
		<option>--- Chọn địa điểm ---</option>
		<?php
			while($r = mysqli_fetch_array($resultsDD)){
				echo'
					<option>'.$r['tendd'].'</option>
				';
			}
		?>
	</select>
	<input type="submit" value="Tìm kiếm">
</form>	
</body>
</html>