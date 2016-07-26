<?php

$servername = "localhost";
$username = "root";
$password = 's';
$dbname="campus1";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
echo "Connected successfully<br>"; 
}

$drp="drop database $dbname";
if ($conn->query($drp) === TRUE) {
    echo "Database dropped successfully";
} else {
    echo "Error droping database: " . $conn->error;
}

// Create database
$sql = "CREATE DATABASE campus1";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>"; 


//creting table in database;
$crt="CREATE TABLE student_infos (
roll_no int(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if ($conn->query($crt) === TRUE) {
    echo "Tble student info  created successfully";
} else {
    echo "Error creting table: " . $conn->error;
}

$crt="CREATE TABLE teacher_infos (
id int(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if ($conn->query($crt) === TRUE) {
    echo "Tble student info  created successfully";
} else {
    echo "Error creting table: " . $conn->error;
}

$conn->close();
?>
