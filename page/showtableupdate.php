<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styles.css">

    <style>
        h2{
            text-align: center;
        }
        #del{
            display: inline-block;
            padding: 10px 20px;
            background-color: rgb(202, 122, 122);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        #del:hover{
            background-color: #d83713;
        }
        #upd{
    display: inline-block;
    padding: 10px 20px;
    background-color: rgb(122, 202, 127);
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}
#upd:hover{
background-color: #13d82a;
}
   
    </style>
</head>
<body>
    <h2>Details</h2>
    <?php
    require_once'connection/sqlconnect.php';
    require_once'connection/function.php';
    // $query="SELECT id,heading,mar_l,mar_t FROM Addimage";
    $query="SELECT * FROM Addimage";
    $result=mysqli_query($connection,$query);
    utable($result);
    
    ?>
</body>
</html>