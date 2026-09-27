<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>

<body>
    <h1>Student List</h1>
    <table cellpadding="10px" border="1" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        <tr>
            <?php require('config.php');

            $sql = "SELECT * FROM pwd";

            $result = $conn->query($sql);
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
                echo "</tr>";


            }

            ?>
        </tr>
    </table>
</body>

</html>