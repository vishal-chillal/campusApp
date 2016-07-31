<!-- This file takes csv file as command line argument and
	 populates a student_infos table for same.  -->

<?php
include 'database_api.php';

$csvFile = $argv[1];
$file = fopen($csvFile, 'r');
$records = array();
$c = 1;
while (!feof($file)) {
    $line = fgetcsv($file);
    $records[] = $line[0];
}

for ($j = 1; $j < count($records); ++$j) {
    $token = $records[$j];
    $crt = 'insert into student_infos values(';
    $line = $token[0];
    $line = explode(' ', $token);
    $crt .= current($line).',';
    echo "\n";
    for ($i = 1; $i < count($line) - $c; ++$i) {
        $crt .= "'".$line[$i]."',";
    }
    $crt .= "'".end($line)."'";
    $crt .= ');';
    echo $crt;
    echo "\n";
}
connect_database($crt);
