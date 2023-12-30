<?php
  require_once'connection.php';
  require_once'funct.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td>ID:</td>
			<td><input type="number" name="id"></td>
			<td><?php
			          $e1=emptycheck('id','please provide the  Id');
				?></td>
		</tr>
		<tr>
			<td>MAR_left:</td>
			<td><input type="text" value="X_co.." name="mar_l"></td>
		</tr>
		<tr>
			<td>MAR_top:</td>
			<td><input type="text" value="Y_co.." name="mar_t"></td>
		</tr>
		 <tr>
			<td>DISCRIPTION:</td>
			<td><input type="text" value="discription..." name="description"></td>
		</tr>
		<tr>
			
			<td><input type="submit" value="update"></td>
		</tr>
	</table>
</form>
<?php
$ID = trim($_POST['id']);
$query1 = "UPDATE mar_img SET ";
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
?>

</body>
</html>