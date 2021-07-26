<?php
    include("connection.php");

    $search = $_POST["search"];

    $query = "SELECT head, blog_no from blogs WHERE head LIKE '%{$search}%' OR source LIKE '%{$search}%' OR 'date' LIKE '%{$search}%'";

    $result = mysqli_query($conn, $query);
    $output = "";

    $i = "1";
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $output .= '<div class="li update_list" data-value="'.$row["blog_no"].'">'.$row["head"].'</div>';
            $i++;
            if($i >= 5){
                break;
            }
          
        }
        
        
        echo $output;
    }
?>