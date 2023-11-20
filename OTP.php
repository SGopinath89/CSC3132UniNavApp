<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP page</title>
    <style type="text/css">
        div{
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-style: solid;
            border-color: black;
            width: 400px;
            height: 300px;
            border-radius: 25px;
            background-color: rgba(2,0,0,0.5);

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
        a{
        
            text-decoration: none;
        }

    </style>
</head>
<body>
<div>
<h3>Email :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class  ="box"  placeholder="&nbsp &nbsp  &nbsp  &nbsp   email..."></h3>
<button type="submit" >OTP</button><br><br>
<h3>OTP :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class  ="box"  placeholder="&nbsp &nbsp  &nbsp  &nbsp   OTP..."></h3>
<a href="createnewpd.php"><button type="submit" >confirm</button></a><br><br>
</div>
</body>
</html>