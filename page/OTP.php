<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP page</title>
    <style type="text/css">
		div{
			height: 250px;
			width: 350px;
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


	</style>
</head>
<body>
<div>
 <form method="POST">
 	<table>
 		<tr><h1> </h1></tr>
	<tr>
		<td><b>Email:</b></td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
	  <td >
		<input type="submit" name="Adddetail" value="OTP" class="cent" ><br>
	  </td>
	</tr>
	<tr>
		<td><b>Otp:</b></td>
		<td><input type="text" name="otp"></td>
	</tr>	
	
	<tr>
	  <td >
		<input type="submit" name="Adddetail" value="submit" class="cent" ><br>
	  </td>
	</tr>
	
</table>
</form>
</div>
</body>
</html>