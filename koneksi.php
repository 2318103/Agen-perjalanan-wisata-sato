<?php
// Database configuration
$servername = "localhost";
$username = "root"; // default username for phpMyAdmin
$password = ""; // default password for phpMyAdmin
$dbname = "db_wisata"; // replace with your database name

// Create connection
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>
