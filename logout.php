<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["f_name"]);
unset($_SESSION["l_name"]);
session_destroy();
header("Location:signin.php");
?>