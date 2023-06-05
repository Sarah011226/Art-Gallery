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
</style>
</head>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="index.php" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="index.php#VIEW" class="w3-button w3-block w3-black">VIEW GALLERY</a>
    </div>
   
    
 <div class="w3-col s3" >
      <?php 
       session_start();
    if (isset($_SESSION['success'])){
    echo '<a href="logout.php" class="w3-button w3-block w3-black">';
    echo $_SESSION['name'];
    echo ' | LOGOUT? </a>'; 
    }
        else {
     echo '<a href="login.php" class="w3-button w3-block w3-black">LOGIN/SIGNUP </a>'; }
          ?>
       
    </div>    
    <div class="w3-col s3">
      <a href="indexG.php" class="w3-button w3-block w3-black">COMMENT</a>
    </div>
  </div>
</div>
