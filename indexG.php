<?php
	include 'connection.php';

	if (isset($_POST['post_comment'])) {

		// Sanitize and validate name input
		if (empty($_POST['name'])) {
			echo '<script>alert("Name is required")</script>';
			exit();
		} else {
                        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				echo '<script>alert("Only letters and white space are allowed")</script>';
				exit();
			}
                    
		}

		// Sanitize and validate message input
		if (empty($_POST['message'])) {
			echo '<script>alert("Write your comment first!")</script>';
			exit();
		} else {
			$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
                        if (!preg_match("/^[a-zA-Z ]*$/",$message)) {
				echo '<script>alert("Only letters and white space are allowed")</script>';
				exit();
			}
             
		}
		
		// Prepared statement to prevent SQL injection
		$stmt = $con->prepare("INSERT INTO comments (name, message) VALUES (?, ?)");
		$stmt->bind_param("ss", $name, $message);
		
		if ($stmt->execute() === TRUE) {
		 echo '<script>alert("Thanks! your comment received")</script>';
		} else {
		  echo "Error: " . $stmt->error;
		}
		$stmt->close();
		$con->close();
	}
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comment Page | Art gallery</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/style.css">

<?php include('link.php'); ?>
<?php include('header.php'); ?>	

</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<div class="wrapper">
				<form action="" method="post" class="form-detail">
		          <h2>Users Comments Form</h2>
			      <div class="form-row">
			        <input type="text" class="input-text" name="name" placeholder="Please enter your name">
		          </div>
			      <div class="form-row">
			        <textarea name="message" cols="59" rows="10" class="input-text" placeholder="Write your comment here..." ></textarea>
			      <br>
		          </div>
		          <div class="form-row-last">
			        <button onclick="myFun()" type="submit" class="register" name="post_comment">Post Comment</button>

		          </div>
		        </form>
		    </div>
	    </div>
	</div>
</body>
<?php include('footer.php'); ?>
</html>