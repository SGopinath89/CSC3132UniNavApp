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
    $query="SELECT id,heading,mar_l,mar_t FROM Addimg";
    $result=mysqli_query($connection,$query);
    printtable($result);
    
    ?>
</body>
</html>