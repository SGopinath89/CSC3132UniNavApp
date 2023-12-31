<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link rel="stylesheet" href="style/styles.css">
    <style type="text/css">
      
        #demo{
          color:red;
          font-size:30px;
        }
        #im{
          height: 800px;
          background-image: url('resource/uovmap.jpg');
          background-position: center;
          background-size: cover;
          border: 15px solid black;
        }
    </style>
</head>
<body >
   
    <?php include "header/header.php"?>
    <?php include "header/navpanel1.php"?>
  <div onclick="showCoords(event)" style="border:1px solid black;padding:4px">
    <div class="sticky-" id='im'>
    <p id="demo">Coordinates:</p>
    </div>
    
  </div>
  <script>
function showCoords(event) {
  let x = event.clientX;
  let y = event.clientY;
  var windowWidth = window.innerWidth;
  var windowHeight = window.innerHeight;
 
 var x_c=(x/windowWidth)*100;
 var y_c=(y/windowHeight)*100;
 var windowWidthInt = parseInt(x_c);
 var windowHeightInt = parseInt(y_c);
  let text = "X coords: " + windowWidthInt + ", Y coords: " + windowHeightInt;
  document.getElementById("demo").innerHTML = text;
}
</script>
</body>
</html>