<?php include_once('database.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribers | Birthday Mail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <img src="img/logo_full.png" alt="Logo">
        <nav>
            <ul>
                <li><a href="index.php">Subscribe</a></li>
                <li><a href="subscribers.php">Subscribers</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birthday</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $query = "SELECT * FROM subscribers";
                    $result = $database->getData($query);
                    
                    if ($result) {
                        foreach ($result as $res) {
                            echo "<tr>";
                            echo "<td>".$res['name']."</td>";
                            echo "<td>".$res['email']."</td>";
                            echo "<td>".$res['birthday']."</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td>No subscribers found</td></tr>";
                    }
                } catch (Exception $e) {
                    echo "<tr><td>Error: " . $e->getMessage() . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <small>© 2023 Birthday Mail, Inc. All rights reserved</small>
    </footer>
</body>
</html>
