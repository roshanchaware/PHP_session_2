<?php 
include('db.php');
session_start();

if (isset($_POST['submit'])) {
  
  $sql = "SELECT * FROM `user` WHERE user_id='" . $_POST['inEmail'] . "' AND password = MD5('". $_POST['inPassword']."')";
  
  $result = mysqli_query($con, $sql);

  $row = mysqli_fetch_assoc($result);

  if (is_array($row)) {
    $_SESSION["id"] = $row["id"];
    $_SESSION["f_name"] = $row["f_name"];
    $_SESSION["l_name"] = $row["l_name"];
  }
  else{
    echo "<script>alert('Invalid username or password!')</script>";
  }

}
if (isset($_SESSION["id"])) {

  header("Location:profile.php");
  
}


 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Session</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="signin.php">SignIn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">SignUp</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Log in form -->
<form class="my-4" action="" method="POST">
  <div class="container">
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="inEmail">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="inPassword">
  </div><br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Sign In</button>&nbsp;<p>If you not having account? Please <a href="signup.php">Sign Up</a></p>
  </div>
</div>
</form>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>