<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("location: login.php");
    }
    if(isset($_POST['logout'])){
        unset($_SESSION['username']);
        header("location: login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="row">
            <div class="colm-form">
                <div class="form-container">
                    <h2>welcome to your dashboard</h1>
                    <form action="#" method="post">
                        <input type="submit" value="logout" class="btn-login" name="logout">
                    </form>  
                </div>
            </div>
        </div>
    </main>
</body>
</html>