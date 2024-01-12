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
<!-- <a href="dashboard.php?content=addplace.php"> -->
  <div id="container" onclick="handleClick(event)">
   
    <img src="resource/uovmap.jpg" id="im"></a>
    <div id="output"></div>
  </div>
  <script>
  function handleClick(event) {
    var container = document.getElementById('container');
    var image = document.getElementById('image');
    var output = document.getElementById('output');

    var containerRect = container.getBoundingClientRect();

    let x = event.clientX-containerRect.left-10;
    let y = event.clientY-containerRect.top-10;
    
    let x_l=((x / containerRect.width) * 98).toFixed(2);
    let y_t=((y / containerRect.height/100) * 98*69.230).toFixed(2);
    output.innerHTML = 'Percentage Coordinates - X: ' + (x_l) + ' Y: ' + (y_t);
    
    x_l=parseFloat(x_l);
    y_t=parseFloat(y_t);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Display the PHP response (if any)
            document.getElementById("result").innerHTML = this.responseText;
        }
    };
    
    xhttp.open("POST", "addplace.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhttp.send("x=" + encodeURIComponent(x_l) + "&y=" + encodeURIComponent(y_t));
    xhttp.send("x=" + x.toString() + "&y=" + y.toString());
    document.getElementById('container').addEventListener('click', handleClick);
}
</script>
</body>
</html>
