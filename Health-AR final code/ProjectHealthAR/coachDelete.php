<?php
    include 'connection.php';
    if(isset($_GET['deleteid'])){
        $playerId=$_GET['deleteid'];

        $sql="delete from coach where coachId=$coachId";
        $result=mysqli_query($con,$sql);
        if($result){
            // echo "Deleted succesfully";
            header('location:inspectCoach.php');
        }else{
            die(mysqli_error($con));
        }
    }

?>
