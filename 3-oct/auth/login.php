<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login -- Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="login-card">
        <h1>Welcome back</h1>
        <p class="login-subtitle">Sign in to continue to your account.</p>
        <form action="" method="post" class="login-form">
            <?php require("pdoCon.php");
            if ($_SERVER['REQUEST_METHOD'] === "POST") {
                extract($_POST);
                $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
                $user = $conn->query($sql);

                // var_dump($user);
            
                $result = $conn->query($sql);
                if ($result->rowCount() > 0) {
                    session_start();
                    $_SESSION['email'] = $email;
                    header("Location: dashbord.php ");
                } else {
                    echo '<p class="login-error">creadential does not match</p>';
                }
            }



            ?>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="you@example.com" value="<?php if (isset($_POST['email']))
                echo $_POST['email'] ?>">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <input class="login-submit" type="submit" value="Sign in" name="submit">
        </form>
    </main>
    </body>

    </html>