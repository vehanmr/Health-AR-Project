
<?php
include 'connection.php';
session_start();

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
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php echo $_SESSION["username"] ?>
    
       
    
   <nav>
       <div class="logo">
           <p>HealthAR</p>
       </div>
       <ul>
           <li><a href="playerHome.php">Profile</a></li>
           <li><a href="">stats</a></li>
           <a href="logout.php">Logout</a> 
       </ul>
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
    $sql="select * from user where email='".$_SESSION["username"]."'";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
          $playerId =$row['playerId'];
          $fname=$row['fname'];
          $lname=$row['lname'];
          $dob=$row['dob'];
          $address=$row['address'];
          $contact=$row['contact'];
          $email=$row['email'];
           $password=$row['password'];
           $height=$row['height'];
           $weight=$row['weight'];
           $bloodgroup=$row['bloodgroup']; 
          echo ' <tbody> <tr>
          <td scope="row">Player ID</td>
          <td>'.$playerId.'</td>
          </tr>
          <tr>
          <td scope="row">First Name</td>
          <td>'.$fname.'</td>
          </tr>
          <tr>
          <td scope="row">Last Name</td>
          <td>'.$lname.'</td>
          </tr>
          <tr>
          <td scope="row">Date of Birth</td>
          <td>'.$dob.'</td>
          </tr>
          <tr>
          <td scope="row">Address</td>
          <td>'.$address.'</td>
          </tr>
          <tr>
          <td scope="row">Contact Number</td>
          <td>'.$contact.'</td>
          </tr>
          <tr>
          <td scope="row">Email</td>
          <td>'.$email.'</td>
          </tr>
          <tr>
          <td scope="row">Password</td>
          <td>'.$password.'</td>
          </tr>
          <tr>
          <td scope="row">Height</td>
          <td>'.$height.'</td>
          </tr>
          <tr>
          <td scope="row">Weight</td>
          <td>'.$weight.'</td>
          </tr>
          <tr>
          <td scope="row">bloodgroup</td> 
          <td>'.$bloodgroup.'</td>
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