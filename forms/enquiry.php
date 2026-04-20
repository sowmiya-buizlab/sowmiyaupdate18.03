<?php
include '../config/db.php';

if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO enquiries (name,email,phone,message)
            VALUES ('$name','$email','$phone','$message')";

    $conn->query($sql);
}
?>