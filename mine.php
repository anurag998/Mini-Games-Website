<?php
session_start();
  if($_SESSION["islogin"]==1)
  {
  }
  else{
    header("location: minigames.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>

    <style type="text/css">

    .p1{
      font-size:65px;
      text-align: center;
      background-color: black;
    }
    .lb{
      font-size: 25px;
      text-align:right;
      background-color:black;
      color: white;
    }
    .g{
      background-color:black;
      margin-left:300px;
      margin-right:300px ;
          }
    </style>
    <meta charset="utf-8">
    <title>Minesweeper</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="minesweeper.js"></script>
    <link rel="stylesheet" href="minesweeper.css">
   </head>
   <body style="background-color:black;">

    <a href="success.php"><div class="p1"> Games</div></a>
    <div class="lb">
    <?php echo "Hello ".$_SESSION["loginid"]."!";?>
    <a href="index.html">Home</a>
    <a href="logout.php">Logout</a>
    </div>
    <br><br>
    <center>
    <h1 style="color:white;">Minesweeper</h1>
    <div class="g">
    <input id="width" > <span style="color:white;font-size: 20px;">x</span> <input id="height"> <span style="color:white;font-size: 20px;">with</span> <input id="mines"> <span style="color:white;font-size: 20px;">mines</span><br>
    <ul id="menu"></ul>
    <div style="color:white;font-size: 20px;">Time: <span id="timer" style="color:white;font-size: 20px;">0</span></div>
    <div id="board"></div>
    <br><br>
  </div>
    </center>
  </body>
</html>
