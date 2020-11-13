<?php
if($_POST['name'] == NULL ){
    ?><script>alert("Tên không được bỏ trống");</script><?php
}else{
    $tendem = $_POST['tendem'];
    $name = $_POST['name'];
    $tendangnhap = $_POST['tendangnhap'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $password = $_POST['password1'];
    $ngaysinh = $_POST['ngaysinh'];
    $conn = mysqli_connect("localhost", "root", "", "baitap");
    mysqli_set_charset($conn, 'UTF8');
    $sql = "INSERT INTO users (`tendem`, `name`, `tendangnhap` , `email` , `password` , `ngaysinh`) 
VALUES ('$tendem', '$name', '$tendangnhap', '$email', '$password' , '$ngaysinh')";
    if (mysqli_query($conn, $sql)) {
        header("location:register-successfully.php");
    } else {
        echo"Lỗi" ;
        exit();
    }
}