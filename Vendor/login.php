<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"><!-- BootStrap CDN -->
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<div class="container mt-4 " style="border: 2px solid #3E64FF;border-radius:20px;">
	<h1 class="text-weight-bold text-center mt-4">Login Here</h1><br>
	<div class="d-flex justify-content-center align-items-center container">
		
		<form method="POST" action="">
			<div class="form-group mt-3 row">
				<label for="email text" class="text-weight-bold mt-2">
					Email or Phone Number:
				</label>
				<input  type="email text" class="form-control col-xl-12" id="user" name="val" placeholder="Enter email or username">
			
			</div>
			<div class="form-group mt-4 row">
				<label for="password">Password :</label>
				<input type="password" class="form-control col-xl-12" placeholder="Enter Password" id="password" name="password" >
			</div>
			<div class="form-group">
       <div class="mt-4 row">
       <input style="background-color:#3E64FF;color:black;" type="submit" id="btn" class="col-xl-12 btn btn-block font-weight-bold" value="LogIn" name="login">
       </div>
       <div class="form-group row">
       <p class="col-xl-12 font-weight-bolder mt-4">By continuing,<a style="color:#3E64FF;" href="#"> you agree to COMPANY NAME<br>conditions of use and</a> privacy notice.</p>
   </div>
    </div>	
		</form>   		
	</div>
    <h4 class="text-weight-bold text-center mt-4">Not Registered ?</br><a style="color:#3E64FF;" href="signup.php">SignUp</a></h1><br>
    
<?php
//connection to server and database
  require "connection.php";
  session_start();

if(isset($_POST['login']))
{
// GET values passes from form in login.php
  $email=$_POST['val'];
  $ph = $_POST['val'];
  $password=$_POST['password'];
  $password = md5($password);
  
  $result=mysqli_query($conn,"select * from users where password='$password'");
  $row=mysqli_fetch_array($result);
		
		$username = $row['name'];
		
		if ($row['email'] == $email or $row['phone'] == $ph)
		{
			if ($row['password'] == $password )
					{
						echo "<script>alert('Login Successfull!!');</script>";
						$_SESSION['user_name'] = $username;
						header("location:admin.php");
					 } 
			else
					 {
					    echo "<script>alert('Wrong Password');</script>";
					 }  
						
		}
		else
		{
			echo "<script>alert('Wrong Email or Phone number');</script>";
		}
}
						
	?>
	</div>
</body>
</html>