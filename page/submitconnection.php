<?php
    include("loginpageconnect.php");
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $query = "select * from admindetails where Uname = '$username' and createpwd = '$password'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count==1){
        header("Location:welcome.php");
    }
    else{
        echo "<script>
        window.location.href = 'loginpage.php';
        alert('login failed invalid username or password!!!')
        </script>";
    }
?>