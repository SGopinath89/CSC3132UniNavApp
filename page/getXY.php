<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link rel="stylesheet" href="style/styles.css">
</head>
<body onclick="showCoords(event)" style="border:1px solid black;padding:4px">
    
    <?php include "header/header.php"?>
    <?php include "header/navpanel1.php"?>
    <div class="sticky" id="im">
     
    </div>
    <img src="1.jpg">
<p id="demo">Coordinates:</p>
<script>
function showCoords(event) {
  let x = event.clientX;
  let y = event.clientY;
  let text = "X coords: " + x + ", Y coords: " + y;
  document.getElementById("demo").innerHTML = text;
}
</script>
</body>
</html>