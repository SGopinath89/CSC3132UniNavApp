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
            <td><?php $e1=emptycheck('id','please provide the  Id'); ?></td>
	    </tr>
	    <tr>
	    	<td><input type="submit" value="delete"></td>
	    </tr>
	</table>
</form>
<?php
  require_once'connection.php';
  require_once'funct.php';
if($_SERVER['REQUIES_METHOD'] == 'POST')
{
	$ID=trim($_POST['id']);
	$query="DELETE FROM mar_img WHERE id = $ID;";
    if(!$e1)
    {
    updatetable($connection,$query);
    }
}
?>
</body>
</html>