<?php

$valid_password = "your_password";
$input_username = $_POST['username'];
$input_password = $_POST['password'];
if ($input_username === $valid_username && $input_password === $valid_password) {
    echo "Login successful. Welcome, $valid_username!";
} else {
    echo "Login failed. Please check your username and password.";
}
?>
