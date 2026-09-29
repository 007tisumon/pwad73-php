<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student -- Entry</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="student-entry-page">

    <?php include_once('config.php');
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];


        $sql = "UPDATE pwd 
        SET name = '$name', email = '$email' , pass= '$pass', address ='$address' , phone = '$phone'
        WHERE id = $id";

        $conn->query($sql);

        if ($conn->affected_rows) {
            // header("Location: index.php");
            echo "<p>success</p>";

        }
    }
    $sql = "SELECT * FROM pwd WHERE id = '$id' LIMIT 1";
    $student = $conn->query($sql);
    $student = $student->fetch_assoc();

    ?>
    <main class="entry-panel">
        <h1>Student Form</h1>
        <form action="" method="post" class="student-form">
            <input type="text" name="name" placeholder="Enter name" value="<?php echo $student['name'] ?>" name id="">
            <input type="text" name="email" placeholder="Enter Email" name id=""
                value="<?php echo $student['email'] ?>">
            <input type="text" name="pass" placeholder="Password" name id="" value="<?php echo $student['pass'] ?>">
            <textarea name="address" placeholder="Address" id=""><?php echo $student['address'] ?></textarea>
            <input type="text" name="phone" placeholder="phone" name id="" value="<?php echo $student['phone'] ?>">
            <input type="submit" name="submit" value="Update">
        </form>
        <a href="index.php">Back to Home</a>
    </main>
</body>

</html>