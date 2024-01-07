<?php
function updatetable($conn,$query)
{
		$result = mysqli_query($conn,$query);
		if($result)
		{
			echo "succesful update<br>";
				// $query="DELETE FROM cor";
				// mysqli_query($conn,$query);
				//deletecor();
				header('location:cordelete.php');
		}
		else{
			die("error".mysqli_error($conn));
		}

}
function deletecor()
{
	$query="DELETE FROM cor";
	mysqli_query($conn,$query);
}
function emptycheck($value,$msg)
{
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	if(empty($_POST[$value]))
	{
		echo "<p style='color:red' >$msg</p>";
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
		$query="SELECT * FROM Addimage WHERE id='$_POST[$value]';";
    $count=counttable($conn,$query);
    if($count>0)
    {
    	echo "<p style='color:red '>this id already exists <p>";
    	return true;
    }
    else
    {
    	return false;
    }
    }
}
function duplicateId($value,$conn)
{
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$query="SELECT * FROM Admin WHERE id='$_POST[$value]';";
    $count=counttable($conn,$query);
    if($count>0)
    {
    	echo "<p style='color:red '>this id already exists <p>";
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
function login($name,$pwd,$keplog,$conn)
{
	$query="SELECT * FROM Admin WHERE uname='$name'AND confirmpwd='$pwd'";
	$result=mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	if($count == 1)
	{
		if($keplog)
		{
			setcookie('name',$name,time()+3600);
			//setcookie('name',$name,time()-10);
		}else{
			session_start();
			$_SESSION['name']=$name;
		}
		
		header('Location:cordelete.php');
	   
}
	else{
		echo"loginfailed please check your username or password";
	}


}
function ExecuteQuery($query,$connect,$msg)
{
    $result = mysqli_query($connect,$query); 
        if ($result) {
            echo "<p style='color:gray; margin-top:-3%'>$msg</p>";
			
        }
        else{
            die("Error".mysqli_error($connect));
        }
}
function printtable($result)
{
	//$result =mysqli_query($conn,$query);
	if($result)
	{
		echo"<table border=1px cellspacing=0px align='center'>";
		echo"<tr>";
		echo "<td>ID  </td>";
		echo "<td>heading </td>";
		echo "<td>margin_left</td>";
		echo "<td>margin_top </td>";
    	echo "</tr>";
		

        echo "<tr>";
		while($row=mysqli_fetch_row($result)){
		// foreach ($result as $key => $row) 		
		{
			foreach ($row as $key => $value) {
			echo "<td>$value  </td>";
			};
			echo "<td><a href='deleteplace.php?id=$row[0]'>Delete</a></td>";
              echo "</tr>";
		}
		}
		echo "<table>";
		
	}else{
		//die("error".mysqli_error($conn)); commend
	
      }

}
?>