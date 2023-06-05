<?php include('images.php'); ?>

<?php

// Create a query
$query = 'SELECT photo,id,paint_name FROM proimg';

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
{ if ($record['id']==1){
  $pic1='<img src="'.$record['photo'].'" width="300"><a href="p1.php"</a>';
  $pic1name= '<p><b>'.$record['paint_name'].'<p><b>';
}
 else if ($record['id']==2){
  $pic2='<img src="'.$record['photo'].'" width="300"><a href="p2.php"</a>';
  $pic2name='<p><b>'.$record['paint_name'].'</b></p>';

}
else {
    $pic3='<img src="'.$record['photo'].'" width="250"><a href="p3.php"</a>';
    $pic3name='<p><b>'.$record['paint_name'].'<p><b>';
  }
}
?>       

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"/>
<head>
    <style>
        .main{
            position: absolute;
	        top :50%;
	        left :50%;
	        transform: translate(-50%,-50%);
            justify-content: center;
            align-items: center;
               
        }
        input{
            border: 2px solid dimgrey;
	        height:50px;
	        width: 750px;
	        border-radius: 80px;
	        padding: 0px 10px;
            justify-content: center;   
            font-family:sans-serif;
            font-size: 30px;
        }
        button {
            position: center;
            border-radius : 50px;
            padding:0px 20px;
            border: 2px solid dimgrey;
            font-family : sans-serif;
            font-size: 100px;
            top:60%;
            width: 100px;
            
           
        }
       
        </style>
</head>
<body>



<?php include('link.php'); ?>
<?php include('header.php'); ?>



<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id='VIEW'>
  <div class="w3-content" style="max-width:700px">
  <br>
  <form method="get" action="search.php">
<div class="w3-center .main "><input type="text" name="search_term" placeholder="Search..."><br><br>
<button type="submit">Search</button>
</form>

    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">THE ART GALLERY VIEW</span></h5>
    <div class="w3-panel w3-leftbar w3-light-grey">
    
      <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <?php echo $pic1 ; ?>
      <div class="w3-container w3-white">
        <?php  echo $pic1name ;?>
              </div>
    </div>


    <div class="w3-third w3-container w3-margin-bottom">
     <?php echo $pic2; ?>
      <div class="w3-container w3-white">
      <?php  echo $pic2name ;?>
         </div>
    </div>
    <div class="w3-third w3-container">
    <?php  echo $pic3 ;?>
      
      <div class="w3-container w3-white">
      <?php  echo $pic3name ;?>
              </div>
    </div>
  </div>

    </div>
      </div>
</div>

<?php include('footer.php'); ?>
</body>
</html>
