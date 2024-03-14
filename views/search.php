<?php
include "views/partials/header.php"
?>
<style>
    .buy-upper {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("../images/siteImages/buy.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<?php
if (!empty($_GET['s'])) {
    echo '<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementsByClassName("h1top")[0].textContent = "Result For ' . $_GET['s'] . '";
    document.title = "Result For ' . $_GET['s'] . '";
});
</script>';
} else {
    echo '<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementsByClassName("h1top")[0].textContent = "Result For ' . ($_GET['type'] && $_GET['category'] ? ($_GET['type'] . " | " . $_GET['category']) : '') . '";
    document.title = "Result For ' . ($_GET['type'] && $_GET['category'] ? ($_GET['type'] . " | " . $_GET['category']) : '') . '";
});
</script>';
}
?>





<section class="car-container">
    <div class="title">
        <h1 class="cars-title">Search '<?php echo (!empty($_GET['s']) ? $_GET['s'] : (!empty($_GET['type']) && !empty($_GET['category']) ? $_GET['type'] . ' | ' . $_GET['category'] : '')); ?>'</h1>

    </div>
    <div class="row">
        <?php
        $carsPerPage = 12;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $carsPerPage;

        // Define search parameters
        $search = isset($_GET['s']) ? $_GET['s'] : '';
        $category = isset($_GET['category']) ? $_GET['category'] : '';
        $type = isset($_GET['type']) ? $_GET['type'] : '';

        // Prepare the base SQL query
        $sql = "SELECT * FROM cars WHERE 1=1";

        // Add conditions based on search parameters
        if (!empty($search)) {
            $sql .= " AND (LOWER(Make) LIKE LOWER(:search) OR LOWER(Model) LIKE LOWER(:search) OR LOWER(Type) LIKE LOWER(:search))";
        }

        if (!empty($category)) {
            // Fetch CategoryID for the given category name
            $categoryStmt = $pdo->prepare("SELECT CategoryID FROM categories WHERE CategoryName = :category");
            $categoryStmt->bindValue(":category", $category);
            $categoryStmt->execute();
            $categoryRow = $categoryStmt->fetch(PDO::FETCH_ASSOC);

            // Check if category exists
            if ($categoryRow !== false) {
                $sql .= " AND CategoryID = :categoryID";

                $categoryID = $categoryRow['CategoryID'];
            } else {
                // Set a default value for $categoryID
                $categoryID = null;
            }
        }else{
             $categoryID = null;
        }


        if (!empty($type)) {
            $sql .= " AND Type = :type";
        }

        // Add limit and offset for pagination
        $sql .= " LIMIT :limit OFFSET :offset";

        // Prepare and execute the statement
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":limit", $carsPerPage, PDO::PARAM_INT);
        $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);

        // Bind search parameters if provided
        if (!empty($search)) {
            $stmt->bindValue(":search", "%$search%");
        }

        // Bind category ID if it's valid
        if (isset($category) && $categoryID !== null) {
            $stmt->bindValue(":categoryID", $categoryID);
        }

        if (!empty($type)) {
            $stmt->bindValue(":type", $type);
        }

        $stmt->execute();


        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($row['Type'] == "hire") {
        ?>
                <div class="car-card">
                    <div class="car-wrap">
                        <div class="car-image">
                            <img src="../images/carsImages/<?php echo $row['Image_name']; ?>" alt="">
                        </div>
                        <div class="text">
                            <h2><a href="#"><?php echo $row['Make']; ?></a></h2>
                            <div class="car-text-d-flex">
                                <span class="cat"><?php echo $row['Model']; ?></span>
                                <p class="price">Ksh<?php echo $row['Price']; ?> <span>/day</span></p>
                            </div>
                            <p class="car-button-d-flex">
                                <?php if (isset($_SESSION['currentUser'])) : ?>
                                    <a class="openCheckBox" data-product-id="<?php echo $row['CarID']; ?>" data-car-cost="<?php echo $row['Price']; ?>" data-action="hire">Hire now</a>
                                <?php else : ?>
                                    <a class="" href="/login">Hire now</a>
                                <?php endif; ?>
                                <button class="view-demo-btn">View Demo</button>
                            </p>
                        </div>
                    </div>
                    <div class="video-overlay">
                        <img class="close-video-btn" src="../images/siteImages/close.png" alt="">
                        <div class="video-content">
                            <video controls autoplay class="video-player">
                                <source src="../videos/<?php echo $row['video_name']; ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="check-overlay">
                        <img class="close-video-btn checkCloseBtn" src="../images/siteImages/close.png" alt="">
                        <div class="booking-content">
                            <div class="img-tick">
                                <img src="../images/siteImages/check-mark.png" alt="">
                            </div>
                            <div class="success-text">
                                <p>Hire request for <?php echo $row['Make'] . " " . $row['Model']; ?> has been received successfully.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="car-card">
                    <div class="car-wrap">
                        <div class="car-image">
                            <img src="../images/carsImages/<?php echo $row['Image_name']; ?>" alt="">
                        </div>
                        <div class="text">
                            <h2><a href="#"><?php echo $row['Make']; ?></a></h2>
                            <div class="car-text-d-flex">
                                <span class="cat"><?php echo $row['Model']; ?></span>
                                <p class="price">Ksh<?php echo $row['Price']; ?></p>
                            </div>
                            <p class="car-button-d-flex">
                                <?php if (isset($_SESSION['currentUser'])) : ?>
                                    <a class="openCheckBox" data-product-id="<?php echo $row['CarID']; ?>" data-car-cost="<?php echo $row['Price']; ?>" data-action="purchase">Buy now</a>

                                <?php else : ?>
                                    <a class="" href="/login">Buy now</a>
                                <?php endif; ?>
                                <button class="view-demo-btn">View Demo</button>
                            </p>
                        </div>
                    </div>
                    <div class="video-overlay">
                        <img class="close-video-btn" src="../images/siteImages/close.png" alt="">
                        <div class="video-content">
                            <video controls autoplay class="video-player">
                                <source src="../videos/<?php echo $row['video_name']; ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="check-overlay">
                        <img class="close-video-btn checkCloseBtn" src="../images/siteImages/close.png" alt="">
                        <div class="booking-content">
                            <div class="img-tick">
                                <img src="../images/siteImages/check-mark.png" alt="">
                            </div>
                            <div class="success-text">
                                <p>Purchase request for <?php echo $row['Make'] . " " . $row['Model']; ?> has been received successfully.</p>
                            </div>
                        </div>
                    </div>
                </div>


        <?php
            }
        }
        if ($stmt->rowCount() == 0) {
            echo '<section class="not-found-section">
            <p class="not-found-text">No Search Result Found</p>
            <button class="go-home-button" onclick="window.location.href = \'/buy\';">Check Cars</button>
        </section>';
        }
        ?>
    </div>
    <?php
    if (!empty($search)) {
        $totalCarsStmt = $pdo->prepare("SELECT COUNT(*) AS totalCars FROM cars WHERE (Make LIKE :search OR Model LIKE :search OR Type LIKE :search)");
        $totalCarsStmt->bindValue(":search", "%$search%");
        $totalCarsStmt->execute();
        $totalCarsResult = $totalCarsStmt->fetch(PDO::FETCH_ASSOC);
        $totalCars = $totalCarsResult['totalCars'];
        $totalPages = ceil($totalCars / $carsPerPage);
    } elseif (!empty($type) && !empty($category)) {
        // Assuming you have fetched the appropriate category ID based on the category name
        // Add condition based on both type and category
        $totalCarsStmt = $pdo->prepare("SELECT COUNT(*) AS totalCars FROM cars WHERE Type = :type AND CategoryID = :categoryID");
        $totalCarsStmt->bindValue(":type", $type);
        $totalCarsStmt->bindValue(":categoryID", $categoryID); // Assuming you have fetched the category ID
        $totalCarsStmt->execute();
        $totalCarsResult = $totalCarsStmt->fetch(PDO::FETCH_ASSOC);
        $totalCars = $totalCarsResult['totalCars'];
        $totalPages = ceil($totalCars / $carsPerPage);
    }
    ?>
    <div class="pagination-row">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    <?php if ($page > 1) : ?>
                        <li><a href="?page=<?php echo ($page - 1); ?><?php echo isset($search) && !empty($search) ? '&s=' . urlencode($search) : ''; ?><?php echo isset($type) && isset($category) ? '&type=' . urlencode($type) . '&category=' . urlencode($category) : ''; ?>">&lt;</a></li>
                    <?php endif; ?>
                    <?php for ($i = max(1, $page - 2); $i <= min($totalPages, $page + 2); $i++) : ?>
                        <li <?php if ($i === $page) echo 'class="active"'; ?>><a href="?page=<?php echo $i; ?><?php echo isset($search) && !empty($search) ? '&s=' . urlencode($search) : ''; ?><?php echo isset($type) && isset($category) ? '&type=' . urlencode($type) . '&category=' . urlencode($category) : ''; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                    <?php if ($page < $totalPages) : ?>
                        <li><a href="?page=<?php echo ($page + 1); ?><?php echo isset($search) && !empty($search) ? '&s=' . urlencode($search) : ''; ?><?php echo isset($type) && isset($category) ? '&type=' . urlencode($type) . '&category=' . urlencode($category) : ''; ?>">&gt;</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>


</section>

<?php
include_once "views/partials/footer.php"
?>