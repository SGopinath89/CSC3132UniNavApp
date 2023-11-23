<?php
define('HOST','localhost');
define('USERNAME','root');
define('PWD','');
define('DB','UOV');
$connection = mysqli_connect(HOST,USERNAME,PWD,DB);
if($connection){
    echo "Database connected";
}
else{
    die("connection.error".mysqli_connect_error());
}
?>