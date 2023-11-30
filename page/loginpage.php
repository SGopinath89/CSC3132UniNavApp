<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="style/styles.css">
    <style type="text/css">
           .div1{
            position: absolute;
            top: 75%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-style: solid;
            border-color: black;
            width: 40%;
            height: 60%;
            border-radius: 25px;
            background-color: rgba(10,10,10,0.7);
        }
        h1{
            text-align: center;
            color: white;
        }
        h3{
            color: white;
            padding-left: 10px;
        }
        .box{
            width: 250px;
            height: 35px;
            border-radius: 20px;
        }
        button{

            width: 150pxpx;
            height: 35px;
            border-radius: 20px;
            margin-left: 45%;
            padding-left: 20px;
            padding-right: 20px;
        }
        p{
            text-align: center;
            color: white;
        }
        .images
        {
            background-image: url('uovmap.jpg');
			height: 170px;
			background-repeat: no-repeat;
			width: 170px;
			background-size: cover;
        }
       
        .absolute{
			position: absolute;
			padding: 30px;
			top: 1px;
			right: 1px;	
		}
        
		.sticky{
			position: sticky;
			background:rgb(23, 45, 23);
			color:black;
			padding: 20px;
			top: 200px;
			left: 123x;
			
		}
    </style>
</head>
<body>
<?php include "./header/header.php"?>
<!--
<div style="background-color:rgba(203, 219, 192, 0.748);">
        
        <div style="margin-left: 92%;">
        
         </a>
         </div>
         <img src="resource/uovlogoname.png" width="50%" >
         
 </div>
 <div style="background-color: rgb(63, 179, 0);height: 8px;">	
 </div>
 <div style="background-color: rgb(32, 96, 32);height: 40px;">
    <a href="page/homepage.html" style=" color: white;   
                        font-size: 100%; 
                        text-decoration: none;
                        font-size:2.5vw;
                        margin-left:2vw;"><b>HOME</b>
    </a>
 </div>
    -->
 <div>
    <form action="#.php" method="POST">
    <img src="resource/uovmap.jpg" width="100%">
    <div class="div1">
    <h1>login</h1><br>
    <h3>UserName :<input type="text" class  ="box"  placeholder="&nbsp &nbsp  &nbsp  &nbsp   UserName..." id="user" name="user"></h3>
    <h3>Password :&nbsp<input type="password" class="box" placeholder="  &nbsp &nbsp  &nbsp  &nbsp Password...." id="pass" name="pass" ></h3>
    <p>
        <a href="OTP.php">Forgot password</a>
    </p>
    <button type="submit" value="login" name="submit">login</button>
    <p>Don't have an account?
        <a href="signinpage.php">Signin</a>
    </p>
    </div></form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['user'];
    $input_password = $_POST['pass'];

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "UOV";

    
    $conn = new mysqli($servername, $username, $password, $database);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    $sql = "SELECT * FROM Admindetails WHERE Uname = ? AND createpwd = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $input_username, $input_password);


    $stmt->execute();

    
    $result = $stmt->get_result();

    
    if ($result->num_rows > 0) {
        header("Location:editingpage.php");
        exit();
    } else {
        echo "Login failed. Incorrect username or password.";
    }

    
    $stmt->close();
    $conn->close();
}
?>
</div>
</body>
</html>