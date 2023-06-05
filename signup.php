<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Join us</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
 
    <?php include('link.php'); 
include('header.php');
        //extract($_POST);
require('connection.php');
//$check=mysqli_query($conn,"SELECT * FROM user where username='$uname'");
//if(mysqli_num_rows($check)>0)
//{
//    echo "<script>alert('Username Already taken, try something else');</script>"; 
//    exit;
//}
// else (isset($_POST['submit']))
if(isset($_POST['submit']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['em']);
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $password =mysqli_real_escape_string($con, $_POST['psw']); $password=password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO `accounts` (`username`, `name`, `password`, `email`) VALUES ('$uname', '$name','$password', '$email')" ;
    
    if(mysqli_query($con, $query))
    {
    

       header('Location: login.php');
    } else 
    {
      echo 'ERROR: '. mysqli_error($con);
       echo '<script> alert("Invalid Username or Email!");</script>';
    }
}
    
    
    
    ?>

</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="post">
				<h2>Register Account Form</h2>
				<div class="form-row">
					<label for="full-name">Full Name</label>
					<input type="text" name="name" id="full-name" class="input-text" placeholder="Your Name" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="text" name="em" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
                <div class="form-row">
					<label for="user-name">Username</label>
					<input type="text" name="uname" id="user-name" class="input-text" placeholder="Pick a Username" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="psw" id="password" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="submit" class="register" value="Register">
                
                    <a href="login.php" class="login-mem">I already have an account</a>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<?php include('footer.php'); ?>
</html>