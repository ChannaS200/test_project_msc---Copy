<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'php_demo');

// Retrieve data from the database
$result = $conn->query("SELECT * FROM users");

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Results</title>
</head>
<body>
    <header>
        <h1>User Data</h1>
    </header>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
