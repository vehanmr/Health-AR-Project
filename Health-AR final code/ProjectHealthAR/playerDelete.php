<?php
    include 'connection.php';
    if(isset($_GET['deleteid'])){
        $playerId=$_GET['deleteid'];

        $sql="delete from user where playerId=$playerId";
        $result=mysqli_query($con,$sql);
        if($result){
            // echo "Deleted succesfully";
            header('location:inspectPlayer.php');
        }else{
            die(mysqli_error($con));
        }
    }

?>
