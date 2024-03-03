<?php
    include './config.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM `message` where sn='$id'";
        $result=mysqli_query($conn,$sql);
        if($result){
            // echo "Delete Successfull";
            header('location:./admin.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>