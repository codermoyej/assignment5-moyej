<?php

require_once "functionsAll.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $person->setName($_POST['name']);
    $person->setEmail($_POST['email']);
    $name = $person->getName();
    $email = $person->getEmail();
} else {
    $name = "";
    $email = "";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign 05</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>

    <section class="main">
        <!-- Task 1: Basic HTML -->
        <div class="container">
            <h2 class="question-title">Task 1: Basic HTML</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div>
                    <label for="name">Full Name</label><br>
                    <input type="text" name="name" required>
                </div>
                <div>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </div>
       
    </section>
    <div>
    <!-- Task2: Basic OOP in PHP -->
    <section>
        <div class="container">
            <h2>Task2: Basic OOP in PHP</h2>
            <p>Name: <?php echo $personName; ?></p>
            <p>Email: <?php echo $personEmail; ?></p>
        </div>


        <!-- Superglobal Variables in PHP -->
        <div class="container">
            <h2>Superglobal Variables in PHP</h2>
            <p>Name: <?php echo $name; ?></p>
            <p>Email: <?php echo $email; ?></p>
        </div>
    </div>
    </section>
</body>

</html>