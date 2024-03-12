<?php
session_start();
include_once '../php/config/connection.php';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.o'>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <div class="navigation">
            <a href='index.php?page=hired'>Hired Cars</a>
            <a href='index.php?page=bought'>Bought Cars</a>
            <a href='index.php?page=customers'>Customers</a>
            <a href='index.php?page=members'>Members</a>

        </div>
        <div class='content'>
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'hired';

            if ($page === 'hired') {
                include 'hired.php';
            } elseif ($page === 'bought') {
                include 'bought.php';
            } elseif ($page === 'customers') {
                include 'customers.php';
            } elseif ($page === 'members') {
                include 'members.php';
            } elseif ($page === 'addmember') {
                include 'addmember.php';
            } else {
                echo '<p>Invalid page</p>';
            }
            ?>
        </div>
    </div>
    <script>
        function approveCar(actionId, action) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../php/function/process_action.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Handle response here if needed
                    console.log(xhr.responseText);
                    // Reload the page to reflect the changes
                    location.reload();
                }
            };
            xhr.send("action=approve_" + action + "&ActionID=" + actionId);
        }
    </script>

    </script>
</body>

</html>