<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('User/login_check');?>" method="post" accept-charset="utf-8">
		<label>email:</label>
		<input type="text" name="email" value="" placeholder="input you email">
		<br>
		<label>password:</label>
		<input type="password" name="password" value="" placeholder="input you password	">
		<br>
		<label>password again:</label>
		<input type="password" name="password2" value="" placeholder="again password">
		<br>
		<input type="submit" name="" value="login">
	</form>
</body>
</html>