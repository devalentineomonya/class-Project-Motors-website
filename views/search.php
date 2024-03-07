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
echo '<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementsByClassName("h1top")[0].textContent = "Result For ' . (isset($_GET['s']) ? $_GET['s'] : '') . '";
    document.title = "Result For ' . (isset($_GET['s']) ? $_GET['s'] : '') . '";
});
</script>';
?>


<section class="car-container">
    <div class="title">
        <h1 class="cars-title">Search '<?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?>'</h1>

    </div>
    <div class="row">
        <?php
        $carsPerPage = 12;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $carsPerPage;

        // Check if search parameter is provided
        $search = isset($_GET['s']) ? $_GET['s'] : '';

        // Modify the SQL query to include search parameter
        $stmt = $pdo->prepare("SELECT * FROM cars WHERE (LOWER(Make) LIKE LOWER(:search) OR LOWER(Model) LIKE LOWER(:search) OR LOWER(type) LIKE LOWER(:search)) LIMIT :limit OFFSET :offset");
        $stmt->bindValue(":search", "%$search%");
        $stmt->bindValue(":limit", $carsPerPage, PDO::PARAM_INT);
        $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
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
                                <p class="price">$<?php echo $row['Price']; ?> <span>/day</span></p>
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
                                <source src="../videos/carDemo/<?php echo $row['video_name']; ?>" type="video/mp4">
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
                                <p class="price">$<?php echo $row['Price']; ?></p>
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
                                <source src="../videos/carDemo/<?php echo $row['video_name']; ?>" type="video/mp4">
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
    $totalCarsStmt = $pdo->prepare("SELECT  COUNT(*) AS totalCars FROM cars WHERE (Make LIKE :search OR Model LIKE :search OR type LIKE :search)");
    $totalCarsStmt->bindValue(":search", "%$search%");
    $totalCarsStmt->execute();
    $totalCarsResult = $totalCarsStmt->fetch(PDO::FETCH_ASSOC);
    $totalCars = $totalCarsResult['totalCars'];
    $totalPages = ceil($totalCars / $carsPerPage);
    ?>
    <div class="pagination-row">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    <?php if ($page > 1) : ?>
                        <li><a href="?page=<?php echo ($page - 1); ?>&s=<?php echo $search; ?>">&lt;</a></li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <li <?php if ($i === $page) echo 'class="active"'; ?>><a href="?page=<?php echo $i; ?>&s=<?php echo $search; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                    <?php if ($page < $totalPages) : ?>
                        <li><a href="?page=<?php echo ($page + 1); ?>&s=<?php echo $search; ?>">&gt;</a></li>
                    <?php endif; ?>
                </ul>

            </div>
        </div>
    </div>
    <?php
    ?>
</section>

<?php
include_once "views/partials/footer.php"
?>