<?php
include 'connection.php';
if (isset($_POST['submit'])) {

    $playerId = $_POST['playerId'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $bloodgroup = $_POST['bloodgroup'];

    $sql = "insert into user(playerId,fname,lname,dob,address,contact,email,password,height,weight,bloodgroup)
    values('$playerId','$fname','$lname','$dob','$address','$contact','$email','$password','$height','$weight','$bloodgroup')";
    $sql1 = "insert into login(username,password,usertype)
     values('$email','$password','player')";
    $result = mysqli_query($con, $sql);
    $result2 = mysqli_query($con, $sql1);

    if ($result && $result2) {
        echo "Data inserted sucessfully";
    } else {
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <title>addPlayer</title>
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
    </nav>
    <br>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Insert image</span><span class="text-black-50">coming soon</span><span> </span></div>
            </div>
            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Add Player</h4>
                    </div>
                    <div class="container my-5">
                        <form method="post">
                            <div class="mb-3">
                                <label class="form-label">Player ID</label>
                                <input type="text" class="form-control" placeholder="Enter your id" name="playerId">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="first name" name="fname">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="last name" name="lname">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="text" class="form-control" placeholder="yyyy-mm-dd" name="dob">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" placeholder="address" name="address">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contact Number</label>
                                <input type="text" class="form-control" placeholder="contact number" name="contact">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" placeholder="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" placeholder="password" name="password">
                            </div>

                    </div>
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                    <div class="mx-auto" style="width: 560px;">
                        <div class="justify-content-between text-left align-items-center mb-3 ">
                            <h4 class="text-left">Profesional Details</h4>
                            <div class="mb-3">
                                <label class="form-label">Height</label>
                                <input type="text" class="form-control" placeholder="height (in cm)" name="height">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Weight</label>
                                <input type="text" class="form-control" placeholder="weight (in kg)" name="weight">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">bloodgroup</label>
                                <input type="text" class="form-control" placeholder="bloodgroup" name="bloodgroup">
                            </div>


                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </form>
                        </div>


</body>

</html>