<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
   document.addEventListener("click", function(e) {
    
    var icon = document.createElement("div");
    icon.className = "emoji";
    icon.innerHTML = "";
    icon.style.left = e.clientX + "px";
    icon.style.top = e.clientY  + "px";

   
    document.body.appendChild(icon);
});
    </script>
</head>
<body>
    <img src="resource/uovmap.jpg" width="100%"></img>
</body>
</html>