<?php
define('HOST','localhost');
define('USERNAME','root');
define('PWD','');
define('DB','vavuniya_uni');
$connection = mysqli_connect(HOST,USERNAME,PWD,DB);
if($connection){
    echo "";
}
else{
    die("connection.error".mysqli_connect_error());
}
?>