<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_id"])) {
    // Retrieve the member ID to delete
    $delete_id = $_POST["delete_id"];

    // Fetch the member details including the image path
    $stmt_select_image = $pdo->prepare("SELECT MemberImg FROM devsteam WHERE MemberID = ?");
    $stmt_select_image->execute([$delete_id]);
    $member_image = $stmt_select_image->fetchColumn();

    // Prepare and execute the delete query
    $delete_stmt = $pdo->prepare("DELETE FROM devsteam WHERE MemberID = ?");
    $delete_stmt->execute([$delete_id]);

    // Check if the deletion was successful
    if ($delete_stmt->rowCount() > 0) {
        // Unlink the image file from the server
        if (file_exists($member_image)) {
            unlink($member_image);
        }

        // Redirect back to the same page to refresh the member list
        header("Location:index.php?page=members");
        exit;
    } else {
        $_SESSION["Delerror"] = "Failed to delete member.";
    }
}

$stmt = $pdo->prepare("SELECT * FROM devsteam");
$stmt->execute();
?>

<h2>List of Group Members</h2>
<a href='index.php?page=addmember' class="add-member-btn">Add Members</a>
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
            <th></th>
            <th>Member Name</th>
            <th>Member Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $number = 1;

        while ($memberDetails = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $number++; ?></td>
                <td><img src="<?php echo $memberDetails['MemberImg']; ?>" class="member-img"></td>
                <td><?php echo $memberDetails['MemberName']; ?></td>
                <td><?php echo $memberDetails['MemberRole']; ?></td>
                <td class="buttons member-buttons">
                    <form method="post" onsubmit="return confirm('Are you sure you want to delete this member?')">
                        <input type="hidden" name="delete_id" value="<?php echo $memberDetails['MemberID']; ?>">
                        <button type="submit" class="reject" name="delete_btn">Delete</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
