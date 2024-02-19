<?php
include "views/partials/header.php"
?>
<style>
    .not-found-upper {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("../images/siteImages/404.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementsByClassName("h1top").textContent = "404 Not Found";
        document.title="404 Not Found";
    });
</script>

<section class="not-found-section">
    <p class="not-found-text">404 - Page Not Found</p>
    <button class="go-home-button" onclick="window.location.href = '/';">Go Back to Home</button>
</section>
<?php
include_once "views/partials/footer.php"
?>