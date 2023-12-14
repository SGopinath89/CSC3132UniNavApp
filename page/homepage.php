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
            display: none;
            position: fixed;
            top: 15%;
            left: 15%;
            transform: translate(-50%, -50%);
            border: 2px solid #000;
            background-color: white;
            padding: 20px;
            z-index: 999;
        }
        

       
        #div1{
      width: 200px;
      height: 200px;
      position: absolute;
      border-radius: 10px;
      margin-top: 470px;
      margin-left: 135px;
      border: 2px solid #000;
      background-color: rgb(173, 225, 230);
      padding: 20px;
      z-index: 999;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        img{
            margin-top: -10px;
            height: 50px;
            width: 60px;
        }
        #a{
            height: 50px;
            width: 50px;
            margin-left: 125px;
            margin-top: 470px;
        }
        h4{
            text-align: right;
            margin-top: 17px;
        }
        p{
            margin-bottom: 0px;
        }
        .small{
            text-align: justify;
            margin-bottom: 0px;
            margin-top: 0px;
            font-weight: normal;

        }
        #A{
            height: 30px;
            width: 30px;
            padding: 0px;
        }
        h2{
            margin-top: -10px;
            text-align: center;
            text-decoration: underline;
            text-decoration-color: grey;
        }
        a{
            text-decoration: none;
            color: black;
        }
        
        .close{
            position: absolute;
            right: 10px;
            height: 23px;
            width: 25px;
            margin-top: -10px;
        }
    </style>
</head>
<body>
    
    <?php include "header/header.php"?>
    <?php include "header/navpanel1.php"?>
    <!--
    <div style="background-color:rgba(203, 219, 192, 0.748);">
            <img src="page/resource/uovlogoname.png" width="50%">       
    </div>

    <div style="background-color: rgb(63, 179, 0);height: 8px;">
       
    </div>
    <div style="background-color: rgb(32, 96, 32);height: 40px;">
        <table  style="font-size:30px ;
                        color:white;
                        font-family: Barlow medium;" cellpadding="1vw">
            <tr>
                <td><a href="homepage.php">Home</a></td>
                <td><a href="page/loginpage.php">Login</a></td>
            </tr>
        </table>
    </div>
-->
    <div class="sticky" id="im">
       
    <img src="resource/pngegg.png" id="a" >
    
    <div class="frame" id="div1">
        <img src="resource/Close.png" id="b" class="close">

        <h2>UOV entrance</h2>
           <img src="112.jpg">
           <img src="113.jpg">
           <img src="114.jpg">
              <p><b>descripation :<b></p>
              <p class="small">&nbsp&nbspuniversity of vavuniya Copyright ownership gives the owner...</p>
         <a href="index2.html"><h4>Learn more..</h4></a>
           
    </div>
    
    

    


    <script>
{
       function creatediv(a,b) 
       {
            const openButton = document.getElementById('a');
            const closeButton = document.getElementById('b');
                const frame = document.querySelector('.frame');

                openButton.addEventListener('click', () => {
                       frame.style.display = 'block';
                });

                closeButton.addEventListener('click', () => {
                       frame.style.display = 'none';
                });
        }

        
            
            creatediv(a, b);
        
        
}

    </script>
       
    </div>
   
</body>
</html>