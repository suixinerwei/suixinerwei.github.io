<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
		body
		{
			background-image: url(background_hd_04.jpg);
			background-repeat: no-repeat;
		}
	</style>
</head>
<body>
	<center style="color: white">
	<h1>登录界面</h1>
	<form method="POST" action="">
		用户名：<input type="text" name="user"><br>
		密码:<input type="password" name="password"><br>
		<input type="submit" name="sub" value="提交">
</body>

<?php
session_start();
$x=$_POST['user'];
$z=$_POST['password'];
if($x==$_SESSION['view']&&$z==$_SESSION['pass'])
	echo "<script type='text/javascript'>alert('you are succeed');</script>";
?>
</center>