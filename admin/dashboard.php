<?php
session_start();
if (isset($_SESSION['Username'])) {
    echo "Welcome " . $_SESSION["Username"];
}