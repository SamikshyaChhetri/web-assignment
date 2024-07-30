<?php
session_start();

$valid_username = 'user';
$valid_password = 'password';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username;
    header('Location: welcome.php');
    exit;
} else {
    header('Location: lab_3.5.php?error=1');
    exit;
}
