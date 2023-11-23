<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <style type="text/css">
           .div1{
            position: absolute;
            top: 75%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-style: solid;
            border-color: black;
            width: 40%;
            height: 60%;
            border-radius: 25px;
            background-color: rgba(10,10,10,0.7);
        }
        h1{
            text-align: center;
            color: white;
        }
        h3{
            color: white;
            padding-left: 10px;
        }
        .box{
            width: 250px;
            height: 35px;
            border-radius: 20px;
        }
        button{

            width: 150pxpx;
            height: 35px;
            border-radius: 20px;
            margin-left: 45%;
            padding-left: 20px;
            padding-right: 20px;
        }
        p{
            text-align: center;
            color: white;
        }
        
       
        a{
            color: yellow;
            text-decoration: none;
        }
        a:hover{
            color: hotpink;
        }
        a:active{
            color: lightblue;
        }
        .images
        {
            background-image: url('uovmap.jpg');
			height: 170px;
			background-repeat: no-repeat;
			width: 170px;
			background-size: cover;
        }
       
        .absolute{
			position: absolute;
			padding: 30px;
			top: 1px;
			right: 1px;	
		}
        
		.sticky{
			position: sticky;
			background:rgb(23, 45, 23);
			color:black;
			padding: 20px;
			top: 200px;
			left: 123x;
			
		}
    </style>
</head>
<body>
<div style="background-color:rgba(203, 219, 192, 0.748);">
        
        <div style="margin-left: 92%;">
        
         </a>
         </div>
         <img src="resource/uovlogoname.png" width="50%" >
         
 </div>
 <div style="background-color: rgb(63, 179, 0);height: 8px;">	
 </div>
 <div style="background-color: rgb(32, 96, 32);height: 40px;">
    <a href="page/homepage.html" style=" color: white;   
                        font-size: 100%; 
                        text-decoration: none;
                        font-size:2.5vw;
                        margin-left:2vw;"><b>HOME</b>
    </a>
 </div>
 
 <div>
    <img src="resource/uovmap.jpg" width="100%">
    <div class="div1">
    <h1>login</h1><br>
    <h3>UserName :<input type="text" class  ="box"  placeholder="&nbsp &nbsp  &nbsp  &nbsp   UserName..."></h3>
    <h3>Password :&nbsp<input type="password" class="box" placeholder="  &nbsp &nbsp  &nbsp  &nbsp Password...."></h3>
    <p>
        <a href="page/forgotpdpage.php">Forgot password</a>
    </p>
    <button type="submit">login</button>
    <p>
        <a href="page/OTP.php">Change password</a>
    </p>
    <p>Don't have an account?
        <a href="page/signinpage.php">Signin</a>
    </p>
    </div>
</div>
</body>
</html>