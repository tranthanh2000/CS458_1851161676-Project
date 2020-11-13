<?php
    if($_POST['tendangnhap'] == 'admin' && $_POST['password'] == '123456' ){
        header("location:admin.php");
    }else{
        exit;
    }

?>