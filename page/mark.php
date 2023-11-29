<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .icon {
            position: absolute;
            width: 30px;
            height: 30px;
            background-image: url('resource/LocationIcon.png'); 
            background-size: cover;
        }
        </style>
    <script>
       document.addEventListener('DOMContentLoaded',function(){
   document.addEventListener("click", function(e) 
{
    
    var icon = document.createElement("div");
    icon.className = 'icon';
    var x = e.clientX-14;
    var y = e.clientY-26;
    icon.style.left = x + "px";
    icon.style.top = y + "px"; 
    document.body.appendChild(icon);
});
window.addEventListener('beforeunload',function()
{
    var iicons =document.getElementByClassName('icon');
    while (icons.length > 0)
    {
        icons[0].parentNode.removeChild(icons[0])
    }
 });
});
    </script>
</head>
<body>
    <img src="resource/uovmap.jpg" width="100%"></img>
</body>
</html>