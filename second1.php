<?php
error_reporting( E_ALL&~E_NOTICE);
$name=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
if($password!=$repassword)
{
	echo "<script type='text/javascript'>alert('reprintf your password');</script>";
}
if(!$password)
{
	echo "<script type='text/javascript'>alert('reprintf your password');</script>";
}
if(!$name)
{
	echo "<script type='text/javascript'>alert('reprintf your name');</script>";
}
if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
{
	echo "<script type='text/javascript'>alert('reprintf your email');</script>";
}
if(($password==$repassword)&&($name)&&(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)))
{
	echo "<script type='text/javascript'>alert('you have successful to login');</script>";
	session_start();
	$_SESSION['view']=$name;
	$_SESSION['pass']=$password;
	header('location:second2.php');
}
?>