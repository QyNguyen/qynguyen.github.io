<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký tài khoản</title>
</head>
<body>
	<h2>Đăng ký tài khoản</h2>
	<form method="POST" action="register.php">
		<label>Tên đăng nhập:</label>
		<input type="text" name="username" required><br>

		<label>Mật khẩu:</label>
		<input type="password" name="password" required><br>

		<label>Nhập lại mật khẩu:</label>
		<input type="password" name="confirm_password" required><br>

		<label>Email:</label>
		<input type="email" name="email" required><br>

		<button type="submit" name="register">Đăng ký</button>
	</form>
</body>
</html>