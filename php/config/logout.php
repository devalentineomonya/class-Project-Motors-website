<?php
session_start();
if (isset($_SESSION["currentUser"])) {
    unset($_SESSION["currentUser"]);
}
header("Location: /home");
