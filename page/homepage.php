<!-- 2019/asp/72 -->
<!-- 2019/asp/87 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link rel="stylesheet" href="style/styles.css">
    <style type="text/css">
        #im{
            width: 100%;
            height: auto;
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
            height: 30px;
            width: 30px;
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
        #pos{
            position: absolute;
        }

        .image-container {
           position: relative;
           
           
        }

        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
        }
       
        .ex2{
            position: absolute;
            z-index: 1;
        }
        #big {
            position: absolute;
            color: black;
            background-color: yellow;
            margin: 0;
            display: none;
            border-radius: 10px;
            width: auto;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #ccc;
            z-index: 2;
        }

        img.ex2:hover, img.ex2:active {
            width: 55px;
            height: 55px;
        }
        .ex2:hover + #big {
            display: block;
        }  
        #more{
            text-align: right;
            margin-top: 10px;
        }
        #more:hover{
            color:green;
        }
        @keyframes typing {
      0% {
        width: 0;
      }
      20% {
        width: 20%;
      }
      40% {
        width: 40%;
      }
      60% {
        width: 60%;
      }
      80% {
        width: 80%;
      }
      100% {
        width: 100%;
      }
    }

    .typed-text {
      display: inline-block;
      border-right: 2px solid white; /* Cursor style */
      font-size: 24px;
      white-space: nowrap;
      overflow: hidden;
      animation: typing 0.4s steps(8);
    }

    @keyframes blinkCursor {
      0%, 100% {
        border-color: transparent;
      }
      50% {
        border-color: #333;
      }
    }
    h4{
        margin-top: 1px;
        margin-bottom: 1px;
        margin-left: 4px;
        margin-right: 4px;
    }

    </style>
</head>
<body>
    <?php include "header/header.php"?>
    <?php include "header/navpanel1.php"?>
<div class="image-container">
        <!-- First image -->
        
             <img src="resource/uovmap.jpg" id="im">

  <!-- <img src="resource/uovmap.jpg" alt="Image 1" id="im"> -->
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
        $icon=$value['mar_t'];
        $l=$m_l;
        $t=$m_t-2.5;
        $ic=$m_l+3;
    
    echo "<img src='resource/bicon/$loc.png' style='margin-left: {$m_l}vw; margin-top: {$m_t}vw; padding: 0px' id='a{$i}' class='a1'>";
    echo "<img src='resource/LocationIcon.png' style='margin-left: {$l}vw; margin-top: {$t}vw; padding: 0px height: 40px; width: 40px' class='ex2' id='ico{$i}'>";
    echo"<div  id='big' style='margin-left: {$ic}vw; margin-top: {$t}vw;'><h4 class='typed-text'>$he</h4></div>";
  }
}
?>

</div>   

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
        $m_l=$value['mar_l']+3;
        $m_t=$value['mar_t'];
        $hed=$value['heading'];
        $ID=$value['id'];
        $dis=$value['description'];
        $sorttext=substr($dis, 0, 100);
        
   echo"<div>";
        echo"<div class='frame' id='div{$j}' style='margin-left: {$m_l}vw; margin-top: {$m_t}vw;'>";
           echo"<img src='resource/Close.png' id='c{$j}' class='siz'>";
           echo"<h2>$hed</h2>";
           echo"<img src='resource/bimg/$im_1' id='s_size'>";
           echo"<img src='resource/bimg/$im_2' id='s_size'>";
           echo"<img src='resource/bimg/$im_3' id='s_size'>";
           echo "<b>discreption:</b><br>";
           echo"<p>$sorttext</p>";
           echo "<a href='moredetails.php?val=" . urlencode($ID) . "' id='more'>view more</a>";
           
        echo"</div>";
   echo"</div>";
    }
 }
?>

    

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
   
</body>
</html>