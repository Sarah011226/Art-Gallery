<html>
<head>
<title>ART GALLERY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url('background.jpg');
  min-height: 75%;
}

.menu {
  display: none;
}

.column {
  float: left;
  width: 30%;
  padding: 5px
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>
<!-- Links (sit on top) -->
<?php include('link.php'); ?>
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">THE<br>ART<br> GALLERY</span>
  </div>
  </header>
<h1 style="color:black;text-align:center;"> welcome to Bidding page </h1>
<h3 style="color:black;text-align:center;"> these are the painting available for Bidding </h3>
<div class="row">
  <div class="column">
	<img src="pic1.png" width="400" 
     height="500" />
	<form name="bid-form1" method="post" action="contact1.php">
	<p> place your highest ped </p>
	<input type="number"  id="ped" name="ped" oninput="validity.valid||(value='');">
	<p> place your phonenumber </p>
	<input type="number"  id="phonenum" name="phonenum" oninput="validity.valid||(value='');">
	<input type="submit" value="Submit">
	</form>
  </div>
  <div class="column">
	<img src="pic2.jpg"  width="400" 
     height="500"/>
	<form name="bid-form2" method="post" action="contact2.php">
	<p> place your highest ped </p>
	<input type="number"  id="ped" name="ped" oninput="validity.valid||(value='');">
	<p> place your phonenumber </p>
	<input type="number"  id="phonenum" name="phonenum" oninput="validity.valid||(value='');">
	<input type="submit" value="Submit">
	</form>
  </div>
  <div class="column">
	<img src="pic3.jpeg" width="400" 
     height="500" />
	<form name="bid-form3" method="post" action="contact3.php">
	<p> place your highest ped </p>
	<input type="number"  id="ped" name="ped" oninput="validity.valid||(value='');">
	<p> place your phonenumber </p>
	<input type="number"  id="phonenum" name="phonenum" oninput="validity.valid||(value='');">
	<input type="submit" value="Submit">
	</form>
  </div>
</div>
</body>
</html>
