<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signinpage</title>
    <style type="text/css">
		div{
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
		td{
			padding-bottom: 15px;
			font-size: 20px;
		}
		input{
           
			border-radius: 9px;
			height: 20px;
		}
		.cent{
            
			height: 30px;
			position: fixed;
			left: 40%;
			right: 40%;

		}
        h1{
            text-align: center;
        }


	</style>
</head>
<body>
<div >
    <?php
    $filename = $_SERVER['PHP_SELF'];
    ?>
     <div>
 <form method="POST">
 	<table>
 		<tr><h1>Signin</h1></tr>
	<tr>
		<td><b>Username :</b></td>
		<td><input type="text" name="Uname"></td>
	</tr>
	<tr>
		<td><b>Id-No      :</b></td>
		<td><input type="text" name="id"></td>
	</tr>
	
	<tr>
		<td><b>Email    :</b></td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td><b>Create Password:</b></td>
		<td><input type="text" name="createpwd"></td>
	</tr>
	<tr>
		<td><b>Confirm Password:</b></td>
		<td><input type="text" name="confirmpwd"></td>
	</tr>
	

	<tr>
		<td>
		<input type="submit" name="Adddetail" value="Signin" class="cent" >
	</td>
	</tr>
</table>
</form>
</div>
    <?php
    require_once'connection/savesql.php';
    require_once'connection/sqlconnect.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $USERNAME = $_POST['Uname'];
        $IDN = $_POST['id'];
        $EMAIL = $_POST['email'];
        $CR_PWD = $_POST['createpwd'];
        $CO_PWD = $_POST['confirmpwd'];
        if (empty($USERNAME)){
            echo "Please povide the admin id !";
        }
        else{
            $query = "INSERT INTO admindetails VALUES('$USERNAME','$IDN','$EMAIL','$CR_PWD','$CO_PWD')";
            ExecuteQuery($query,$connection,'new admin added');
        }
    }

    ?>
</body>
</html>