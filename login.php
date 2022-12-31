<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location: index.php");
}

if (isset($_POST['submit'])) {
    if (isset($_POST['username'], $_POST['password']) && authenticate($_POST['username'], $_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
        header("location: index.php");
    } else {
        $error = "Username/Password is wrong!!";
    }
}

function authenticate($username, $password)
{
    try {
        $json = @file_get_contents(__DIR__ . '/db/users.json');
        $users = json_decode($json, true);
        if ($users) {
            foreach ($users as $user) {
                if ($user['username'] === $username && $user['password'] === $password) {
                    return true;
                }
            }
        }
        return false;
    } catch (Exception $exception) {
        return false;
    }
}

include __DIR__ . '/views/login.view.php';
