<?php

// Connect to the MySQL database
$connect = mysqli_connect('localhost', 'ddd', '123', 'ArGalla');
// If the connection did not work, display an error message
if (!$connect) 
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

?>
