<?php
    $conn = mysqli_connect("localhost", "root", "", "db");
    global $conn;
    $sql="DELETE from `users` WHERE  `id` = " . $_GET['id'] ;

    if ($conn->query($sql) === TRUE) {
          header("location:quanlyuser.php");
    } else {
    echo " <h2> Lỗi : </h2> " . $conn->error;
    }
    $conn->close();
?>