<?php 
$errid=$errpass=$errcpass=$signupinfo="";
$errval=0;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST["loginid"];
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];
if(empty($id))
{
	$errval=1;
	$errid="Login-Id can't be empty";
}
if(empty($pass))
{
	$errval=1;
	$errpass="Password can't be empty";
}
if($pass != $cpass)
{
	$errval=1;
	$errcpass="Password doesn't match!!";
}
if($errval==0)
{
	$db=mysqli_connect('localhost','root','','minigames');
	if(!$db)
	{
		echo "Connection failed";
	}
	else{
		$id=mysqli_real_escape_string($db,$_POST["loginid"]);
		$pass=mysqli_real_escape_string($db,$_POST["pass"]);
		$checkquery="select * from logininfo where loginid='$id'";
		$result=mysqli_query($db,$checkquery);
		if(mysqli_num_rows($result)==1)
		{
			$signupinfo="Username already exists. Please try another username";
		}
		else
		{
			$insertquery="insert into logininfo values('$id','$pass')";
			mysqli_query($db,$insertquery);
			$signupinfo="Successfully Signed-Up";
			header("refresh:3;url=minigames.php");
		}
	}
}
}
?>
<html>
<title>Signup-Minigames</title>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body style="background-image: url('media/bglog2.jpg');background-size:cover;">
<div class="container white-text" style="font-size:20px  ;" >
<nav class="black navbar-fixed-top ">
            <div class="nav-wrapper">
                
              <ul class="right ">
			  
                <li><a href="index.html">Visit Home</a></li>
                <li><a href="minigames.php">Login</a></li>
                </ul>
            </div>
		  </nav>
		  <br>
<h2 style="margin-bottom: 100px;" class="text-center"> Sign Up </h2>
<form method="post" action="signup.php" style="width:180px;
background:rgba(0,0,0,0.5);
color:#ffffff;
position:absolute;
transform:translate(-50%,-50%);
top:50%;
left:50%;
width: 400px;
padding-top: 40px;
padding-left:70px;
padding-right:70px;">
	<div>
		
Login-Id:<br>
<input type="text" name ="loginid"><br>
<span style="color:red;font-size: 20px;"><?php echo $errid ?></span><br>
Password:<br>
<input type="password" name ="pass"><br>
<span style="color:red;font-size: 20px;"><?php echo $errpass ?></span><br>
Confirm Password :<br>
<input type="password" name ="cpass"><br>
<span style="color:red;font-size: 20px;"><?php echo $errcpass ?></span><br>
<button  class="white-text btn-large"> Create account </button><br><br>
<span style="color:red;font-size: 20px;"><?php echo $signupinfo ?></span>

</div>
</form>
</form>
</body>
</html>