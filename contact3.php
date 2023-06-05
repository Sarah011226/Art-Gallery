<?php
require('connection.php');
require('webtrial.php');

if(isset($_SESSION["name"]))
{
$db = mysqli_connect('localhost', 'ddd', '123','ArGalla');
$ped = $_POST['ped'];
$phonenum = $_POST['phonenum'];
//$sql = "INSERT INTO 'bidding' ('uemail', 'price', 'paintingID') VALUES ('chats', '.$ped', '1');"

//$rs = mysqli_query($con, $sql);


$insert = mysqli_query($db,"INSERT INTO `bidding`(`phonenum`,`price`, `paintingID`) VALUES ('$phonenum','$ped','3')");

    if(!$insert)
    {
       // echo mysqli_error();
        echo"<script>alert('you must be logged in first')</script>";

        
    }
    else
    {
        echo"<script>alert('Records added successfully.')</script>";
    }


mysqli_close($db);
}
else {
echo"<script>alert('you must be logged in first')</script>";
}

?>