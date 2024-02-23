<?php
session_start();
include_once '../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add_purchase_record') {
   
    $customerID = $_SESSION['currentUser']; 
    $carId = $_POST['CarID'];
    $saleAmount = $_POST['CarCost'];
    $saleDate = date('Y-m-d H:i:s');

    $stmt = $pdo->prepare("INSERT INTO carsales (CarID, CustomerID, SaleAmount, SaleDate) VALUES (?, ?, ?, ?)");
    $stmt->execute([$carId, $customerID, $saleAmount, $saleDate]);
   

} else {
    // Output error message to JavaScript console if action is not 'add_purchase_record'
    echo "<script>console.log('Invalid action or request method');</script>"; 
}
  

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add_hire_record') {

    $customerID = $_SESSION['currentUser']; 
    $carId = $_POST['CarID'];
    $saleAmount = $_POST['CarCost'];
    $saleDate = date('Y-m-d H:i:s');
 
    $stmt = $pdo->prepare("INSERT INTO 	carloans (CarID, CustomerID, LoanAmount, hireDate) VALUES (?, ?, ?, ?)");
    $stmt->execute([$carId, $customerID, $saleAmount, $saleDate]);

} else {
    // Output error message to JavaScript console if action is not 'add_purchase_record'
    echo "<script>console.log('Invalid action or request method');</script>"; 
}
?>





