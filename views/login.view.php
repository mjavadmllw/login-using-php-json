<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<main>
    <div class="row">
        <div class="colm-form">
            <div class="form-container">
                <form method="post">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="submit" class="btn-login" value="Login">
                </form>
                <?php if (isset($error)): ?>
                    <p style="color: red;"> <?php echo $error ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
</body>
</html>