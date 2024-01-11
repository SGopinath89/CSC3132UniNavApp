<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once'connection/sqlconnect.php';
    require_once'connection/function.php';

    $query="SELECT * FROM Addimage WHERE heading LIKE 'bs%'";
    $result=mysqli_query($connection,$query);
    while($row=mysqli_fetch_row($result)){
    echo "<div><a href='moredetails.php?val=$row[0]'>$row[1]</a></div>
    <div>$row[10]</div>
    <div>   <img src='resource/bimg/$row[5].jpg' id='s_size'>
            <img src='resource/bimg/$row[6].jpg' id='s_size'>
            <img src='resource/bimg/$row[7].jpg' id='s_size'>
    </div>
    <br><br>
    ";
    }
?>
</body>
</html>
