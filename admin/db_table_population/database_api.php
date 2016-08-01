<?php
// function to connect database
function connect_database($crt)
{
    $servername = 'localhost';
    $username = 'root';
    $password = 's';
    $dbname = 'campus1';

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die('Connection failed: '.$conn->connect_error);
    } else {
        echo "Connected successfully\n";
    }

    $campus1 = 'use campus1;';

    if ($conn->query($campus1) === true) {
        echo "query fired successfully\n";
    } else {
        echo 'Error creting table: '.$conn->error;
    }

    if ($conn->query($crt) === true) {
        echo "query success\n";
    } else {
        echo 'query error  :  '.$conn->error."\n";
    }
}
