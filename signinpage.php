<?php
   session_start();
   include("Signinpage.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
$User_Name = $_POST['Uname'];
$ID_No = $_POST['ID'];
$Email = $_POST['email'];
$Create_Password = $_POST['createpwd'];
$Confim_Password = $_POST['confirmpwd'];

    if(!empty($Email) && !empty($Create_Password) && !is_numeric($Email))
    {
            $query = "insert into admin(Uname,ID,email,createpwd,confirmpwd) values('$User_Name','$ID_No','$Email','$Create_Password','$Confim_Password')";

            mysqli_query($con,$query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";

    }
    else{
        echo "<script type='text/javascript'> alert('Please Enter some Valid')</script>";
    }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signinpage</title>
        <style type="text/css">
        div{
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-style: solid;
            border-color: black;
            width: 400px;
            height: 500px;
            border-radius: 25px;
            background-color: rgba(2,0,0,0.5);

        }
        h1{
            text-align: center;
            color: white;
        }
        h3{
            color: white;
            padding-left: 10px;
            margin-right: 0;
        }
        .box{
            width: 250px;
            height: 35px;
            border-radius: 20px;
        }
        .box2{
        	width: 180px;
            height: 35px;
            border-radius: 20px;
        }
        button{

            width: 150pxpx;
            height: 35px;
            border-radius: 20px;
            margin-left: 42%;
            padding-left: 20px;
            padding-right: 20px;
            background-color: lightblue;
        }
        body
        {
            background-image: url("123.jpg");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-size: cover;
        }

    </style>
</head>
<body>
<div >
    <form method="POST">
           <h1>Signin</h1><br>
           <h3>UserName :<input type="text" class  ="box"  placeholder="&nbsp &nbsp  &nbsp  &nbsp   UserName..." name="Uname"></h3>
           <h3>ID-No :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class ="box"  placeholder="&nbsp &nbsp  &nbsp  &nbsp   ID-Number..." name="ID"></h3>
           <h3>Email :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class  ="box"  placeholder="&nbsp &nbsp  &nbsp  &nbsp   email..." name="email"></h3>
           <h3>Create Password :&nbsp&nbsp&nbsp&nbsp<input type="password" class="box2" placeholder="  &nbsp &nbsp  &nbsp  &nbsp        Password...." name="createpwd"></h3>
           <h3>Confirm Password :<input type="password" class="box2" placeholder="  &nbsp &nbsp  &nbsp  &nbsp        Password...." name="confirmpwd"></h3>

    </form>
    <button type="submit">signup</button>     
    </div>
</body>
</html>