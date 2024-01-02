<?php
require_once'connection/sqlconnect.php';
?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}


.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">
  <?php
  if(isset($_GET['val'])){
  $k=urldecode($_GET['val']);
     $query1="SELECT * FROM Addimage WHERE id='$k';";
       $result1=mysqli_query($connection,$query1);
       foreach ($result1 as $key => $value) {
        $im_1=$value['img_1'];
        $im_2=$value['img_2'];
        $im_3=$value['img_3'];
        $im_4=$value['img_4'];
        $im_5=$value['img_5'];
        $dis=$value['description'];


echo"<div class='mySlides fade'>";
  echo"<div class='numbertext'>1 / 5</div>";
  echo"<img src='resource/$im_1.jpg' style='width:1000px; height:600px' >";
  echo"<div class='text'>Caption one</div>";
echo"</div>";

echo"<div class='mySlides fade'>";
  echo"<div class='numbertext'>2 / 5</div>";
  echo"<img src='resource/$im_2.jpg' style='width:1000px; height:600px'>";
  echo"<div class='text'>Caption Two</div>";
echo"</div>";

echo"<div class='mySlides fade'>";
  echo"<div class='numbertext'>3 / 5</div>";
  echo"<img src='resource/$im_3.jpg' style='width:1000px; height:600px'>";
  echo"<div class='text'>Caption Three</div>";
echo"</div>";

echo"<div class='mySlides fade'>";
  echo"<div class='numbertext'>4 / 5</div>";
  echo"<img src='resource/$im_4.jpg' style='width:1000px; height:600px'>";
  echo"<div class='text'>Caption four</div>";
echo"</div>";

echo"<div class='mySlides fade'>";
  echo"<div class='numbertext'>5 / 5</div>";
  echo"<img src='resource/$im_5.jpg' style='width:1000px; height:600px'>";
  echo"<div class='text'>Caption five</div>";
echo"</div>";
echo"<a class='prev' onclick='plusSlides(-1)'>❮</a>";
echo"<a class='next' onclick='plusSlides(1)'>❯</a>";

echo"</div>";

    }
  }

?>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span> 
  
</div>
<?php
echo"<div>";
echo"<b>&nbsp&nbspDiscription:</b> <br>";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$dis";
echo"</div>";

?>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
