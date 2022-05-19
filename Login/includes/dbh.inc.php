<?php
/*$dBServername = "10.209.1.138";
//$dBServername = "my138b.sqlserver.se";
$dBUsername = "198526_zm95568";
$dBPassword = "tOulOuse_44";
$dBName = "198526-arnauddb";*/

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
