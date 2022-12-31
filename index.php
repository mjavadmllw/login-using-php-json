<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}

include __DIR__ . '/views/dashboard.view.php';