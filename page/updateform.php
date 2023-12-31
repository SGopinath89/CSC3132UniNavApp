<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="style/styles.css">
	<style type="text/css">
		form{
			height: 30px;
			position: fixed;
			left: 40%;
			right: 40%;

		}
		#cent{
			height: 30px;
			position: fixed;
		}
	</style>
</head>
<body>
	<?php include "header/header.php"?>
    <?php include "header/navpanel1.php"?>
<form method="POST">
	<table>
		<tr>
			<td>ID: </td>
			<td><input type="number" value="ID..." name="id"></td>
			<td><?php
			          //$d1=dupId('id',$connection); 
			          //$e1=emptycheck('id','please provide the  Id');
					 	
				?></td>
		</tr>
		<tr>
			<td>NAME:</td>
			<td><input type="text" value="building_name" name="head"></td>
			<td><?php  
			          //$e2=emptycheck('head','please provide the  head');

				?></td>
		</tr>
		<tr>
			<td>BUILDING_img:</td>
			<td><input type="text" value="building img.." name="b_img"></td>
			<td><?php  
			          //$e3=emptycheck('b_img','please provide the  b_img');

				?></td>
		</tr>
		<tr>
			<td>MAR_left:</td>
			<td><input type="text" value="X_co.." name="mar_l"></td>
			<td><?php  
			          //$e4=emptycheck('mar_l','please provide the mar_l');

				?></td>
		</tr>
		<tr>
			<td>MAR_top:</td>
			<td><input type="text" value="Y_co.." name="mar_t"></td>
			<td><?php  
			          //$e5=emptycheck('mar_t','please provide the mar_t');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_1:</td>
			<td><input type="text" value="img_1.." name="img_1"></td>
			<td><?php  
			          //$e6=emptycheck('img_1','please provide the img_1');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_2:</td>
			<td><input type="text" value="img_2.." name="img_2"></td>
			<td><?php  
			          //$e7=emptycheck('img_2','please provide the img_2');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_3:</td>
			<td><input type="text" value="img_3.." name="img_3"></td>
			<td><?php  
			          //$e8=emptycheck('img_3','please provide the img_3');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_4:</td>
			<td><input type="text" value="img_4." name="img_4"></td>
			<td><?php  
			          //$e9=emptycheck('img_4','please provide the img_4');

				?></td>
		</tr>
		<tr>
			<td>IMAGE_5:</td>
			<td><input type="text" value="img_5.." name="img_5"></td>
			<td><?php  
			          //$e10=emptycheck('img_5','please provide the img_5');

				?></td>
		</tr>
		<tr>
			<td>DISCRIPTION:</td>
			<td>
				<textarea id="w3review" name="description" rows="4" cols="50"></textarea>
			</td>
			<td><?php  
			         // $e11=emptycheck('description','please provide the description');

				?></td>
		</tr>
		<tr>
			<td><input type="submit" value="Add_Details" id="cent"></td>
		</tr>
	
<?php
require_once'connection.php';
require_once'funct.php';
if($_SERVER['REQUIEST_METHOD'] == 'POST')
{
	$ID=trim($_POST['id']);
	$HEAD=trim($_POST['head']);
	$B_IMG=trim($_POST['b_img']);
	$M_LEFT=trim($_POST['mar_l']);
	$M_TOP=trim($_POST['mar_t']);
	$IMG_1=trim($_POST['img_1']);
	$IMG_2=trim($_POST['img_1']);
	$IMG_3=trim($_POST['img_1']);
	$IMG_4=trim($_POST['img_1']);
	$IMG_5=trim($_POST['img_1']);
	$DIS=$_POST['description'];

	$query="INSERT INTO cre_div VALUES('$ID','$HEAD','$B_IMG','$M_LEFT','$M_TOP','$IMG_1','$IMG_2','$IMG_3','$IMG_4','$IMG_5','$DIS')";
	if(!$d1 && !$e1 && !$e2 && !$e3 && !$e4 && !$e5 && !$e6 && !$e7 && !$e8 && !$e9 && !$e10 && !$e11)
	{
		updatetable($connection,$query);
	}else{
		echo"please check the values!!!!";
	}

}
?>
</table>
</form>
</body>
</html>