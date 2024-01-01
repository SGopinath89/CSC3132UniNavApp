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
	<link rel="stylesheet" href="style/styles.css">
	<style type="text/css">
		.div1{
            margin-top: 30%;
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
            position: fixed;
            width: 250px;
            height: 20px;
            margin-top: -4px
        }
	</style>
</head>
<body>
	<?php include "header/header.php"?>
    <?php include "header/navpanel1.php"?>
	<div class="div1">
<form method="POST" align="center">
	<table align="center">
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
			<td><input type="text"  name="b_img" id="size"></td>
			<td id="length"><?php  
			          $e3=emptycheck('b_img','please provide the  b_img');

				?></td>
		</tr>
		<tr>
			<td>MAR_left:</td>
			<td><input type="text"  name="mar_l" id="size"></td>
			<td id="length"><?php  
			          $e4=emptycheck('mar_l','please provide the mar_l');

				?></td>
		</tr>
		<tr>
			<td>MAR_top:</td>
			<td><input type="text"  name="mar_t" id="size"></td>
			<td id="length"><?php  
			          $e5=emptycheck('mar_t','please provide the mar_t');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_1:</td>
			<td><input type="text"  name="img_1" id="size"></td>
			<td id="length"><?php  
			          $e6=emptycheck('img_1','please provide the img_1');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_2:</td>
			<td><input type="text"  name="img_2" id="size"></td>
			<td id="length"><?php  
			          $e7=emptycheck('img_2','please provide the img_2');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_3:</td>
			<td><input type="text"  name="img_3" id="size"></td>
			<td id="length"><?php  
			          $e8=emptycheck('img_3','please provide the img_3');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_4:</td>
			<td><input type="text"  name="img_4" id="size"></td>
			<td id="length"><?php  
			          $e9=emptycheck('img_4','please provide the img_4');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_5:</td>
			<td><input type="text"  name="img_5" id="size"></td>
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
			<td colspan="3" align="center"><input type="submit" value="Add_Details" id="cent"></td>
		</tr>
	
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$ID=trim($_POST['id']);
	$HEAD=trim($_POST['heading']);
	$B_IMG=trim($_POST['b_img']);
	$M_LEFT=trim($_POST['mar_l']);
	$M_TOP=trim($_POST['mar_t']);
	$IMG_1=trim($_POST['img_1']);
	$IMG_2=trim($_POST['img_1']);
	$IMG_3=trim($_POST['img_1']);
	$IMG_4=trim($_POST['img_1']);
	$IMG_5=trim($_POST['img_1']);
	$DIS=$_POST['description'];

	$query="INSERT INTO Addimage VALUES('$ID','$HEAD','$B_IMG','$M_LEFT','$M_TOP','$IMG_1','$IMG_2','$IMG_3','$IMG_4','$IMG_5','$DIS')";
	if(!$d1 && !$e1 && !$e2 && !$e3 && !$e4 && !$e5 && !$e6 && !$e7 && !$e8 && !$e9 && !$e10 && !$e11)
	{
		updatetable($connection,$query);
	}else{
		echo"<p>please check the values!!!!</p>";
	}

}
?>
</table>
</form>
<div>
</body>
</html>