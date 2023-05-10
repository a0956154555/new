<!DOCTYPE html>
<html>
<head>
	<title>表單範例</title>
</head>
<body>
	<h2>填寫表單</h2>
	<form method="post" action="submit.php">
		<label for="name">姓名：</label>
		<input type="text" id="name" name="name" required><br><br>

		<label for="email">電子郵件：</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="message">留言：</label><br>
		<textarea id="message" name="message" rows="5" required></textarea><br><br>

		<input type="submit" value="提交">
	</form>
</body>
</html>
