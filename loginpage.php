<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
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
    <div>
    <h1>login</h1><br>
    <h3>UserName :<input type="text" class  ="box"  placeholder="&nbsp &nbsp  &nbsp  &nbsp   UserName..."></h3>
    <h3>Password :&nbsp<input type="password" class="box" placeholder="  &nbsp &nbsp  &nbsp  &nbsp Password...."></h3>
    <p>
        <a href="forgotpdpage.php">Forgot password</a>
    </p>
    <button type="submit">login</button>
    <p>
        <a href="OTP.php">Change password</a>
    </p>
    <p>Don't have an account?
        <a href="signinpage.php">Sinup</a>
    </p>
    </div>
</body>
</html>