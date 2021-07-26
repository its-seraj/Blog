<?php
    include("connection.php");

    $blog_no = $_POST["blog_no"];

    $query = "SELECT link FROM tag WHERE blog_no='$blog_no'";

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);

    //echo json_encode($row);
    include($row["link"]);
    echo $output;
?>