<?php
session_start();
include_once '../config/connection.php';
include_once "../function/upload.php";


function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}


function emailExists($email)
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM customers WHERE Email = ?");
    $stmt->execute([$email]);
    return $stmt->fetchColumn() > 0;
}

function GetUserID($email)
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT CustomerID FROM customers WHERE Email = ?");
    $stmt->execute([$email]);
    $result = $stmt->fetchColumn();
    return $result ? $result : null;
}


function registerUser($name, $email, $phone, $nationality, $image, $password)
{
    global $pdo;

    if (emailExists($email)) {
        return false;
    }

    $uploadResult = uploadFile($image);
    if (is_string($uploadResult)) {
        $_SESSION['authError'] = $uploadResult;
        header('Location: /login');
        exit;
    } else {
        $image = $uploadResult["name"];
    }

    $hashedPassword = hashPassword($password);
    $stmt = $pdo->prepare("INSERT INTO customers (Name, Email, Phone, Image, Nationality, Password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $image, $nationality, $hashedPassword]);
    return $stmt->rowCount() > 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['name'])) {
        $_SESSION['authError'] = "Name field is missing.";
        header('Location: /login');
        exit;
    } elseif (empty($_POST['email'])) {
        $_SESSION['authError'] = "Email field is missing.";
        header('Location: /login');
        exit;
    } elseif (empty($_POST['phone'])) {
        $_SESSION['authError'] = "Phone field is missing.";
        header('Location: /login');
        exit;
    } elseif (empty($_POST['password'])) {
        $_SESSION['authError'] = "Password field is missing.";
        header('Location: /login');
        exit;
    } elseif (empty($_POST['nationality'])) {
        $_SESSION['authError'] = "Nationality field is missing.";
        header('Location: /login');
        exit;
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $nationality = $_POST['nationality'];
    $image = $_FILES['userid'];

    if (registerUser($name, $email, $phone, $nationality, $image, $password)) {
        if ($userID = GetUserID($email)) {
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
