<!doctype html>
<html lang="en">
  <head>
    <title>Chỉnh sửa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<?php
include ('connect.php');
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `gv` where id='$id'");
$row=mysqli_fetch_array($query);
?>
    <div class="container">
    <div class="heading">
        <h3><p class="text-center">Sửa thông tin giáo viên</p></h3> 
        <hr>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 text-center">
    
        
    </div>
    </div>
    <div class="row">  
            <div class="col-xs-12 col-sm-6 col-md-6">
            <form action="" method="POST" autocomplete="off">
                    <h6>Mã giáo viên</h6>      
                    <input type="text" name="magv" class="form-control" value="<?= $row['magv'] ;?>" >
                    <br>        
                    <h6>Tên giáo viên</h6>      
                    <input type="text" name="name"  class="form-control" value="<?= $row['name'] ;?>">
                    <br> 
                    <h6>Giới tính</h6> 
                    <div class="form-check form-check-inline" >
                      <input class="form-check-input" type="radio" checked="" name="gender" value="0">
                      <label class="form-check-label" > Nam </label>
                      <input class="form-check-input" type="radio" name="gender" value="1">
                      <label class="form-check-label" > Nữ </label>
                    </div>   
                    <br>  
                    <br>  
                    <h6>Birthday</h6>                  
                    <input type="date" name="birthday" size="40" class="form-control" value="<?= $row['birthday'] ;?>">
                    <br>
                    <h6>SĐT</h6>      
                    <input type="text" name="sdt"  class="form-control" value="<?= $row['sdt'] ;?>">
                    <br> 
                    <h6>Email</h6>      
                    <input type="text" name="email"  class="form-control" value="<?= $row['email'] ;?>" >
                    <br> 
                    <h6>Địa chỉ</h6>      
                    <input type="text" name="diachi"  class="form-control" value="<?= $row['diachi'] ;?>" >
                    <br> 
                    <h6>Dạy môn</h6>
                    <label for="daymon"></label>
                    <select name="daymon" id="daymon">
                    <option value="0"><?php
                     switch ($row['daymon']) {
                      case 1:
                        echo("Văn");
                        break;
                      case 2:
                       echo("Toán");
                        break;
                      case 3:
                        echo("Anh");
                        break;
                      case 4:
                        echo("Vật Lý");
                        break;
                      case 5:
                        echo("Hóa Học");
                        break;
                      case 6:
                        echo("Sinh học");
                        break;
                      case 7:
                       echo("Thể Chất");
                        break;
                      }?></option>
                    <option value="1">Văn</option>
                    <option value="2">Toán</option>
                    <option value="3">English</option>
                    <option value="4">Vật Lý</option>
                    <option value="5">Hóa Học</option>
                    <option value="6">Sinh Học</option>
                    <option value="7">Thể Chất</option>
                    </select>    
                    <p class="text-center">
                    <input type="submit" value="Lưu lại" name="submit" class="btn btn-primary" >
                    <a class="btn btn-light" href="2.php" role="button">Cancel</a>  
                    </p>
    </div>
      <?php
            if( isset($_POST['submit'])){
                  $magv=$_POST['magv'];
                  $name=$_POST['name'];
                  $gender=$_POST['gender'];
                  $birthday=$_POST['birthday'];
                  $sdt=$_POST['sdt'];
                  $email=$_POST['email'];
                  $diachi=$_POST['diachi'];
                  $daymon=$_POST['daymon'];
                  
            
                  $sql="UPDATE `gv` SET magv= '$magv'  , `name`= '$name'  , `gender`= $gender , `birthday`= $birthday  , `sdt` = $sdt  ,
                        email = '$email'  , `diachi`= '$diachi'  , `daymon`= $daymon Where id='$id' ";
                  if ($conn->query($sql) === TRUE) {
                    $_SESSION['message']="Record has been update !";
                    $_SESSION['msg_type']="Success";
                    header("location:2.php");
                  } else {
                    echo "Error deleting record: " . $conn->error;
                  }
                  }     
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>