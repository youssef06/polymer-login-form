<?php
$email = isset($_POST["email"])?$_POST["email"]:"";
$password = isset($_POST["password"])?$_POST["password"]:"";

if($email == "youssef@gmail.com" && $password == "123456")
{
	header("location:http://www.google.com");
}
else {
	header("location:index.php?error=1");
}
?>