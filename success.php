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
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
	<meta charset="UTF-8">

	<title>Minigames.com</title>
	<style>



</style>
</head>
<body class="black">
<nav class="grey navbar-fixed-top ">
            <div class="nav-wrapper">

              <ul class="right ">
				<li><?php echo "Hello ".$_SESSION["loginid"]."!";?></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="logout.php">Logout</a></li>

                </ul>
            </div>
		  </nav>
		  <br><br><br>
			<div class="container white-text center-align">
				<h1>Choose Your Game</h1>

			</div>
		  <div class="row">

      <div class="col s6 ">

	  <div class="card large ">
    	<div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="media/g2.jpg" style=" object-fit: cover;
  width: 1000px;
  height:300px;">
    	</div>
   	 <div class="card-content">
      <span class="card-title activator ">1-minute challenge</span>

   	 </div>
    	<div class="card-reveal grey center-align white-text" style="font-size:30px;">
      <span class="card-title "><i class="material-icons right black-text">close</i></span>
	  <p> Details: <br> a. The aim is to prevent the ball from escaping the screen till 1 minute <br>
										  b. There is a paddle which is to be controlled by mouse.<br>
											ALL THE BEST !!! </p>
											 <a href="game1.php"> Play Now</a><br>
    </div>
  </div>

	  </div>
      <div class="col s6 "">
	  <div class="card large ">
    	<div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="media/g1.jpg" style=" object-fit: cover;
  width: 1000px;
  height: 300px;">
    	</div>
   	 <div class="card-content ">
      <span class="card-title activator ">MineSweeper</span>

   	 </div>
    	<div class="card-reveal grey center-align white-text" style="font-size:30px;">
      <span class="card-title "><i class="material-icons right black-text">close</i></span>
      <p> Details:<br>a.The aim is to detect all the mines present.<br>
											 b.The number in a block represents the number of mines in the eight neighbouring blocks.<br>
											 c.Use your mind to predict the blocks which have mines and right click to mark blocks which have mines<br>
											 d.You win if all the blocks NOT having mines are turned upside<br>
												  ALL THE BEST !!! </p>
											 <a href="mine.php">Play Now </a><br>
    </div>


		</div>


    </div>



</body>
</html>
