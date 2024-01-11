<?php
require_once'connection/sqlconnect.php';
require_once'connection/function.php';
$query="DELETE FROM cor";
mysqli_query($connection,$query);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link rel="stylesheet" href="style/styles.css">
    <style type="text/css">
        #demo {
            color: red;
            font-size: 30px;
        }
        #im{
          width: 100%;
          height: auto;
          background-position: center;
          background-size: cover;
        }
    </style>
</head>
<body >
<a href="dashboard.php?content=addplace.php">
  <div onclick="handleClick(event)" style="border:1px solid black;padding:4px">
    <div class="sticky" id='im'>
    <img src="resource/uovmap.jpg" id="im">
   
    </div>
  </script>
  </div>

</body>
</html>
