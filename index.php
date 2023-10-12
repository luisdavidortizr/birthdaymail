<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Mail</title>
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
        <h1>Welcome to Birthday Mail</h1>
        <p>Subscribe today if you want to receive an email wishing you a happy birthday</p>

        <form action="subscribe.php" method="post">
            <input type="text" name="name" placeholder="Your name">
            <input type="email" name="email" placeholder="Your email">
            <input type="date" name="birthday">
            <input type="submit" value="Subscribe" name="subscribe">
            <input type="reset" value="Reset">
        </form>
    </main>

    <footer>
        <small>© 2023 Birthday Mail, Inc. All rights reserved</small>
    </footer>
</body>
</html>