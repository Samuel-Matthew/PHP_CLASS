<?php
session_start();
require_once 'database.php'; // this file must define $mysqli

//retrieve form info
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');
$confirm_password = trim($_POST['password'] ?? '');
$errors = [];

//error handling
if ($name === '') {
    $errors[] ="Name is required";
}

if ($email === '') {
    $errors[] ="Email is required";
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[] = "Invalid email format";
}

if ($password === '') {
    $errors[] ="Password is required";
} else if (strlen($password) < 8){
    $errors[] = "Password must be at least 8 characters long";
}

if ($confirm_password !== $password) {
    $errors[] ="Passwords do not match required";
} 

if(!empty($errors)){
    foreach ($errors as $error){
        echo "<p>$error</p>";
    }
    exit;
}

//check if email already exist
$email_check = $mysqli->prepare("SELECT id FROM users WHERE email = ?");
if(!$email_check){
    exit("Prepare failed: " . $mysqli->error);
}

$email_check->bind_param('s', $email);
$email_check->execute();
$email_check->store_result();

if ($email_check->num_rows > 0){
    echo "<p>Email already registered</p>";
    $email_check->close();
    exit();
}

// hash password
$hash = password_hash($password, PASSWORD_DEFAULT);

// insert into the database using prepared statement
$insert = $mysqli->prepare("INSERT INTO users(name, email, password) VALUES(?,?,?)");
if(!$insert){
    exit("Prepare failed: " . $mysqli->error);
}

$insert->bind_param('sss', $name, $email, $hash);
$ok = $insert->execute();

if($ok){
    echo "<p>Registration successful</p>";
} else {
    echo "<p>Registration failed: " . $insert->error . "</p>";
}

$insert->close();
$mysqli->close();
?>
