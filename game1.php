<?php
session_start();
if($_SESSION["islogin"]==1)
{
}
else{
	header("location: minigames.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>1minute challange-Minigames.com</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	   <!-- Compiled and minified CSS -->
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	    <!bootstrap js files>
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<meta charset="utf-8">


</head>
<body class="grey">
	<nav class="black navbar-fixed-top ">
	            <div class="nav-wrapper">
								<ul class="left">
									<a href="success.php"><h4>Games</h4></a>

								</ul>
							 <ul class="right ">
								 <li><?php echo "Hello ".$_SESSION["loginid"]."!";?></li>
				   	 			<li><a href="index.html">Home</a></li>
	                <li><a href="logout.php">Logout</a></li>

	                </ul>
	            </div>
			  </nav>
			  <br><br><br><br><br>
				<h2 class="center-align white-text">1-minute Challenge</h2>
				<br>
<div class="container center-align">
<canvas id="gameCanvas" width="800" height="600"></canvas>
<script src='logic.js'></script>
<br>
<span id="time" style="color:white;font-size: 30px;"></span><br>
<button  class="white-text btn-large" onclick="reset()"> Play Again  </button>
</div>
</body>
</html>
