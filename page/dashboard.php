<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .maindiv{
            display: flex;
            flex-direction:row;
            border:5px solid;
            margin: 10px;
        }
        .leftdiv{
            height:80%;
            width: 150px;
            border:2px solid;
            margin: 5px;
        }
        .rightdiv{
            height:80%;
            width: 90%;
            border:2px solid;
            margin: 5px;
        }
        ul{
            list-style-type:none;
            margin:0;
            padding:0;
            width:;
            background-color:#f1f1f1;
        }
        li a{
            display:block;
            color:#023020;
            padding:8px 16px;
            text-decoration:none;
        }
        li a:hover{
            background-color:#097969;
            color:white;
        }
    </style>
</head>
<body>
    <div class="maindiv">
        <div class="leftdiv">
            <ul>
                <li><a href="#">GET X Y</a></li>
                <li><a href="#">ADD Location</a></li>
                <li><a href="#">Delete Location</a></li>
                <li><a href="#">Update Location</a></li>
                <li><a href="#">SignIn</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
        <div class="rightdiv">
            <img src="resource/uovmap.jpg" width=100%>
        </div>
    </div>
</body>
</html>