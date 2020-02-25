<?php
    session_start();

    $_SESSION['name'] = "John Doe";

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions 2</title>
</head>
<body>
    <h5><?php echo $name?></h5>
    <h5><?php echo $email?></h5>
    <a href="page3.php">Go to Page</a>
</body>
</html>