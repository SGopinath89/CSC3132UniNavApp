<?php
require_once'connection/sqlconnect.php';
require_once'connection/function.php';


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

        #im {
            height: 800px;
            background-image: url('resource/uovmap.jpg');
            background-position: center;
            background-size: cover;
            border: 15px solid black;
        }
    </style>
</head>
<body>
<a href="dashboard.php?content=addplace.php">
<div onclick="showCoords(event)" style="border:1px solid black;padding:4px">
    
    <div class="sticky-" id='im'>
        <p id="demo">Coordinates:</p>
    </div>
</div>
</a>
<div id="result"></div>
<script scr="script/xycatcher.js">  
</script>

</body>
</html>
