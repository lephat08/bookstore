<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký tài khoản</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">

</head>
<body>
	<div class="header">
		<h2>Đăng ký</h2>
	</div>

	<form method="post" action="register.php">
 		<?php include('errors.php'); ?> 
		<div class="input-group">
			<label>Tên đăng nhập</label>
			<input type="text" name="username" value="<?php $username; ?>">
		</div>
		<div class="input-group">
			<label>Mật khẩu</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Xác nhận mật khẩu</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Đăng ký</button>
			
		</div>
		<p>
			Bạn đã sẵng sàng đăng nhập ? <a href="login.php">Đăng nhập</a>
		</p>

		
	</form>


</body>
</html>