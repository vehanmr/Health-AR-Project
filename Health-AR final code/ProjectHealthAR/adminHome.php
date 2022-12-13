<?php
session_start();
if (!isset($_SESSION["username"])) {
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
  <title>Document</title>
</head>

<body>
  <?php echo $_SESSION["username"] ?>
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
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">insert image</span><span class="text-black-50">coming soon</span><span> </span></div>
      </div>
      <div class="col-md-7 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Admin Info</h4>
          </div>
          <div class="row mt-1">
            <table class="table">

              <tbody>
                <tr>
                  <td scope="col">Index number</td>
                  <td scope="col">001</td>

                </tr>
                <tr>
                  <td scope="row">First name</td>
                  <td colspan="2">Ranidu</td>
                </tr>
                <tr>
                  <td scope="row">Last Name</td>
                  <td colspan="2">Vishwa</td>
                </tr>
                <tr>
                  <td scope="row">dob</td>
                  <td colspan="2">26/07/1998</td>
                </tr>
                <tr>
                  <td scope="row">Address</td>
                  <td colspan="2">236/A Peradeniya road, Kandy</td>
                </tr>
                <tr>
                  <td scope="row">Email</td>
                  <td colspan="2">ranidume@admin.com</td>
                </tr>
                <tr>
                  <td scope="row">Admin Privileges</td>
                  <td colspan="2">View/add/delete users</td>
                </tr>
              </tbody>
                    </table>
                  </div>
</body>

</html>