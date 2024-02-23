<?php
// Include database connection file
include_once '../php/config/connection.php';

// Fetch data from the database
$stmt = $pdo->prepare("SELECT * FROM carsales");
$stmt->execute();
$hiredCars = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h2>List of Bought Cars</h2>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Car Name</th>
            <th>Customer Name</th>
            <th>Amount Per Day</th>
            <th>Sale Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $number = 1; // Initialize the number variable outside the loop
        foreach ($hiredCars as $car) :
            // Fetch car details
            $getCar = $pdo->prepare("SELECT * FROM cars WHERE CarID = :carID");
            $getCar->execute(['carID' => $car['CarID']]);
            $carDetails = $getCar->fetch(PDO::FETCH_ASSOC);

            // Fetch customer details
            $getCustomer = $pdo->prepare("SELECT * FROM customers WHERE CustomerID = :customerID");
            $getCustomer->execute(['customerID' => $car['CustomerID']]);
            $customerDetails = $getCustomer->fetch(PDO::FETCH_ASSOC);

            $dateString = $car['SaleDate'];
            $date = new DateTime($dateString);
            $formattedDate = $date->format('F j, Y H:i:s');
        ?>
            <tr>
                <td><?php echo $number++; ?></td> <!-- Display and increment the number -->
                <td><?php echo $carDetails['Make']; ?></td>
                <td><?php echo $customerDetails['Name']; ?></td>
                <td>$<?php echo $carDetails['Price']; ?></td>
                <td><?php echo $formattedDate ?></td>
                <td>
                    <button class="accept">Accept</button>
                    <button class="reject">Reject</button>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>