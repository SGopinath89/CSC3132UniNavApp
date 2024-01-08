<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>Document</title>
    <style>
        .maindiv{
            display: flex;
            flex-direction:row;
            border:5px solid;
            margin: 10px;
        }
        .menu{
            height:auto;
            width: 150px;
            border:2px solid;
            margin: 5px;
        }
        .content{
            flex:1;
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
    
    <?php include "header/header.php"?>
    <?php include "header/navpanel2.php"?>
    <div class="maindiv">
        <div class="menu">
            <ul>
                <li><a href="?content=getXY.php">GET X Y</a></li>
                <li><a href="?content=addplace.php">ADD Location</a></li>
                <li><a href="?content=showtabledelete.php">Delete Location</a></li>
                <li><a href="?content=showtableupdate.php">Update Location</a></li>
                <li><a href="?content=signinpage.php">SignIn</a></li>
                <li><a href="?content=logoutpage.php">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <?php
                if(isset($_GET['content'])){
                    $contentPage=$_GET['content'];
                    if(file_exists($contentPage)){
                        include($contentPage);
                    }
                }else{
                    echo '<img src="resource/uovmap.jpg" width=100%>';
                }
                
            ?>
            
        </div>
    </div>
</body>
</html>