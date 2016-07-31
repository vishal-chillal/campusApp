<?php

$servername = 'localhost';
$username = 'root';
$password = 'rohit';
$dbname = 'campus';
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
}
echo 'Connected successfully<br>';

$Rollno = $_POST['rollno'];
$Fname = $_POST['firstname'];
$Lm = $_POST['lastname'];
$Email = $_POST['email'];

echo 'welcome:'.$Fname.'<br>';
echo ' Your last name is:'.$Lm.'<br>';
echo ' Your Roll no is:'.$Rollno.'<br>';
echo ' Your Email is:'.$Email.'<br>';

//inserting values into table
$ins = 'INSERT INTO student_info (roll_no,firstname,lastname,email) VALUES (?,?,?,?)';

$statement = $conn->prepare($ins);
$statement->bind_param('ssss', $Rollno, $Fname, $Lm, $Email);
if ($statement->execute()) {
    echo 'New record created successfully';
} else {
    echo 'Error: '.$ins.'<br>'.$conn->error;
}

$conn->close();
