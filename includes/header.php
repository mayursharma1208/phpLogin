<?php 
	include_once'config/Session.php';
	include_once'config/Database.php';
	include_once'config/Utilities.php'; 
?>
<!DOCTYPE html>
<html>
<head lang="en">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- link the connector stylsheet -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/sweetalert.css">

	  <script src="assets/js/sweetalert.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">CG Map Portal</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
  	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"><i class="hide"><?php echo guard(); ?></i>
		<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
	<?php 
		if(isset($_SESSION['username']) || isCookieValid($db)):
	?>
		<li class="nav-item"><a class="nav-link" href="profile.php">My Profile</a></li>
		<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
	<?php else: ?>
		<li class="nav-item"><a class="nav-link" href="#">About</a></li>
		<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
		<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
		<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
	<?php endif; ?>	
    </ul>
  </div>
</nav>