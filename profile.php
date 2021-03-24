<?php 
session_start();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>session</title>
 </head>
 <body>
<?php 
if (isset($_SESSION["id"])) {

 ?>
 
 <p>Wellcome <b><i><?php echo $_SESSION["f_name"]; ?> <?php echo $_SESSION["l_name"]; ?>.</b></i></p>
 <br>
 click here to <a href="logout.php">Logout</a>

 <?php 
}
else{
	echo "<h1> Login first!!</h1>";
}
 ?>
 </body>
 </html>