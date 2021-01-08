<?php

session_start();

// cek cookie
if (isset($_COOKIE['login'])) {
    if ($_COOKIE['login'] == 'true') {
        $_SESSION['login'] = true;
    }
}

// cek session
if (isset($_SESSION["login"])) {
    header("Location: admin.php");
    exit;
}

if (isset($_POST["login"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // set session
        $_SESSION["login"] = true;

        // remember me
        if (isset($_POST["remember"])) {
            // cookie
            setcookie('login', 'true', time() + 60);
        }

        header("Location: admin.php");
        exit;
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;1,600&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <form action="" method="post">
            <div class="login">
                <h2>Masuk</h2>
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username">
                    <div id="usernameHelp" class="form-text form-input">contoh: example@tokopedia.com</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control form-input" id="password" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">ingat password</label>
                </div>
                <button type="submit" class="btn" name="login">Masuk</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>