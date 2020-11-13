<?php
    function getAllUsers(){
        global $conn;
        $sql="SELECT * FROM gv";
        $result=mysqli_query($conn,$sql);
        $users=mysqli_fetch_all($result);
        return $result;
        
    }
   
?>