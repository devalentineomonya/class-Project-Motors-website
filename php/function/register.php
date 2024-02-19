<?php
session_start();
include_once '../config/connection.php';

function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Function to check if a user with the given email already exists
function emailExists($email) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM customers WHERE Email = ?");
    $stmt->execute([$email]);
    return $stmt->fetchColumn() > 0;
}


function registerUser($name, $email, $phone, $password) {
    global $pdo;
    
    if (emailExists($email)) {
        return false;
    }

    $hashedPassword = hashPassword($password);
    $stmt = $pdo->prepare("INSERT INTO customers (Name, Email, Phone, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $hashedPassword]);
    return $stmt->rowCount() > 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if (registerUser($name, $email, $phone, $password)) {
        $_SESSION["currentUser"] = $name;
        header('Location: /home');
        exit;
    } else {
        $_SESSION['authError'] = "An Error Occurred On Registration.";
        header('Location: /login');
        exit;
    }
}
?>

