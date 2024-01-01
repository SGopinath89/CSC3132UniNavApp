<?php
require_once'connection/sqlconnect.php';
require_once'connection/function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.div1{
            
			height: 35%;
			width: 30%;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			border-style: solid;
			border-radius: 20px;
			background-color: rgba(2,0,0,0.2);

		}
		input{
			border-radius: 7px;
			margin-bottom: 5%;
			margin-top: 5%;
		}
		#cent{
			height: 30px;
		}
		#size{
			width: 90%;
			height: 30px;
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
	<div class="div1">

<form method="POST" align="center">
	<table align="center">
		<tr>
			<td>ID:</td>
		    <td><input type="number" name="id" id="size"></td>
            <td id="length"><?php 
			       $e1=emptycheck('id','please provide the  Id'); 
			     ?></td>
	    </tr>
	    <tr>
	    	<td colspan="3" align="center"><input type="submit" value="delete"  id="cent"></td>
	    </tr>
	
<?php
  
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$ID=trim($_POST['id']);
	$query="DELETE FROM Addimage WHERE id = $ID;";
    if(!$e1)
    {
    updatetable($connection,$query);
    }
}
?>
</table>
</form>
</body>
</html>