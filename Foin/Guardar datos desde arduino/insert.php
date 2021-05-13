<?php

require_once ('conn.php');

$dispositivo_id = $_POST['devices_id'];
$amps = $_POST['amps'];
$watts = $_POST['watts'];
$volt = $_POST['volt'];

$sql = "INSERT INTO consumptions (devices_id, amps, watts, volt)
VALUES ('$dispositivo_id', '$amps','$watts','$volt')";

if ($conn->query($sql) === true) {
    echo "Datos registrados";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
