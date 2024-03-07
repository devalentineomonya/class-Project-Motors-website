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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementsByClassName("h1top")[0].textContent = "Our Cars For Sale";
        document.title = "Simba | Car Sale"
    });
</script>

<section class="car-container">
    <div class="title">
        <h1 class="cars-title">Our Cars For Sale</h1>
    </div>
    <div class="row">
        <?php
        $carsPerPage = 12;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $carsPerPage;


        $type = "sale";
        $stmt = $pdo->prepare("SELECT * FROM cars WHERE type = :type LIMIT :limit OFFSET :offset");
        $stmt->bindValue(":type", $type);
        $stmt->bindValue(":limit", $carsPerPage, PDO::PARAM_INT);
        $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
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
                            <p class="price">$<?php echo $row['Price']; ?> </p>
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
                            This Video is Unavailable for
                            or
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
        ?>
    </div>
    <?php
    $totalCarsStmt = $pdo->prepare("SELECT COUNT(*) AS totalCars FROM cars WHERE type = :type");
    $totalCarsStmt->bindValue(":type", $type);
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
                        <li><a href="?page=<?php echo ($page - 1); ?>">&lt;</a></li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <li <?php if ($i === $page) echo 'class="active"'; ?>><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                    <?php if ($page < $totalPages) : ?>
                        <li><a href="?page=<?php echo ($page + 1); ?>">&gt;</a></li>
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