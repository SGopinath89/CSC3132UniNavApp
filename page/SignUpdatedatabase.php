<?php
$con = mysqli_connect("localhost","root","","register");
if(!$con)
{
    die('Connection failed');
}
if(isset($_POST['submit']))
{
$User_Name = $_POST['Uname'];
$ID_No = $_POST['ID'];
$Email = $_POST['email'];
$Create_Password = $_POST['createpwd'];
$Confim_Password = $_POST['confirmpwd'];
$sql_query = "insert into admin(Uname,ID,email,createpwd,confirmpwd) values('$User_Name','$ID_No','$Email','$Create_Password','$Confim_Password')";
if(mysqli_query($con,$sql_query))
{
    echo "Success";
}
else
{
echo "Error";
}
mysqli_close($con);
}
?>