<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student -- Entry</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="student-entry-page">

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        include_once('config.php');

        $sql = "INSERT INTO pwd (id, name ,email , pass , phone , address) VALUES (NULL ,'$name', '$email', '$pass', '$phone', '$address')";

        $conn->query($sql);

        if ($conn->affected_rows) {
            header("Location: index.php");

        }


    }


    ?>
    <main class="entry-panel">
        <h1>Student Form</h1>
        <form action="" method="post" class="student-form">
            <input type="text" name="name" placeholder="Enter name" name id="">
            <input type="text" name="email" placeholder="Enter Email" name id="">
            <input type="text" name="pass" placeholder="Password" name id="">
            <textarea name="address" placeholder="Address" id=""></textarea>
            <input type="text" name="phone" placeholder="phone" name id="">
            <input type="submit" name="submit" value="Submit">
        </form>
        <a href="index.php">Back to Home</a>
    </main>
</body>

</html>