<?php include('config.php'); ?>

<?php

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $query = "DELETE FROM project WHERE sn='$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed" . mysqli_error($conn));
    } else {
        echo "Data deleted";
        header("Location: admin.php");
    }
}
?>
