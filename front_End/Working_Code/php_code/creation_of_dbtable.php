<?php

$servername = "localhost";
$username = "root";
$password = 'rohit';
$dbname="campus";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully<br>"; 


//creating table in database;
//$crt="CREATE TABLE student_info (
//roll_no int(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50)
//)";

//if ($conn->query($crt) === TRUE) {
//    echo "Table student info  created successfully";
//} else {
  //  echo "Error creating table: " . $conn->error;
//}

?>