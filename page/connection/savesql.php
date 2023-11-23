<?php
function ExecuteQuery($query,$connect)
{
    $count=0;
    $result = mysqli_query($connect,$query);
    {
        if ($result) {
            echo "done";

        }
        else{
            die("Error".mysqli_error($connect));
        }
    }
}
?>