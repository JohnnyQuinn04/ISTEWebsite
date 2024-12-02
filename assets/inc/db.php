<?php
$host = 'ist-solace.main.ad.rit.edu';
$username = 'iste240t06';
$password = 'Ovation3#holocephali';
$dbname = 'iste240t06';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
