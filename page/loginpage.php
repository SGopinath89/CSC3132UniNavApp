<?php
require_once'connection/sqlconnect.php';
require_once'connection/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="style/styles.css">
    <style type="text/css">
        .div2{
            margin-top:30px;
        }
		.div1{
            margin-top: 110px;
			height: 400px;
			width: 380px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			border-style: solid;
			border-radius: 20px;
			background-color: rgba(2,0,0,0.2);

		}
		
		#inpt{
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
        #length{
            position: fixed;
            width: 250px;
            height: 20px;
            margin-top: -17px;
            color: red; 
        }
        .button-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3C6255;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .button-link:hover {
            background-color: #03C988;
        }
    </style>
</head>
<body>
<?php include "header/header.php"?> 
<?php include "header/navpanel1.php"?> 
<!--
    <div style="background-color:rgba(203, 219, 192, 0.748);">
        
        <div style="margin-left: 92%;">
        
         </a>
         </div>
         <img src="resource/uovlogoname.png" width="50%" >
         
 </div>
    -->

    
 <div class="div1">
    <div>
 <form method="POST">
 	<table cellpadding="10vw">
 		<tr><h1>Login</h1></tr>
	<tr>
		<td><b>Username :</b></td>
		<td><input type="text" name="Uname" id='inpt'></td>
        <td id="length"><?php 
             $e1 = emptycheck('Uname','please provide the userNAME!!'); 
            ?></td>
	</tr>
	
	<tr>
		<td><b>Password:</b></td>
		<td><input type="password" name="createpwd" id='inpt'></td>
        <td id="length" colspan=2><?php 
             $e2 = emptycheck('createpwd','please provide the password!!'); 
             ?></td>
	</tr>	
    <tr align='center'>
        <td colspan=3><input type="checkbox" name="keplog">
        <label for="keplog">Remember Me</label>
        </td>
       
    </tr>
	<tr align='center'>
		
        <td colspan=3>
        <a href="OTP.php">Forgot password</a>
        </td>
    </tr>
	<tr align='center'>
	  <td colspan=3>
		<input type="submit" name="Adddetail" value="login" class="button-link" >
        
        <div class="div2"><a href="index.php" class="button-link">Home</a></div>
	  </td>
      
	</tr>
	
</table>
</form>
</div>
 
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = trim($_POST['Uname']);
    $input_password = trim($_POST['createpwd']);
    $rememberme=(isset($_POST['keplog'])) ? true : false;
    if(!$e1 && !$e2)
    {
        login($input_username,$input_password,$rememberme,$connection);
       
    }
    
}
?>
</div>
</div>
</body>
</html>