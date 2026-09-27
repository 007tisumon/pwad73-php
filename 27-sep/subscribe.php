<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe -- page</title>
</head>
<body>
    <div class="" style="width: 500px; height: 100vh; margin: auto; ">
        <h2>Subscription Form</h2>
         <?php 
         echo "<pre>";
         if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
             echo "You submited form Your name {$_POST['name']} Your Email {$_POST['email']}";
         }
        

        ?>
        <form action="" method="post" style="display:flex; flex-direction: column; gap: 10px; " >
            <input type="text" name="name" placeholder="Enter name" id="">
            <input type="text" name="email" id="" placeholder="Enter email">
            <input type="submit" name="submit" value="Subscribe">
        </form>
    </div>

   
</body>
</html>