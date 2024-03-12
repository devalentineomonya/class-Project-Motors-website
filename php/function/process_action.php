<?php
session_start();
include_once '../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        
        if ($action === 'add_purchase_record' || $action === 'add_hire_record') {
            $customerID = $_SESSION['currentUser']; 
            $carId = $_POST['CarID'];
            $saleAmount = $_POST['CarCost'];
            $saleDate = date('Y-m-d H:i:s');
            $status = "Pending";

            if ($action === 'add_purchase_record') {
                $stmt = $pdo->prepare("INSERT INTO carsales (CarID, CustomerID, Status, SaleAmount, SaleDate) VALUES (?, ?, ?, ?, ?)");
            } elseif ($action === 'add_hire_record') {
                $stmt = $pdo->prepare("INSERT INTO carloans (CarID, CustomerID, Status, LoanAmount, hireDate) VALUES (?, ?, ?, ?, ?)");
            }
            
            $stmt->execute([$carId, $customerID, $status, $saleAmount, $saleDate]);
            
            // Send response back
            echo "Record added successfully.";
        } elseif ($action === 'approve_purchase' || $action === 'approve_hire') {
            $ActionID = $_POST['ActionID'];
            $status = "Approved";
            
            if ($action === 'approve_purchase') {
                $stmt = $pdo->prepare("UPDATE carsales SET Status = ? WHERE SaleID = ?");
            } elseif ($action === 'approve_hire') {
                $stmt = $pdo->prepare("UPDATE carloans SET Status = ? WHERE LoanID = ?");
            }
            
            $stmt->execute([$status, $ActionID]);
            
            // Send response back
            echo "Car status updated successfully.";
        } else {
            echo "Invalid action.";
        }
    } else {
        echo "Action parameter is missing.";
    }
} else {
    echo "Invalid request method.";
}
?>
