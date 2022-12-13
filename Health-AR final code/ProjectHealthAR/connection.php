<?php

$con=new mysqli('localhost','root','','healthdb');
if(!$con){
    die(mysqli_error($con));
}

?>