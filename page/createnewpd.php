<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newpdpage</title>
    <style type="text/css">
		div{
			height: 200px;
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


	</style>
</head>
<body>
<div>
 <form method="POST">
 	<table>
 	<tr><td> </td></tr>
	<tr>
		<td><b>Create Password:</b></td>
		<td><input type="text" name="crpwd"></td>
	</tr>
	<tr>
		<td><b>Confirm Password:</b></td>
		<td><input type="text" name="cnpwd"></td>
	</tr>
	

	<tr>
		<td>
		<input type="submit" name="Adddetail" value="confirm" class="cent" >
	</td>
	</tr>
</table>
</form>
</div>
</body>
</html>