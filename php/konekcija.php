<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rezervacije";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Greska pri konektivanju: " . mysqli_connect_error());
}
?>