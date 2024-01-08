<?php
 require_once'connection/sqlconnect.php';
 require_once'connection/function.php';
?>
<?php

$id=$_GET['id'];
$mrl=$_GET['mar_l'];
$mrt=$_GET['mar_t'];
$des=$_GET['desc'];
// $query="DELETE FROM Addimage where id='$id'";
// mysqli_query($connection,$query);
// header('location:showtable.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
	.div1{
            margin-top: 1%;
			height: 80%;
			width: 50%;
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
			margin-bottom: 3%;
			margin-top: 3%;
			
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
	<div>

<form method="POST" align="center">
	<table align="center">
		<tr>
			<td>ID:</td>
			<td><input type="number" name="id" id="size" value=<?php echo $id ?>></td>
			<td><?php
			          $e1=emptycheck('id','please provide the  Id');
				?></td>
		</tr>
		<tr>
			<td>MAR_left:</td>
			<td><input type="text"  name="mar_l" id="size" value=<?php echo $mrl ?>></td>
		</tr>
		<tr>
			<td>MAR_top:</td>
			<td><input type="text"  name="mar_t" id="size" value=<?php echo $mrt ?>></td>
		</tr>
		 <tr>
			<td>DISCRIPTION:</td>
			<td><textarea type="text" rows="10%" cols="50%" name="description" value=><?php echo $des ?>
		</textarea></td>
		</tr>
		<tr>
			
			<td colspan="3" align="center"><input type="submit" value="update" id="cent"></td>
		</tr>
	</table>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$ID = trim($_POST['id']);
	$query1 = "UPDATE Addimage SET ";
	$query2 = " WHERE id = $ID";
	if(!$e1){
	if (isset($_POST['mar_l']) || isset($_POST['mar_t']) || isset($_POST['description'])) {
		$arr = array();

		if (!empty($_POST['mar_l'])) {
			$arr[] = "mar_l = '" . $_POST['mar_l'] . "'";
		}
		if (!empty($_POST['mar_t'])) {
			$arr[] = "mar_t = '" . $_POST['mar_t'] . "'";
		}
		if (!empty($_POST['description'])) {
			$arr[] = "description = '" . $_POST['description'] . "'";
		}

		if (!empty($arr)) {
			$query = $query1 . implode(", ", $arr) . $query2;
			updatetable($connection, $query);
		}
	}
	}
}
?>

</body>
</html>