<?php

include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inspect Player</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<nav>
       <div class="logo">
           <p>HealthAR</p>
       </div>
       <ul>
           <li><a href="adminHome.php">Profile</a></li>
           <li><a href="addPlayer.php">Add player</a></li>
           <li><a href="addcoach.php">Add Coach</a></li>
           <li><a href="inspectPlayer.php">inspect Player</a></li>
           <li><a href="inspectCoach.php">inspect Coach</a></li>
           <a href="logout.php">Logout</a> 
       </ul>
   </nav>
   <br><br>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="addcoach.php" class="text-light">Add Coach</a>
            </button>

            <table class="table">
  <thead>
    <tr>
      <th scope="col">Coach ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Email</th>
      <!-- <th scope="col">Password</th>
      <th scope="col">Height</th>
      <th scope="col">Weight</th>
      <th scope="col">bloodgroup</th> -->
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
      <?php
    $sql="select * from coach";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
          $coachId=$row['coachId'];
          $Cfname=$row['Cfname'];
          $Clname=$row['Clname'];
          $Cdob=$row['Cdob'];
          $Caddress=$row['Caddress'];
          $Ccontact=$row['Ccontact'];
          $Cemail=$row['Cemail'];
          // $password=$row['password'];
          // $height=$row['height'];
          // $weight=$row['weight'];
          // $bloodgroup=$row['bloodgroup']; 
          echo '  <tr>
          <th scope="row">'.$coachId.'</th>
          <td>'.$Cfname.'</td>
          <td>'.$Clname.'</td>
          <td>'.$Cdob.'</td>
          <td>'.$Caddress.'</td>
          <td>'.$Ccontact.'</td>
          <td>'.$Cemail.'</td>
          <td>
     <button class="btn btn-primary"><a href="" class="text-light">Inspect</a></button>
     <button class="btn btn-danger"><a href="coachDelete.php? deleteid='.$coachId.'" class="text-light">Delete</a></button>
   </td>
        </tr>';
         
        }
        
    }

      ?>
   
  </tbody>
</table>
    </div>
</body>
</html>