<?php
$db = "photo_gallery";
$user = "root";
$password = '';
$host = 'localhost';
$conn = new mysqli($host, $user, $password, $db);
if (!$conn) {
    die('connection error' . $conn->connect_error);
}
