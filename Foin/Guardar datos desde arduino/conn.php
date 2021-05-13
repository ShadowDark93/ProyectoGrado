<?php
$servername = "smartandcomputer.co";
$username = "sintrau1_iot";
$password = "@10t.UCC.1b4gu3";
$dbname = "sintrau1_iot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
