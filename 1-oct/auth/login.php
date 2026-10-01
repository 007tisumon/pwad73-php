<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>

<body>
    <div class="">

        <?php require("config.php");

        if (isset($_POST['submit'])) {
            extract($_POST);
            $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

            $result = $conn->query($sql);

            if ($result->num_rows) {
                header("Location: dashbord.php ");
            } else {
                echo "invalid credentials";
            }
        }


        ?>
        <h3>Login Form</h3>
        <form action="" method="post"
            style="width: 400px; display: flex; flex-direction: column; margin: auto; gap: 10px">
            <input type="email" name="email" placeholder="Enter email" id="">
            <input type="password" name="password" placeholder="Enter password" id="">
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>

</html>