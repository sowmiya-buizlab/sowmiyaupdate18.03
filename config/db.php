<?php
$conn = new mysqli("localhost", "root", "", "ViSa_school");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>