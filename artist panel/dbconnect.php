<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="finalproject";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$db = mysqli_select_db($conn,$dbname);
?>