<?php

//csak bejelentkezett jatekosoknak.

//session inditas.

require_once "config/AuthMeController.php";





session_start();







if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {

	header("location: login.php");

	exit;

}

?>

<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <meta name="author" content="iLimoPhP">

  <meta name="keyword" content="minecraft theme, iLimoPhP">

  <meta name="description" content="Servername">

  <link rel="stylesheet" href="others/stilus.css">  

  <title>ServerName - DashBoard</title>

  <link rel="stylesheet" href="others/ionicons/css/ionicons.min.css">

	<link rel="stylesheet" type="text/css" href="others/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="others/css/my-login.css">

</head>



<body min-height="4000" scroll="no" style="overflow: hidden" class="my-login-page"><br /><br />

	<section  class="h-100">

		<div  class="container h-100">

			<div class="row justify-content-md-center h-100">

				<div  class="card-wrapper">

						<center><img src="others/fej.jpg" width="150" height"150"> </center>

<br>						

			<center><h1 style="color:#e38809"><?php echo ($_SESSION["username"]); ?></h1> </center>

			<center><h4 style="color: white">[ for rank implements, and other things contact me! ]</h4></center>

		<br>



	<center><a href="logout.php" class="btn btn-danger">LogOUT</a> </center>

					<div style="color:#e38809" class="footer">

						Servername by Jozo_85 &copy; 2021

					</div>

                         

				</div>

			</div>

		</div>

	</section>



	<script src="js/jquery.min.js"></script>

	<script src="bootstrap/js/bootstrap.min.js"></script>

	<script src="js/my-login.js"></script>

</body>

</html>

