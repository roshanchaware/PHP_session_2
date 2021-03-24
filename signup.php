<?php 
include('db.php');

if (isset($_POST['submit'])) {

  $first_name = mysqli_real_escape_string($con, $_REQUEST['First']);
  $last_name = mysqli_real_escape_string($con, $_REQUEST['Last']);
  $user_id = mysqli_real_escape_string($con, $_REQUEST['Email']);
  $pass = mysqli_real_escape_string($con, $_REQUEST['Password']);

  $sql = "INSERT INTO `user` (`f_name`, `l_name`, `user_id`, `password`) VALUES ('$first_name', '$last_name', '$user_id', MD5('$pass'))";

  // echo $sql;

  $result = mysqli_query($con, $sql);

  if (!isset($result)) {
    echo "Not inserted!".mysqli_query_error();
  }
  // else{
  //   echo "Inserted successfully!";
  // }
if ($result) {
  echo "<script>
  alert('Registration successfully!');
  </script>";
}
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
          <a class="nav-link" href="signin.php">SignIn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="signup.php">SignUp</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Sign Up here -->

<form class="my-4" action="" method="POST" autocomplete="off">
  <div class="container">
    <div class="row">
  <div class="col-md-2">
    <label for="inputText" class="form-label">First name</label>
    <input type="text" class="form-control" id="First" name="First" required="">
  </div>
  <div class="col-md-2">
    <label for="inputText" class="form-label">Last name</label>
    <input type="text" class="form-control" id="Last" name="Last" required="">
  </div>
</div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="Email" required="">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="Password" onchange="check_pass();" required="" onkeyup='check();'>
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Re-Enter password</label>
    <input type="password" class="form-control" id="Password1" name="Password1" onchange="check_pass();" required="" onkeyup='check();'><span id='message'></span>
  </div><br>
  <div class="col-12">
    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Sign Up" disabled>
    &nbsp;<p>If you having account? Please <a href="signin.php">Sign In</a></p>
  </div>
</div>
</form>






<script type="text/javascript">

  var check = function() {
    if (document.getElementById('Password').value ==
    document.getElementById('Password1').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
    document.getElementById('submit').disabled = false;
    } 
    else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not matching';
    document.getElementById('submit').disabled = true;
    }
  }

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>