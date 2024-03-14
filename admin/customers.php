<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['del_cust'])) {

    $CustomerID = $_POST['cust_id'];

    $stmt = $pdo->prepare("SELECT * FROM carloans WHERE CustomerID = ?");
    $stmt->execute([$CustomerID]);
    $carLoan = $stmt->fetch();

    if ($carLoan) {
        $_SESSION["Delerror"] = "You can't delete this customer. They have a car loan.";
        header('Location: index.php?page=customers');
        exit;
    }
    $stmt = $pdo->prepare("SELECT * FROM carsales WHERE CustomerID = ?");
    $stmt->execute([$CustomerID]);
    $carSale = $stmt->fetch();

    if ($carSale) {
        $_SESSION["Delerror"] = "You can't delete this customer. They have a car Purchase Record.";
        header('Location: index.php?page=customers');
        exit;
    }

    if (isset($_SESSION["currentUser"]) && $_SESSION["currentUser"] == $CustomerID) {
        unset($_SESSION["currentUser"]);
    }


    if (isset($_POST['image'])) {
        $uploadDir = dirname(__DIR__, 1) . '/images/uploads/';
        $imageFilePath = $uploadDir . $_POST['image'];
        if (file_exists($imageFilePath)) {
            unlink($imageFilePath);
        }
    }

    $stmt = $pdo->prepare("DELETE FROM customers WHERE CustomerID = ?");
    $stmt->execute([$CustomerID]);
}

$stmt = $pdo->prepare("SELECT * FROM customers");
$stmt->execute();

?>

<h2>List of Customers</h2>
<?php
if (isset($_SESSION["Delerror"])) {
    echo '<div class="error-message">' . $_SESSION["Delerror"] . '</div>';
    unset($_SESSION["Delerror"]);
}
?>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Phone No</th>
            <th>Customer Nationality</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $number = 1;

        while ($customerDetails = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $number++; ?></td>
                <td><?php echo $customerDetails['Name']; ?></td>
                <td><?php echo $customerDetails['Email']; ?></td>
                <td><?php echo $customerDetails['Phone']; ?></td>
                <td><?php echo $customerDetails['nationality']; ?></td>
                <td class="buttons">

                    <a href="mailto:<?php echo $customerDetails['Email'] ?>" class="accepted">Contact</a>
                    <form method="post" onsubmit="return confirm('Are you sure you want to delete this member?')">
                        <input hidden name="cust_id" value="<?php echo $customerDetails['CustomerID']; ?>">
                        <input hidden name="image" value="<?php echo $customerDetails['image']; ?>">
                        <button type="submit" name="del_cust" class="reject">Delete</button>
                    </form>
                </td>
            </tr>

        <?php
        }
        ?>

    </tbody>
</table>