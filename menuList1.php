<?php
    include("connection.php");

    // for tlist

    $result = mysqli_query($conn, "SELECT tlist FROM menulist");

    if(mysqli_num_rows($result) > 0){
        $output = "";
        while($rows = mysqli_fetch_assoc($result)){
            if($rows["tlist"] != null)
                $output .= '<div class="tlist" data-value="'.$rows["tlist"].'">'.$rows["tlist"].'</div>';
        }
        echo $output;
    }
?>