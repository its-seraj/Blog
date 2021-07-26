<?php
    include("connection.php");

    $except = $_POST["except"];
    //$query = "SELECT head, date, blog_no, img FROM blogs NATURAL JOIN tag";
    $query = "SELECT b.head, b.date, b.blog_no, t.img FROM blogs b NATURAL JOIN tag t WHERE b.blog_no!=$except";

    $result = mysqli_query($conn, $query);
    $output = "";

    $i = "1";
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $output .= '<div class="update_list" data-value="'.$row["blog_no"].'">
                <img src="img/'.$row["img"].'" alt="lenevo tab p11" />
                <div class="head">
                    <div class="hup">'.$row["head"].'</div>
                    <div class="date">'.$row["date"].'</div>
                </div>
            </div>';
            $i++;
            if($i >= 5){
                break;
            }
          
        }
        
        
        echo $output;
    }    
?>