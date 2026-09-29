<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="student-list-page">
    <h1>Student List</h1> <br>
    <a href="student_entry.php">Student Entry</a>
    <br> <br>
    <table cellpadding="10px" border="1" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>action</th>
            <th>action2</th>
        </tr>
        <tr>
            <?php require('config.php');

            $sql = "SELECT * FROM pwd";

            $result = $conn->query($sql);

            if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['delete'])) {
                $id = (int) $_POST['id'];
                if ($id > 0) {
                    $sql = "DELETE FROM pwd WHERE id = $id";
                    $conn->query($sql);
                }
                // var_dump($id);
            }
            // foreach ($result as $row) {
            //     echo "<tr>";
            //     echo "<td>{$row['name']} </td>";
            //     echo "<td>{$row['email']} </td>";
            //     echo "<td>{$row['phone']} </td>";
            //     echo "<td>{$row['address']} </td>";
            //     echo "</tr>";
            
            // }
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']} </td>";
                echo "<td>{$row['name']} </td>";
                echo "<td>{$row['email']} </td>";
                echo "<td>{$row['phone']} </td>";
                echo "<td>{$row['address']} </td>";
                echo "<td>
                
                
                
                <form method='post'>
                <input type='hidden' name='id' value='" . $row['id'] . "'>" . "
                <button type='submit' name='delete'>Delete</button></form> </td>";
                echo "<td>
                    <a  href='student_edit.php?id=" . $row['id'] . "'>Edit</a> 
                    | <a  href='student_delete.php?id=" . $row['id'] . "'>Delete</a>
                </td>";
                echo "</tr>";



            }

            ?>
        </tr>
    </table>
</body>

</html>