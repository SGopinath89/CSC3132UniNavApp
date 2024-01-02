<?php
 require_once'connection/function.php';
 require_once'connection/sqlconnect.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signinpage</title>
	<link rel="stylesheet" href="style/styles.css">

    <style type="text/css">
		#div{
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
		p{
            text-align: center;
            
        }
		input{
           
			border-radius: 9px;
			height: 20px;
			margin-top: 5%;
			margin-bottom: 5%;
		}
		.cent{
            
			height: 30px;
			width:100px;
			left: 40%;
			right: 40%;

		}
        h1{
            text-align: center;
        }
		#length{
            position: fixed;
            width: 250px;
            height: 20px;
            margin-top: -17px
        }


	</style>
</head>
<body>

    <?php
    $filename = $_SERVER['PHP_SELF'];
    ?>
     <div>
 <form method="POST">
 	<table align="center">
 		<tr><h1>Signin</h1></tr>
	<tr>
		<td><b>Username :</b></td>
		<td><input type="text" name="Uname"></td>
		<td id="length"><?php $e2=emptycheck('Uname','please provide the userNAME!!');
		     ?></td>
	</tr>
	<tr>
		<td><b>Id-No      :</b></td>
		<td><input type="text" name="id"></td>
		<td id="length"><?php 
		         $d1=duplicateId('id',$connection);
		         $e1=emptycheck('Uname','please provide the user ID!!');
		     ?></td>
	</tr>
	
	<tr>
		<td><b>Email    :</b></td>
		<td><input type="text" name="email"></td>
		<td id="length"><?php 
		             $e3=emptycheck('Uname','please provide the email!!');
		        ?></td>
	</tr>
	<tr>
		<td><b>Create Password:</b></td>
		<td><input type="text" name="createpwd"></td>
		<td id="length"><?php 
		           $e4=emptycheck('Uname','please provide the password!!');
		        ?></td>
	</tr>
	<tr>
		<td><b>Confirm Password:</b></td>
		<td><input type="text" name="confirmpwd"></td>
		<td id="length"><?php 
		           $e5=emptycheck('Uname','please provide the password!!');
		     ?></td>
	</tr>
	

	<tr>
		<td>
		<input type="submit" name="Adddetail" value="Signin" class="cent" >
	</td>
	</tr>
</table>
</form>

    <?php
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $USERNAME = $_POST['Uname'];
        $IDN = $_POST['id'];
        $EMAIL = $_POST['email'];
        $CR_PWD = $_POST['createpwd'];
        $CO_PWD = $_POST['confirmpwd'];
		if($CR_PWD == $CO_PWD){
        if (!$d1 && !$e1 && !$e2 && !$e3 && !$e4 && !$e5)
		     {
			    $query = "INSERT INTO Admin VALUES('$USERNAME','$IDN','$EMAIL','$CR_PWD','$CO_PWD')";
               ExecuteQuery($query,$connection,'signin successful!!');
             }
          }else{
			echo"<p style='color:red; margin-top:-3%'>Pasword is not match</p>";
		  }
      }

    ?>
</div>
</body>
</html>