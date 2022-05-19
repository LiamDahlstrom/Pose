<?php
//$dBServername = "10.209.1.138";
$dBServername = "localhost:8112";
$dBUsername = "root";
$dBPassword = "";
$dBName = "pose_db";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
