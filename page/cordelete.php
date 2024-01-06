<?php 
    require_once'connection/sqlconnect.php';
    require_once'connection/function.php';
    $query="DELETE FROM cor";
	mysqli_query($connection,$query);
    header('location:dashboard.php');
?>