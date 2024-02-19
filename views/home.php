<?php
include "views/partials/header.php"
?>
<style>
    .home-upper {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("../images/siteImages/hero-image.jpeg");
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


<section>
    <div class="middle-section">
        <h1>Our Motor Business</h1>
        <p>Simba Corp is the authorized distributor for some of the world’s recognized Motor brands in the
            commercial,
            passenger, and agricultural sectors.</p>

        <p>We don’t just sell cars, but we also offer a complete tailor-made motoring package that includes
            after-sales
            service and in-house financing. All this is supplemented by world-class customer experience.</p>


        <div class="category-section-container">
            <div class="motor-category">
                <img src="../images/siteImages/truck.png" alt="">
                <h3>COMMERCIAL VEHICLES</h3>
            </div>
            <div class="motor-category">
                <img src="../images/siteImages/person.png" alt="">
                <h3>PASSENGER VEHICLES</h3>
            </div>
            <div class="motor-category">
                <img src="../images/siteImages/tractor.png" alt="">
                <h3>AGRICULTURE</h3>
            </div>
            <div class="motor-category">
                <img src="../images/siteImages/car.png" alt="">
                <h3>OTHER BUSINESS</h3>
            </div>
        </div>
    </div>

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
    <section class="company-partners">
        <div class="partners-images">
            <p class="Partners-heading">Asset Finance Partners</p>
            <div class="image-container">
                <img src="../images/siteImages/NCBA.png" alt="ncba">
                <img src="../images/siteImages/KCB.png" alt="kcb">
                <img src="../images/siteImages/COOP.png" alt="coop">
                <img src="../images/siteImages/Family.png" alt="family">
                <img src="../images/siteImages/ABSA.png" alt="absa">
                <img src="../images/siteImages/Gulf.png" alt="gulf">
                <img src="../images/siteImages/Equity_Bank_Logo.png" alt="">
            </div>
        </div>
        <div class="partners-images">
            <p class="partners-heading">Aftersales Partners</p>
            <div class="image-container">
                <img src="../images/siteImages/Total.png" alt="total">
                <img src="../images/siteImages/Autoexpress.png" alt="Autoexpress">
                <img src="../images/siteImages/ve_logo_Kenya.png" alt="Vivo Kenya">
            </div>

        </div>
    </section>
    <?php
    include_once "views/partials/footer.php"
    ?>