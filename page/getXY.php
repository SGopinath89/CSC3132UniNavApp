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
        #img{
          width: 850px;
          height: 650px;
    
   
     }
     .image-container {
            position: relative;
            
        }

        
        .image-container img:nth-child(2) {
            position: absolute;
            top: 0;
            left: 0;
           
        }
    </style>
</head>
<body >
   
   
  <div onclick="showCoords(event)">
        <!-- First image -->
        <img src="resource/uovmap.jpg" alt="Image 1" id="img">
    <div> 
      <p id="demo">Coordinates:</p>
    </div>
   
    
  </div>
  <script>
function showCoords(event) {
  var bodyElement = document.body;
  var bodyHeight = bodyElement.clientHeight;
  let x = event.clientX;
  let y = event.clientY;
  let x_l = x-18;
  let y_1=y-37;
  let text = "X coords: " + x_l + ", Y coords: " + y_1;
  document.getElementById("demo").innerHTML = text;
}
</script>
</body>
</html>