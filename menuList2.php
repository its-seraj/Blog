<?php
    include("connection.php");

    // for dlist

    $result = mysqli_query($conn, "SELECT dlist FROM menulist");

    if(mysqli_num_rows($result) > 0){
        $output = "";
        while($rows = mysqli_fetch_assoc($result)){
            if($rows["dlist"] != null)
                $output .= '<div class="dlist" data-value="'.$rows["dlist"].'">'.$rows["dlist"].'</div>';
        }
        echo $output;
    }
?>