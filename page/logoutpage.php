<?php
session_start();
if (isset($_SESSION['name'])) {
	session_destroy();
	header("location:loginpage.php");
}
elseif (isset($_COOKIE['name'])) {
	setcookie('name',$name,time()-3600);
	header("location:loginpage.php");
}

?>