<?php
require_once'connection/sqlconnect.php';
require_once'connection/function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values of x and y sent from JavaScript
    // $x = $_POST["x"];
    // $y = $_POST["y"];
	$x = isset($_POST["x"]) ? ($_POST["x"]) : null;
    $y = isset($_POST["y"]) ? ($_POST["y"]) : null;
	
	// $x = is_numeric($x) ? (float)$x : null;
    // $y = is_numeric($y) ? (float)$y : null;
	$x = filter_var($x, FILTER_VALIDATE_FLOAT);
    $y = filter_var($y, FILTER_VALIDATE_FLOAT);

// Prepare and execute the SQL query to insert values into the database
$sql = "INSERT INTO cor (x, y) VALUES ('$x','$y')";
updatetable($connection,$sql);
}
$query="SELECT * FROM cor";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_row($result);
// $x=$row[0];
// $y=$row[1];
$x = isset($row[0]) ? $row[0] : null;
$y = isset($row[1]) ? $row[1] : null;
echo "Coodinates($x,$y)";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="style/styles.css">
	<style type="text/css">
		.div1{
            margin-top: 20%;
			height: 165%;
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
            position: absolute;
            width: 250px;
            height: 20px;
            margin-top: -4px;
			color: red;

        }
	</style>
</head>
<body>
<div>
<form method="POST">
	<table>
		<tr>
			<td>ID: </td>
			<td><input type="number"  name="id" id="size"></td>
			<td id="length"><?php
			          $d1=dupId('id',$connection); 
			          $e1=emptycheck('id','please provide the  Id');
					 	
				?></td>
		</tr>
		<tr>
			<td>NAME:</td>
			<td><input type="text"  name="heading" id="size"></td>
			<td id="length"><?php  
			          $e2=emptycheck('heading','please provide the  head');

				?></td>
		</tr>
		
		<tr>
			<td>BUILDING_img:</td>
			<td><select name="b_img" id="size">
				<?php
				$query="SELECT * FROM buildingicon"; 
				$result=mysqli_query($connection,$query);
				while($row=mysqli_fetch_row($result)){
					echo "<option value='$row[0]'>$row[1]</option>"; 
				}
				?>
				</select>
			</td>
			<td id="length"><?php  
			          $e3=emptycheck('b_img','please provide the  b_img');

				?></td>
		</tr>
		<tr>
			<td>MAR_left:</td>
			<td><input type="text"  name="mar_l" id="size" value=<?php echo $x ?>></td>
			<td id="length"><?php  
			          $e4=emptycheck('mar_l','please provide the mar_l');

				?></td>
		</tr>
		<tr>
			<td>MAR_top:</td>
			<td><input type="text"  name="mar_t" id="size" value=<?php echo $y ?>></td>
			<td id="length"><?php  
			          $e5=emptycheck('mar_t','please provide the mar_t');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_1:</td>
			<td><input type="file"  name="img_1" id="size"></td>
			<td id="length"><?php  
			          $e6=emptycheck('img_1','please provide the img_1');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_2:</td>
			<td><input type="file"  name="img_2" id="size"></td>
			<td id="length"><?php  
			          $e7=emptycheck('img_2','please provide the img_2');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_3:</td>
			<td><input type="file"  name="img_3" id="size"></td>
			<td id="length"><?php  
			          $e8=emptycheck('img_3','please provide the img_3');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_4:</td>
			<td><input type="file"  name="img_4" id="size"></td>
			<td id="length"><?php  
			          $e9=emptycheck('img_4','please provide the img_4');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_5:</td>
			<td><input type="file"  name="img_5" id="size"></td>
			<td id="length"><?php  
			          $e10=emptycheck('img_5','please provide the img_5');

				?></td>
		</tr>
		<tr>
			<td>DISCRIPTION:</td>
			<td>
				<textarea id="w3review" name="description" rows="10" cols="50"></textarea>
			</td>
			<td id="length"><?php  
			          $e11=emptycheck('description','please provide the description');

				?></td>
		</tr>
		<tr>
			<td><input type="submit" value="Add_Details" id="cent"></td>
		</tr>
	</table>
	</form>
</div>
	
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$ID=trim($_POST['id']);
	$HEAD=trim($_POST['heading']);
	$B_IMG=trim($_POST['b_img']);
	$M_LEFT=trim($_POST['mar_l']);
	$M_TOP=trim($_POST['mar_t']);
	$IMG_1=trim($_POST['img_1']);
	$IMG_2=trim($_POST['img_2']);
	$IMG_3=trim($_POST['img_3']);
	$IMG_4=trim($_POST['img_4']);
	$IMG_5=trim($_POST['img_5']);
	$DIS=$_POST['description'];

	$query="INSERT INTO Addimage VALUES('$ID','$HEAD','$B_IMG','$M_LEFT','$M_TOP','$IMG_1','$IMG_2','$IMG_3','$IMG_4','$IMG_5','$DIS')";
	if(!$d1 && !$e1 && !$e2 && !$e3 && !$e4 && !$e5 && !$e6 && !$e7 && !$e8 && !$e9 && !$e10 && !$e11)
	{
		addtable($connection,$query);
	}else{
		echo"<p>please check the values!!!!</p>";
	}

}
?>
</table>
</form>
</body>
</html>