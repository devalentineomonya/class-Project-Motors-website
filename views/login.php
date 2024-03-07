<?php
include "views/partials/header.php"
?>

<style>
    .login-upper {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("../images/siteImages/login.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementsByClassName("h1top")[0].textContent = "Login For More";
        document.title = "Login / Sign Up";
    });
</script>

<section class="login-container">
    <div class="form-box">
        <div class="button-box">
            <div id="btnOverlay"></div>
            <button id="loginBtn" type="button" class="toggle-btn">Login</button>
            <button id="registerBtn" type="button" class="toggle-btn">Register</button>
        </div>
        <div class="social-icons">
            <img src="../images/siteImages/facebook.png" alt="">

            <img src="../images/siteImages/google.png" alt="">
        </div>

        <form id="loginForm" action="php\function\login.php" class="input-group" method="post">
            <?php
            if (isset($_SESSION['authError'])) {
                echo '<p class="error-message">' . $_SESSION['authError'] . '</p>';
                unset($_SESSION['authError']);
            }
            ?>
            <input type="email" name="email" class="input-field" placeholder="Username/Email">
            <input type="password" name="password" class="input-field" placeholder="Your Password">
            <div class="checkbox-center">
                <input type="checkbox" name="" id="" class="check-box"><span>Agree terms and conditions</span>
            </div>
            <button type="submit" class="submit-btn">Login</button>

        </form>

        <form id="registerForm" action="php\function\register.php" class="input-group" method="post" enctype="multipart/form-data">
            <input type="text" name="name" class="input-field" placeholder="FullName">
            <input type="email" name="email" class="input-field" placeholder="Username/Email">
            <input type="tel" name="phone" class="input-field" placeholder="Phone Number">
            <select name="nationality" id="" class="input-field">
                <option value="none">-Choose Nationality-</option>
                <option value="kenyan">Kenyan</option>
                <option value="foreigner">Other Country</option>
            </select>
            <input type="file" name="userid" class="input-field">
            <input type="password" name="password" class="input-field" placeholder="Your Password">
            <div class="checkbox-center">
                <input type="checkbox" name="" id="" class="check-box"><span>Remember Me</span>
            </div>
            <button type="submit" class="submit-btn">Register</button>
        </form>

    </div>
</section>

<?php
include_once "views/partials/footer.php"
?>