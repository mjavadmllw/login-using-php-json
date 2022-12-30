<?php
    session_start();
    $error='';
    if(isset($_POST['submit'])){
        $userCheck=validate($_POST['username'],$_POST['password']);
        if($userCheck==true){
            $_SESSION['username']=$_POST['username'];
        }else{
            $error="Username/Password is wrong!!";
        }
    }
    if(isset($_POST['logout'])){
        unset($_SESSION['username']);
    }

    function validate($username,$passwprd){
        $checker=false;
        $json=file_get_contents("users.json");
        $users = json_decode($json, true);
        foreach ($users as $user){
            if ($user['username']==$username && $user['password']==$passwprd){
                $checker=true;
                break;
            }
        }
        return $checker;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="row">
            <div class="colm-form">
                <div class="form-container">
                    <?php 
                        if(isset($_SESSION['username'])){?>
                            <form action="#" method="post">
                                <input type="submit" value="logout" class="btn-login" name="logout">
                            </form>
                            <a href="dashboard.php">Dashboard</a><?php
                        }else{?>
                            <form action="#" method="post">
                                <input type="text" name="username" placeholder="Username">
                                <input type="password" name="password" placeholder="Password">
                                <input type="submit" value="Login" class="btn-login" name="submit">
                            </form>
                            <p style="color: red;"> <?php  echo $error ?></p><?php 
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>