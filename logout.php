<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
} elseif ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("location: index.php");
}

unset($_SESSION['username']);
header("location: login.php");
