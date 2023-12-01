<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="style/styles.css">
    <style type="text/css">
		.div1{
            margin-top: 110px;
			height: 300px;
			width: 380px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			border-style: solid;
			border-radius: 20px;
			background-color: rgba(2,0,0,0.2);

		}
		td{
			padding-bottom: 15px;
			font-size: 20px;
		}
		input{
			border-radius: 9px;
			height: 20px;
            width: 200px;
		}
		.cent{
            width: 80px;
			height: 30px;
			position: fixed;
			left: 40%;
			right: 40%;

		}
		a{
			font-size: 15px;
			text-decoration: none;
            
		}

		p{
			font-size: 15px;
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
        
       
        a{
            color: yellow;
            text-decoration: none;
        }
        a:hover{
            color: hotpink;
        }
        a:active{
            color: lightblue;
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
    
 <div class="div1">
 <form method="POST">
 	<table>
 		<tr><h1>Login</h1></tr>
	<tr>
		<td><b>Username :</b></td>
		<td><input type="text" name="Uname"></td>
	</tr>
	
	<tr>
		<td><b>Password:</b></td>
		<td><input type="text" name="createpwd"></td>
	</tr>	
	<tr>
		<td>
        <a href="OTP.php">Forgot password</a>
        </td>
    </tr>
	<tr>
	  <td >
		<input type="submit" name="Adddetail" value="login" class="cent" ><br>
	  </td>
	</tr>
	
</table>
</form>
</div>
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['Uname'];
    $input_password = $_POST['createpwd'];

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
        header("Location:editpage.php");
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