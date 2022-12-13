<?php
session_start();
include 'connection.php';

if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Coach Profile</title>
</head>
<body>
  <?php echo $_SESSION["username"] ?>
  <nav>
       <div class="logo">
           <p>HealthAR</p>
       </div>
       <ul>
           <li><a href="coachHome.php">Profile</a></li>
           <li><a href="">Playerstat</a></li>
           <li><a href="liveFeed.php">LiveFeed</a></li>
           <a href="logout.php">Logout</a> 
       </ul>
   </nav>
   </nav>
   <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">insert image</span><span class="text-black-50">coming soon</span><span> </span></div>
      </div>
      <div class="col-md-7 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-left"><?php echo $_SESSION["username"] ?> info</h4>
          </div>
          <div class="row mt-1">
            <table class="table">
              <?php
    $sql="select * from coach where Cemail='".$_SESSION["username"]."'";
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
           $Cpassword=$row['Cpassword'];
           $Cfield=$row['Cfield'];
           $Cexperience=$row['Cexperience'];
           $Cpexperience=$row['Cpexperience']; 
          echo ' <tbody> <tr>
          <td scope="row">coach ID</td>
          <td>'.$coachId.'</td>
          </tr>
          <tr>
          <td scope="row">First Name</td>
          <td>'.$Cfname.'</td>
          </tr>
          <tr>
          <td scope="row">Last Name</td>
          <td>'.$Clname.'</td>
          </tr>
          <tr>
          <td scope="row">Date of Birth</td>
          <td>'.$Cdob.'</td>
          </tr>
          <tr>
          <td scope="row">Address</td>
          <td>'.$Caddress.'</td>
          </tr>
          <tr>
          <td scope="row">Contact Number</td>
          <td>'.$Ccontact.'</td>
          </tr>
          <tr>
          <td scope="row">Email</td>
          <td>'.$Cemail.'</td>
          </tr>
          <tr>
          <td scope="row">Password</td>
          <td>'.$Cpassword.'</td>
          </tr>
          <tr>
          <td scope="row">Height</td>
          <td>'.$Cfield.'</td>
          </tr>
          <tr>
          <td scope="row">Weight</td>
          <td>'.$Cexperience.'</td>
          </tr>
          <tr>
          <td scope="row">bloodgroup</td> 
          <td>'.$Cpexperience.'</td>
          </tr>
          <td>
   </td>
        </tr>';
         
        }
        
    }

      ?>
                    </table>
                  </div>

   </div>

  
</body>
</html>