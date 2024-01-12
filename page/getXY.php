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
        #output {
      position: absolute;
      top: 10vh;
      left: 70vw;
      color: black;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 5px;
    }
    </style>
</head>
<body >
<a href="dashboard.php?content=addplace.php">
  <div id="container" onclick="handleClick(event)">
   
    <img src="resource/uovmap.jpg" id="im"></a>
    <div id="output"></div>
  </div>
  <script src="script/xycatcher.js">
  </script>
</a>
</body>
</html>
