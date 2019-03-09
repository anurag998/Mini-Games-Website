<?php 
session_start();
if (isset($_SESSION["islogin"]) && $_SESSION["islogin"]==1)
{
header("location:success.php");
}
else
{
$errid=$errpass=$errlogin="";
$errval=0;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if($_POST["loginid"]=="")
	{
		$errid="**Login-Id is required";
		$errval="1";
	}
	if($_POST["Password"]=="")
	{
		$errpass="**Password field is required";
		$errval=1;
	}
	if($errval==0)
	{
		$db=mysqli_connect('localhost','root','','minigames');
		if(!$db)
		{
			echo "Can't connect to the database!";
		}
		else
		{
			$id=mysqli_real_escape_string($db,$_POST["loginid"]);
			$pass=mysqli_real_escape_string($db,$_POST["Password"]);
			$sql="select * from logininfo where loginid='$id' and password='$pass'";
			$result=mysqli_query($db,$sql);
			if(mysqli_num_rows($result)==1)
			{
				$_SESSION["loginid"]=$id;
				$_SESSION["islogin"]=1;
				header("location: success.php");
			}
			else
			{
				$errlogin="Login-Id and password doesn't match!!";
			}
		}
	}
}
}
?>
<html>
<title> Minigames </title>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
<body style="background-image: url('media/bglog.jpg');background-size:cover">
	<nav class="black navbar-fixed-top ">
			<div class="nav-wrapper">
				
			  <ul class="right ">
				<li><a href="index.html">Visit Home</a></li>
				<li><a href="minigames.php">Login</a></li>
				<li><a href="signup.php">Create Account</a></li>
				</ul>
			</div>
		  </nav>
		  <br><br><br>
	<div class="container white-text" >
<marquee style= "font-size: 50px;" > Welcome to ANR Games </marquee>
<div class="container" style="
background:rgba(0,0,0,0.5);
color:#ffffff;
position:absolute;
transform:translate(-50%,-50%);
top:50%;
left:50%;
width: 400px;
height: 600px;
padding-top: 40px;
padding-left:70px;
padding-right:70px;"> 
<h2 class="green-text">Login </h2>
<div style=" font-size:20px; ">
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Login ID:
<input type="text" name = "loginid"> <br>
<span style="color:red; font-size: 20px;"><?php echo $errid ?></span><br>
Password:
<input type="password" name ="Password" ><br>
<span style="color:red; font-size: 20px;"><?php echo $errpass ?></span><br>
<button class="bu white black-text btn-large"> Login</button><br><br>
<span style="color:red;font-size: 20px;"><?php echo $errlogin?></span>
</div>
<span style="color:white;">Don't have an account? </span>
<a href ="signup.php" style="color:yellow;"> Signup Now </a>
</form>
</div>
</div>
</body>
</html>