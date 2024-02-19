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

    // Update the 'Type' field for cars with IDs between 151 and 210
    $stmt = $pdo->prepare("UPDATE Cars SET Type = ? WHERE CarID = ?");
    
    // Update 'Type' for cars with IDs between 151 and 210
    for ($carID = 151; $carID <= 210; $carID++) {
        // Randomly choose between "sale" and "hire"
        $type = (rand(0, 1) == 0) ? "sale" : "hire"; 
        
        // Execute the prepared statement
        $stmt->execute([$type, $carID]);
        
        echo "Type updated successfully for Car ID $carID.<br>";
    }
    
} catch (PDOException $e) {
    // Display error message
    echo "Update failed: " . $e->getMessage();
}
?>
