<?php

$host = "localhost"; 
$dbname = "simbamotordb";
$username = "root";
$password = "";

$videos = ["car-1.mp4", "car-2.mp4", "car-3.mp4", "car-4.mp4", "car-5.mp4"];
try {
    // Establish the database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Update the 'Type' field and insert video name for cars with IDs between 151 and 210
    $stmt = $pdo->prepare("UPDATE Cars SET video_name = ? WHERE CarID = ?");
    
    // Update 'Type' for cars with IDs between 151 and 175
    for ($carID = 151; $carID <= 175; $carID++) {
     
        
        // Randomly select a video from the $videos array
        $videoIndex = array_rand($videos);
        $videoName = $videos[$videoIndex];
        
        // Execute the prepared statement
        $stmt->execute([$videoName, $carID]);
        
        echo "Type and video name updated successfully for Car ID $carID.<br>";
    }
    
} catch (PDOException $e) {
    // Display error message
    echo "Update failed: " . $e->getMessage();
}
?>
