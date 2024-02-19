<?php
session_start();
include_once '../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];


    function loginUser($email, $password)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM customers WHERE Email = ?");
        if ($stmt->execute([$email])) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user && password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return false;
    }


    $authenticatedUser = loginUser($email, $password);

    if ($authenticatedUser) {
        $_SESSION["currentUser"] = $authenticatedUser['CustomerID'];
        header('Location: /home');
        exit;
    } else {
        $_SESSION['authError'] = "Wrong Username Or Password!";
        header('Location: /login');
        exit; 
    }
} else {
    header('Location: /login');
    exit;
}
