<?php
$hostname = 'localhost';
$dbname = 'student_db';
$username = 'root';
$password ='vinniastrie!7';

// $conn = mysqli_connect($hostname, $dbname, $username, $password);

$conn = new mysqli($hostname, $username, $password, $dbname,);
if(!$conn){ 
      die(mysqli_error($conn));  
    }
?>