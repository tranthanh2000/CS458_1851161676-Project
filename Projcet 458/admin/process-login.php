<?php
    if($_POST['tendangnhap'] == 'admin' && $_POST['password'] == '123456' ){
        header("location:quanlyuser.php");
    }else{
        exit;
    }

?>