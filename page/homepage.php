<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link rel="stylesheet" href="style/styles.css">
    <style type="text/css">
        
        .frame {
      width: 200px;
      height: 200px;
      position: absolute;
      border-radius: 10px;
      margin-left: 135px;
      border: 2px solid #000;
      background-color: rgb(173, 225, 230);
      padding: 20px;
      z-index: 999;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      display: none;
        }
        #a2{
            height: 50px;
            width: 50px;
            margin-left: 125px;
            margin-top: 470px;
        }
        #a1{
            height: 50px;
            width: 50px;
            margin-left: 200px;
            margin-top: 200px;
        }
        
        .close{
            position: absolute;
            right: 10px;
            height: 23px;
            width: 25px;
            margin-top: -10px;
        }
        
        #p{
            position: absolute;
            height: 50px;
            width: 65px;
        }
        .siz{
            position: absolute;
            right: 1px;
            height: 23px;
            width: 25px;
            margin-top: -21px;
        }
        h2{
            margin-top: -10px;
            text-align: center;
            text-decoration: underline;
            text-decoration-color: grey;
        }
        b{
            margin-bottom: 1px;
        }
        p{
           margin-top: 5px;
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
<body>
    
    <?php include "header/header.php"?>
    <?php include "header/navpanel1.php"?>
   
    <div class="sticky" id="im">
    <?php
require_once'connection/sqlconnect.php';
$query1="SELECT * FROM mar_img";
$result1=mysqli_query($connection,$query1);
$count=mysqli_num_rows($result1);
for ($i = 1; $i <= 1; $i++) {
    $query="SELECT * FROM mar_img WHERE id='$i'";
    $result=mysqli_query($connection,$query);
    foreach ($result as $key => $value) {
        $m_l=$value['mar_left'];
        $m_t=$value['mar_top'];
        $loc=$value['img_loc'];
        $m_l1=$m_l-35;
        $m_t1=$m_t-74;
    
    echo "<img src='$loc.jpg' style='margin-left: {$m_l1}px; margin-top: {$m_t1}px; padding: 0px' id='a{$i}' id='p'>";
   }
}
?>


<?php
$query2="SELECT * FROM cre_div;";
$result2=mysqli_query($connection,$query2);
$count2=mysqli_num_rows($result2);
for($j=1; $j<=$count2; $j++)
{
    $query3="SELECT * FROM cre_div WHERE id='$j'";
    $result3=mysqli_query($connection,$query3);
    foreach ($result3 as $key => $value)
    {
        $im_1=$value['img_1'];
        $im_2=$value['img_2'];
        $im_3=$value['img_3'];
        $hed=$value['head'];
        $ID=$value['id'];
        $dis=$value['discreption'];
        $sorttext=substr($dis, 0, 100);
   echo"<div class='sticky'>";
        echo"<div class='frame' id='div{$j}'>";
           echo"<img src='Close.png' id='c{$j}' class='siz'>";
           echo"<h2>$hed</h2>";
           echo"<img src='$im_1.jpg'>";
           echo"<img src='$im_2.jpg'>";
           echo"<img src='$im_3.jpg'>";
           echo "<b>discreption:</b><br>";
           echo"<p>$sorttext</p>";
           echo "<a href='slied.php?val=" . urlencode($ID) . "'>view more</a>";
           
        echo"</div>";
   echo"</div>";
    }
 }
?>

    
</div>
<script>
    function toggleFrame(openButtonId, frameId,close) {
        const openButton = document.getElementById(openButtonId);
        const closeButton = document.getElementById(close);
        const frame = document.getElementById(frameId);

        openButton.addEventListener('click', () => {
            frame.style.display = 'block';
        });

        // Assuming you want to close the frame when clicking the image
        closeButton.addEventListener('click', () => {
            frame.style.display = 'none';
        });
    }

    toggleFrame('a1', 'div1','c1');
    toggleFrame('a2', 'div2','c2');
    
</script>
    </div>
   
</body>
</html>