<?php

$host = "localhost";
$dbname = "simbamotordb";
$username = "root";
$password = "";

try {
    // Establish the database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $startID = 151;
    $endID = 210;

    try {
        // Prepare the SQL update query
        $stmt = $pdo->prepare("UPDATE cars SET Price = Price / 100 WHERE CarID BETWEEN ? AND ? AND Type = 'hire'");

        // Bind the parameters and execute the query
        $stmt->execute([$startID, $endID]);

        // Output success message
        echo "Prices updated successfully.";
    } catch (PDOException $e) {
        // Display error message if query fails
        echo "Error updating prices: " . $e->getMessage();
    }
} catch (PDOException $e) {
    // Display error message
    echo "Update failed: " . $e->getMessage();
}
