<?php
$servername = "localhost";
$username = "root";
$password = "mk41(nN(Qd.P)5wX";
$dbname = "project_spice_kitchen";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo 'connected';
?>
