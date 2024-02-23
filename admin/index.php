<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <div class="navigation">
            <a href="index.php?page=hired">Hired Cars</a>
            <a href="index.php?page=bought">Bought Cars</a>
        </div>
        <div class="content">
            <?php
            // Include necessary files and initialize database connection
            
            // Determine which page to display based on the URL parameter
            $page = isset($_GET['page']) ? $_GET['page'] : 'hired';
            
            // Include the corresponding page based on the parameter value
            if ($page === 'hired') {
                include 'hired.php';
            } elseif ($page === 'bought') {
                include 'bought.php';
            } else {
                echo "<p>Invalid page</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>