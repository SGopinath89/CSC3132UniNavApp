<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link rel="stylesheet" href="style/styles.css">
    <style type="text/css">
       #im{
    height: 800px;
    background-image: url('resource/uovmap.jpg');
    background-position: center;
    background-size: cover;
    border: 15px solid black;

     } 
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
        
        
        .a1{
            height: 40px;
            width: 40px;
            margin-left: 200px;
            margin-top: 200px;
        }
        #b2{
            height: 20px;
            width: 20px;
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
        #s_size{
            height: 50px;
            width: 65px;
        }
        @media only screen and (max-width: 600px) {
        .frame {
            width: 100%;
            height: auto;
            margin-left: 0;
        }

        #a2,
        #a1 {
            margin-left: 0;
        }

        /* Add more responsive styles as needed */
    }

    </style>
</head>
<body>
    <?php include "header/header.php"?>
    <?php include "header/navpanel1.php"?>
   
    <div class="sticky" id="im">
    <?php
require_once'connection/sqlconnect.php';
$query1="SELECT * FROM Addimage";
$result1=mysqli_query($connection,$query1);
$count=mysqli_num_rows($result1);
for ($i = 1; $i <= $count; $i++) {
    $query="SELECT * FROM Addimage WHERE id='$i'";
    $result=mysqli_query($connection,$query);
    foreach ($result as $key => $value) {
        $m_l=$value['mar_l'];
        $m_t=$value['mar_t'];
        $loc=$value['b_img'];
        $he=$value['heading'];
        $icon=$value['mar_t']-28;
       
        $ic=$m_l+38;

    
    echo "<img src='resource/$loc.jpg' style='margin-left: {$m_l1}vw; margin-top: {$m_t1}vw; padding: 0px' id='a{$i}' id='p'>";
   }
}
?>


<?php
for($j=1; $j<=$count; $j++)
{
    $query3="SELECT * FROM Addimage WHERE id='$j'";
    $result3=mysqli_query($connection,$query3);
    foreach ($result3 as $key => $value)
    {
        $im_1=$value['img_1'];
        $im_2=$value['img_2'];
        $im_3=$value['img_3'];
        $m_l=$value['mar_l']+20;
        $m_t=$value['mar_t'];
        $hed=$value['heading'];
        $ID=$value['id'];
        $dis=$value['description'];
        $sorttext=substr($dis, 0, 100);
        
   echo"<div>";
        echo"<div class='frame' id='div{$j}' style='margin-left: {$m_l}px; margin-top: {$m_t}px;'>";
           echo"<img src='Close.png' id='c{$j}' class='siz'>";
           echo"<h2>$hed</h2>";
           echo"<img src='resource/$im_1.jpg' id='s_size'>";
           echo"<img src='resource/$im_2.jpg' id='s_size'>";
           echo"<img src='resource/$im_3.jpg' id='s_size'>";
           echo "<b>discreption:</b><br>";
           echo"<p>$sorttext</p>";
           echo "<a href='moredetails.php?val=" . urlencode($ID) . "' id='more'>view more</a>";
           
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

    for (let i = 1; i <= <?php echo $count; ?>; i++) {
           toggleFrame('a' + i, 'div' + i, 'c' + i);
        }
</script>
    </div>
   
</body>
</html>