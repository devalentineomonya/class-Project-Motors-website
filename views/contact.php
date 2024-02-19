<?php
include "views/partials/header.php"
?>

<style>
    .contact-upper {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("../images/siteImages/contact.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementsByClassName("h1top")[0].textContent = "Get In Touch";
        document.title = "Simba | Contact Us";
    });
</script>

<section class="contact-container">
    <div class="contact-form-container">
        <h2>Talk to Us</h2>
        <div class="contact-form">
            <div class="contact-icons">
                <div class="icon">
                    <img src="../images/siteImages/phone-call.png" alt="">
                    <span> Call us</span>
                    <p>0703 046 000/101/801/217</p>
                </div>

                <div class="icon">
                    <img src="../images/siteImages/location.png" alt="">
                    <span>Location</span>
                    <p>Simba Corp Aspire Center, Nairobi</p>
                </div>

                <div class="icon">
                    <img src="../images/siteImages/gears.png" alt="">
                    <span>Email</span>
                    <p>simbacares@simbacorp.com</p>
                </div>
            </div>

            <form id="contactForm" method="post" action="https://api.web3forms.com/submit">
                <input type="hidden" name="access_key" value="46e71153-727d-43b2-853b-6525fc87bc7f">
                <div class="input-container">
                    <div class="col-3">
                        <input type="text" class="form-control" name="name" id="fullname" placeholder="Name" required />
                    </div>
                    <div class="col-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required />
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required />
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
                    </div>
                </div>
                <div class="col-6">
                    <textarea name="message" id="message" rows="10" placeholder="Message" required></textarea>
                </div>
                <div class="col-6">
                    <button  id="contactSubmit" type="submit">SEND</button>
                </div>

            </form>
        </div>
    </div>
</section>

<section class="simba-network">
    <div class="network-container">
        <div>
            <h1 class="network-title">Network</h1>
        </div>
        <div class="network-cards">
            <div class="col">

                <div class="network-content">
                    <p>Simba Corp Corporate Head Office, Aspire Center</p>
                    <span>Tel: 0703 046 800/1</span>
                </div>

                <div class="network-content">
                    <p>Simba Corp Mombasa Road</p>
                    <span>Tel: 0703 046 000</span>
                </div>

                <div class="network-content">
                    <p>Simba Corp Motors Ltd. Truck & Bus Service Facility</p>
                    <span>Tel: 0703 046 300</span>
                </div>

                <div class="network-content">
                    <p>Simba Corp Motors Ltd. Mombasa Branch</p>
                    <span>Tel: 0703 046 400</span>
                </div>
            </div>
            <div class="col">

                <div class="network-content">
                    <p>Simba Corp Motor Division Ltd. Kisii Branch</p>
                    <span>Tel: 0703 046 670</span>
                </div>

                <div class="network-content">
                    <p>Simba Corp Motors Ltd. Kisumu Branch</p>
                    <span>Tel: 0703 046 620</span>
                </div>

                <div class="network-content">
                    <p>Simba Corp Motors Ltd. Narok Branch</p>
                    <span>Tel: 0703 046 570</span>
                </div>

                <div class="network-content">
                    <p>Simba Corp Motor Division Nyeri Branch</p>
                    <span>Tel: 0703 046 686</span>
                </div>
            </div>
            <div class="col">

                <div class="network-content">
                    <p>Acacia Premier</p>
                    <span>Tel: 0709 850 000</span>
                </div>

                <div class="network-content">
                    <p>Villarosa Kempinski</p>
                    <span>Tel: 0703 049 000</span>
                </div>

                <div class="network-content">
                    <p>Hemingways Collection</p>
                    <span>Tel: 0711 032 000</span>
                </div>

                <div class="network-content">
                    <p>Nairobi Street Kitchen</p>
                    <span>Tel: 0707 800 800</span>
                </div>
            </div>
            <div class="col">

                <div class="network-content">
                    <p>Fika</p>
                    <span>Tel: 0703 046 830</span>
                </div>

                <div class="network-content">
                    <p>Uva Wines</p>
                    <span>Tel: 0740 047 595</span>
                </div>

                <div class="network-content">
                    <p>AVA Mombasa</p>
                    <span>Tel: 0722 200 967</span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once "views/partials/footer.php"
?>