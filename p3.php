<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>view</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
    
<?php include('link.php'); ?>
<?php include('header.php'); ?>
<?php include('images.php'); ?>
<?php

// Create a query
$query = 'SELECT * FROM proimg WHERE id =3';

// Execute the query
$result = mysqli_query($connect, $query);

// If there is no result, display an error message
if (!$result)
{
	echo 'Error Message: ' . mysqli_error($connect) . '<br>';
	exit;
}

// Display the number of recirds found
//echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';

// Loop through the records found
while ($record = mysqli_fetch_assoc($result))
{

	// Output the record using if statements and echo
    $pname= ''.$record['paint_name'].'';
    $ph='<img src="'.$record['photo'].'" width="550" height="400">';
	$artname= ''.$record['artist_name'].'';
	$decs=''.$record['description'].'';
	$bed= ''.$record['bedding']. '$ ';
}

?> 
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail">
				<h2> <?php echo $pname; ?> </h2>

				<div class="form-row">
					<?php echo $ph; ?>
										
				</div>
				<br><br>
				<div class="form-row">
					<h2><?php echo $artname; ?></h2>
										
				</div>
				<div class="form-row">
					<label for="team"><?php echo $decs; ?></label>
										
				</div>
				<div class="form-row">
					<label for="team"><?php echo $bed; ?></label>					
				</div>
				<div class="form-row">
                &nbsp;<a href="webtrial.php" >bedding</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="indexG.php" >comment</a>
                </div>
			</form>
		</div>
	</div>
	

</body>
<?php include('footer.php'); ?>
</html>