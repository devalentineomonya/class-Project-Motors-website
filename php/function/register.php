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

function GetUserID($email) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT CustomerID FROM customers WHERE Email = ?");
    $stmt->execute([$email]);
    $result = $stmt->fetchColumn();
    return $result ? $result : null; 
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
        if($userID = GetUserID($email)){
            $_SESSION["currentUser"] = $userID;
            header('Location: /home');
        } else {
            header('Location: /login');
        }
        
        
        exit;
    } else {
        $_SESSION['authError'] = "An Error Occurred On Registration.";
        header('Location: /login');
        exit;
    }
}
?>

