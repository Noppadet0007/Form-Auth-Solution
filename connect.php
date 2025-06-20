<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'myapp';
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " .
        mysqil_connect_error());
}