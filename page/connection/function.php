<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<style>
		.a1{
            height: 30px;
            width: 30px;
            margin-left: 200px;
            margin-top: 200px;
        }
	</style>
</head>
<body>
<?php
function addtable($conn,$query)
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
				header('location:dashboard.php?content=showtableupdate.php');
		}
		else{
			die("error".mysqli_error($conn));
		}

}
function deletecor($conn)
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
		echo"<center><b>login failed please check your username or password</b></center>";
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
function dtable($result)
{
	//$result =mysqli_query($conn,$query);
	if($result)
	{
		echo"<table border=1px cellspacing=0px align='center' id='pri' align='center'>";
		echo"<tr>";
		echo "<td>ID  </td>";
		echo "<td>heading </td>";
		echo "<td>margin_left</td>";
		echo "<td>margin_top </td>";
		echo "<td>Delete</td>";
    	echo "</tr>";
		

        echo "<tr>";
		while($row=mysqli_fetch_row($result)){
		// foreach ($result as $key => $row) 		
		{
			foreach ($row as $key => $value) {
			echo "<td>$value  </td>";
			};
			echo "<td ><a href='deleteplace.php?id=$row[0]' id='del'>Delete</a></td>";
              echo "</tr>";
		}
		}
		echo "<table>";
		
	}else{
		//die("error".mysqli_error($conn)); commend
	
      }

}
function utable($result)
{
	//$result =mysqli_query($conn,$query);
	if($result)
	{
		echo"<table border=1px cellspacing=0px align='center' id='pri' align='center'>";
		echo"<tr>";
		echo "<td>ID  </td>";
		echo "<td>margin_left </td>";
		echo "<td>margin_top</td>";
		echo "<td>discription </td>";
		echo "<td>update</td>";
    	echo "</tr>";
		

        echo "<tr>";
		// while($row=mysqli_fetch_row($result)){
		// // foreach ($result as $key => $row) 		
		// {
		// 	foreach ($row as $key => $value) {
		// 	echo "<td>$value  </td>";
		// 	};
		// 	echo "<td ><a href='dashboard.php?content=updateplace.php' id='upd'>Update</a></td>";
        //       echo "</tr>";
		// }
		// }
		while ($row = mysqli_fetch_row($result)) {
			echo "<tr>";
			$id= $row[0];
			$mrl=$row[3];
			$mrt=$row[4];
			$des=$row[10];
			echo "<td>$row[0]</td>";
			echo "<td>$row[3]</td>";
			echo "<td>$row[4]</td>";
			echo "<td>$row[10]</td>";
			$updateLink = "dashboard.php?content=updateplace.php&id=$id&mar_l=$mrl&mar_t=$mrt&desc=$des";
		
			echo "<td><a href='$updateLink' id='upd'>Update</a></td>";
		
			echo "</tr>";
		}
		
		echo "<table>";
		
	}else{
		//die("error".mysqli_error($conn)); commend
	
      }

}
function locpointer($connection){
	require_once'connection/sqlconnect.php';
	$query1="SELECT * FROM Addimage";
	$result1=mysqli_query($connection,$query1);
	$count=mysqli_num_rows($result1);
	for ($i = 1; $i <= $count; $i++) {
		$query="SELECT * FROM Addimage WHERE id='$i'";
		$result=mysqli_query($connection,$query);
		foreach ($result as $key => $value) {
			$m_l=$value['mar_l'];
			$m_t=$value['mar_t'];
			$loc=$value['b_img'];
			$he=$value['heading'];
			$icon=$value['mar_t'];
			$l=$m_l;
			$t=$m_t-2.5;
			$ic=$m_l+3;
		
		echo "<img src='resource/bicon/$loc.png' style='margin-left: {$m_l}vw; margin-top: {$m_t}vw; padding: 0px;' id='a{$i}' class='a1'>";
		echo "<img src='resource/LocationIcon.png' style='margin-left: {$l}vw; margin-top: {$t}vw; padding: 0px; height: 40px; width: 40px' class='ex2' id='ico{$i}'>";
		echo "<div  id='big' style='margin-left: {$ic}vw; margin-top: {$t}vw;'><h4 class='typed-text'>$he</h4></div>";
		}
	}
}
function moredetailbox($connection)
{
	for($j=1; $j<=$count; $j++)
	{
    $query3="SELECT * FROM Addimage WHERE id='$j'";
    $result3=mysqli_query($connection,$query3);
    foreach ($result3 as $key => $value)
    {
        $im_1=$value['img_1'];
        $im_2=$value['img_2'];
        $im_3=$value['img_3'];
        $m_l=$value['mar_l']+20;
        $m_t=$value['mar_t'];
        $hed=$value['heading'];
        $ID=$value['id'];
        $dis=$value['description'];
        $sorttext=substr($dis, 0, 100);
        
   echo"<div>";
        echo"<div class='frame' id='div{$j}' style='margin-left: {$m_l}vw; margin-top: {$m_t}vw;'>";
           echo"<img src='resource/Close.png' id='c{$j}' class='siz'>";
           echo"<h2>$hed</h2>";
           echo"<img src='resource/bimg/$im_1' id='s_size'>";
           echo"<img src='resource/bimg/$im_2' id='s_size'>";
           echo"<img src='resource/bimg/$im_3' id='s_size'>";
           echo "<b>discreption:</b><br>";
           echo"<p>$sorttext</p>";
           echo "<a href='moredetails.php?val=" . urlencode($ID) . "' id='more'>view more</a>";
           
        echo"</div>";
   echo"</div>";
    }
 }
}
?>
</body>
</html>

