<?php
    $conn=mysqli_connect('localhost', 'root', '', 'baitap');
    if(mysqli_connect_errno()){
        echo "Lỗi : " . mysqli_connect_error();
    }
?>