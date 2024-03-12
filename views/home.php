<?php
include "views/partials/header.php"
?>
<style>
    .home-upper {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("../images/siteImages/hero-image.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementsByClassName("h1top")[0].textContent = "Simba Motors";
        document.title = "Welcome To Simba Motors"
    });
</script>




<section class="car-booking-section">
    <div class="middle-section">
        <h1 class="filter-title">Choose To Filter</h1>
    </div>
    <div class="container">
        <div class="flex-container">
            <div class="image-container">
                <img src="../images/siteImages/Proton-SAGA-Passanger-768x559.jpg" alt="Car Image">
            </div>
            <div class="form-container">

                <form class="booking-form" action="/search" method="get">
                    <div class="form-group">
                        <label for="booking-type">Choice Type</label>
                        <select id="booking-type" name="type" required>
                            <option value="hire">Hire</option>
                            <option value="sale">Sale</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="booking-date">Date</label>
                        <input type="date" id="booking-date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="car-category">Car Category</label>
                        <select id="car-category" name="category" required>
                            <?php

                            $stmt = $pdo->prepare("SELECT* FROM categories");
                            $stmt->execute();
                            
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?php echo $row['CategoryName']; ?>"><?php echo $row['CategoryName']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration (if for hire)</label>
                        <input type="number" id="duration" name="duration" min="1" required>
                    </div>
                    <button type="submit" class="btn">Submit Now</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="middle-section">
        <h1>Our Motor Business</h1>
        <div class="category-section-container swiper-container">
            <div class="swiper-wrapper">
                <?php
                $carsPerPage = 12;
                $stmt = $pdo->prepare("SELECT * FROM cars ORDER BY RAND() LIMIT :limit");
                $stmt->bindValue(":limit", $carsPerPage, PDO::PARAM_INT);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="swiper-slide motor-category">
                        <img src="../images/carsImages/<?php echo $row['Image_name']; ?>" alt="">
                        <h3><?php echo $row['Make']; ?></h3>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>

</section>


<section class="location-distribution">
    <div class="left-section">
        <h1>Distribution Network</h1>
        <div class="branches-list-container">
            <div class="branches-left">
                <h2>Branch Network</h2>
                <ul class="branches-list">
                    <li>Nairobi</li>
                    <li>Mombasa</li>
                    <li>Kisumu</li>
                    <li>Kisii</li>
                    <li>Narok</li>
                    <li>Nyeri</li>
                </ul>
            </div>
            <div class="branches-right">
                <h2>Dealer Network</h2>
                <ul class="branches-list">
                    <li>Nairobi</li>
                    <li>Nakuru</li>
                    <li>Eldoret</li>
                    <li>Nanyuki</li>
                    <li>Marsabit</li>
                    <li>Meru</li>
                    <li>Kericho</li>
                    <li>Thika</li>
                    <li>Machakos</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="right-section">
        <div class="branches-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.364608379728!2d36.79972892839004!3d-1.2681032269146408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f18222ae24c19%3A0x8d5b8d0fead27cb1!2sSimba%20Corp%20Head%20Office!5e0!3m2!1sen!2ske!4v1643468836287!5m2!1sen!2ske" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</section>
<section class="counter-section">
    <div class="counter-container">
        <div class="counter-item">
            <img src="../images/siteImages/hand-shake.png" alt="">
            <h2 class="counter-name">Customers Served</h2>
            <p class="counter-value">5000</p>
        </div>
        <div class="counter-item">
            <img src="../images/siteImages/car.png" alt="">
            <h2 class="counter-name">Cars Available</h2>
            <p class="counter-value">200</p>
        </div>
        <div class="counter-item">
            <img src="../images/siteImages/smile.png" alt="">
            <h2 class="counter-name">Happy Clients</h2>
            <p class="counter-value">1500</p>
        </div>
        <div class="counter-item">
            <img src="../images/siteImages/clock.png" alt="">
            <h2 class="counter-name">Years of Experience</h2>
            <p class="counter-value">10</p>
        </div>
    </div>
</section>
<?php
include_once "views/partials/footer.php"
?>