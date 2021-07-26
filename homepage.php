<?php
    include("connection.php");

    $result = mysqli_query($conn, "SELECT * FROM homepage ORDER BY RAND() LIMIT 1");
    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);
?>