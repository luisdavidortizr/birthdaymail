<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe | Birthday Mail</title>
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
        <?php
        // Include classes
        include_once("validate.php");
        include_once("database.php");

        // Create a validate instance
        $validator = new Validate();

        if(!empty($_POST['subscribe'])) {
            // get submitted data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $birthday = $_POST['birthday'];

            // Validate data received
            $msg = $validator->checkEmpty($_POST, array('name', 'email', 'birthday'));
            $isValidEmail = $validator->validEmail($email);
            $isValidBirthday = $validator->validDate($birthday);

            if($msg != null) {
                // Handle empty fields
                echo $msg;
                echo "<a href='javascript:self.history.back();' class='primary_button'>Go Back</a>";
            } else if(!$isValidEmail) {
                // Handle invalid email
                echo '<p>Please provide a valid email.</p>';
                echo "<a href='javascript:self.history.back();' class='primary_button'>Go Back</a>";
            } else if(!$isValidBirthday) {
                // Handle invalid birthday
                echo '<p>You should be at least 12 years old to subscribe.</p>';
                echo "<a href='javascript:self.history.back();' class='primary_button'>Go Back</a>";
            } else {
                // When all fields are valid, save data to database
                $result = $database->create("INSERT INTO subscribers(name, email, birthday) VALUES ('$name', '$email', '$birthday')");
                // Show the user that subscription is successful
                if($result) {
                    echo "<p>Thank you for subscribing</p>";
                    echo "<a href='subscribers.php' class='primary_button'>View Subscribers</a>";
                } else {
                    echo '<p>We could not add your subscription, plase try again.</p>';
                    echo "<a href='javascript:self.history.back();' class='primary_button'>Go Back</a>"; 
                }
            }
        }
        ?>
    </main>

    <footer>
        <small>© 2023 Birthday Mail, Inc. All rights reserved</small>
    </footer>
</body>
</html>