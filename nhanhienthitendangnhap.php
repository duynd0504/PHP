<!DOCTYPE html>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
<head>
	<title>
		TAO FORM DANG NHAP PHP 
	</title>
</head>
<body>
	<form method="POST" name="#">
		<h2>Nhập tên đăng nhập:</h2>
	   <input type="text" name="ten_dang_nhap"> 
       <input type="submit" value="Đăng nhập"> 
	</form>
	<?php  
		$name = $_POST['ten_dang_nhap'];
		echo "<h3>Chúc mừng $name đã đăng nhập thành công!</h3>";
	?>
</body>
</html>