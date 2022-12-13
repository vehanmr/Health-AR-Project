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
    
    <title>Add Coach</title>
</head>
<body>
<nav>
       <div class="logo">
           <p>HealthAR</p>
       </div>
       <ul>
           <li><a href="">Profile</a></li>
           <li><a href="addPlayer.php">Add player</a></li>
           <li><a href="addcoach.php">Add Coach</a></li>
           <li><a href="">inspect Player</a></li>
           <li><a href="">inspect Coach</a></li>
           <a href="logout.php">Logout</a>
       </ul>
   </nav>
   </nav>
   <br>
   <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Add Coach</h4>
                </div>
                <div class="row mt-2" method = "post">
                                    <div class="col-md-12"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                                    <div class="col-md-12"><label class="labels">Last Name</label><input type="text" class="form-control" value="" placeholder="last name"></div>
                                    <div class="col-md-12"><label class="labels">Date of Birth</label><input type="date" class="form-control" placeholder="date of birth" value=""></div>
                                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="address" value=""></div>
                                    <div class="col-md-12"><label class="labels">Contact Number</label><input type="text" class="form-control" placeholder="contact number" value=""></div>
                                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="email" value=""></div>
                                    <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="password" value=""></div> 
                                    
                                </div>

                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Register</button></div>
                            </div>
                        </div>
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profesional Details</h4>
                            </div>
                                <div class="col-md-12"><label class="labels">Field</label><input type="text" class="form-control" placeholder="field" value=""></div>
                                <div class="col-md-12"><label class="labels">Years of Experience</label><input type="text" class="form-control" placeholder="years of experience" value=""></div>
                                <div class="col-md-12"><label class="labels">Previous Experience</label><input type="text" class="form-control" placeholder="previous experience" value=""></div>                            
              </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>