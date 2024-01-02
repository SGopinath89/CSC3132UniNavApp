<?php
function ExecuteQuery($query,$connect,$msg)
{
    $count=0;
    $result = mysqli_query($connect,$query); 
        if ($result) {
            echo "$msg";

        }
        else{
            die("Error".mysqli_error($connect));
        }
}
?>