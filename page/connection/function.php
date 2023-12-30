<?php
function updatetable($conn,$query)
{
		$result = mysqli_query($conn,$query);
		if($result)
		{
			echo "succesful update<br>";
		}
		else{
			die("error".mysqli_error($conn));
		}

}
function emptycheck($value,$msg)
{
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	if(empty($_POST[$value]))
	{
		echo "<p>$msg</p>";
		return true;
	}
	else
	{
		return false;
	}
}
}
function dupId($value,$conn)
{
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$query="SELECT * FROM student WHERE id='$_POST[$value]';";
    $count=counttable($conn,$query);
    if($count>0)
    {
    	echo "<p style='color:red '>$value this id already exists <p>";
    	return true;
    }
    else
    {
    	return false;
    }
    }
}
function counttable($conn,$query)
{
	$coun = 0;
	$result=mysqli_query($conn,$query);
	if($result)
	{
		$count=mysqli_num_rows($result);
	}
	
	return $count;
}
?>