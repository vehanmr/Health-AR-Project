<?php
$host="localhost";
$player="root";
$password="";
$db="healthdb";

session_start();

$data=mysqli_connect($host,$player,$password,$db);
if($data===false)
{
    die("connection error");
} 

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username='".$username."' AND password='".$password."' ";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="player")
    {  
        
        $_SESSION["username"]=$username;

        header("location:playerHome.php");
    }

    elseif($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
        header("location:adminhome.php");

    }
    elseif($row["usertype"]=="coach")
    {
        $_SESSION["username"]=$username;
        header("location:coachhome.php");

    }
    else
    {
        echo "user name or password incorrect";
    }



}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet/less" type="text/css" href="css/login.less" />
    <script type="text/javascript" src="js/login.js"></script>
    <title>Document</title>
</head>
<body>
   <style>
       @import url("https://fonts.googleapis.com/css?family=Raleway:400,700");
*, *:before, *:after {
  box-sizing: border-box;
}

body {
  min-height: 100%;
  font-family: "Raleway", sans-serif;
}

.container:hover .top:before, .container:hover .top:after, .container:hover .bottom:before, .container:hover .bottom:after, .container:active .top:before, .container:active .top:after, .container:active .bottom:before, .container:active .bottom:after {
  margin-left: 200px;
  transform-origin: -200px 50%;
  transition-delay: 0s;
}
.container:hover .center, .container:active .center {
  opacity: 1;
  transition-delay: 0.2s;
}

.top:before, .top:after, .bottom:before, .bottom:after {
  content: "";
  display: block;
  position: absolute;
  width: 200vmax;
  height: 200vmax;
  top: 50%;
  left: 50%;
  margin-top: -100vmax;
  transform-origin: 0 50%;
  transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
  z-index: 10;
  opacity: 0.65;
  transition-delay: 0.2s;
}

.top:before {
  transform: rotate(45deg);
  background: #e46569;
}
.top:after {
  transform: rotate(135deg);
  background: #ecaf81;
}

.bottom:before {
  transform: rotate(-45deg);
  background: #60b8d4;
}
.bottom:after {
  transform: rotate(-135deg);
  background: #3745b5;
}

.center {
  position: absolute;
  width: 400px;
  height: 400px;
  top: 50%;
  left: 50%;
  margin-left: -200px;
  margin-top: -200px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 30px;
  opacity: 0;
  transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
  transition-delay: 0s;
  color: #333;
}
.center input {
  width: 100%;
  padding: 15px;
  margin: 5px;
  border-radius: 1px;
  border: 1px solid #ccc;
  font-family: inherit;
}
   </style>
<center>
    <h1>Welcome to</h1>
    <h2>to</h2>
    <h2>HealthAR</h2>
    
<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
        <form action="#" method="POST"> 
    <div>
        <label>username</label>
        <input type="email" name="username" required placeholder="email">
</div>
<br><br>
<div>
        <label>password</label>
        <input type="password" name="password" required placeholder="Password">
</div>
<br><br>

<div>
        
        <input type="submit" value="login">
    </div>
    </form>
    <br><br>
    </div>
</center>
<!-- <style>
    body {
 background-image: url("image/image3.jpg");
 background-color: #cccccc;
}
</style> -->

</div>

</body>
</html>