<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="/crudbuku/assets/css/login.css">
</head>
<body>
	<form method="post" action="<?php echo site_url('admin/user/login'); ?>" id="box-login">
		<h3>Login</h3>
		<div><input type="text" name="username" placeholder="Username" style="width: 100%"></div>
		<div><input type="password" name="password" placeholder="Password" style="width: 100%"></div>
		<div><button type="submit">Login</button></div>
	</form>
</body>
</html>