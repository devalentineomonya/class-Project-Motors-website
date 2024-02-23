<?php
session_start();
include_once 'php/config/connection.php';

    $customerID = 2; 
    $carId =151;
    $saleAmount = 1300;
    $saleDate = date('Y-m-d H:i:s');


    $stmt = $pdo->prepare("INSERT INTO carsales (CarID, CustomerID, SaleAmount, SaleDate) VALUES (?, ?, ?, ?)");
    $stmt->execute([$carId, $customerID, $saleAmount, $saleDate]);

    // Output success message to JavaScript console
    echo 'Purchase record with CarID $carId added successfully';
