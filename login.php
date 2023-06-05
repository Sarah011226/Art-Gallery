<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login to your account</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
    
   <?php
include('link.php'); 
include('header.php');
  //  session_start();
    if(count($_POST)>0) 
    {
        require('connection.php');
        $res = mysqli_query($con,"SELECT * FROM accounts WHERE email= '".$_POST["email"]."'");
        $itr = mysqli_fetch_assoc($res);
        mysqli_free_result($res);
        $password = $itr["password"];
//        $isPassCorrect = password_verify($_POST['password'], $password);
        if(password_verify($_POST['password'], $password)){
            $result = mysqli_query($con,"SELECT * FROM accounts WHERE email='" . $_POST["email"] . "' and password = '".$password."'");
            $row = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
          // $_SESSION["id"] = $row['username'];
           $_SESSION["name"] = $row['name'];
           $_SESSION['success'] = "loggedin";

          // $_SESSION["priv"] = $row['Privilege'];
           //echo $_SESSION["name"];

           header('Location: index.php');
            
            } else {
            echo '<script> alert("Invalid Username or Password!");</script>';
                   }
    }
    
    ?>

</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="post">
				<h2>Login Account Form</h2>
			
				<div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="text" name="email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="login" class="login" value="Login">
                    <a href="signup.php" class="login-mem">I dont have an account</a>
				</div>
			</form>
		</div>
	</div>
	

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<?php include('footer.php'); ?>
</html>