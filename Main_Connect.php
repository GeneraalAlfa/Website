<?php
$servername = "localhost";
$username = "pxleai1q_11702274";
$password = "GAPzaPW4qHTN";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $username);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
?>