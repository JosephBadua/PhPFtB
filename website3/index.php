<?php

    $msg = '';

    $msgClass = '';

    if(filter_has_var(INPUT_POST, 'submit')) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);


        if(!empty($email) && !empty($name) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = "Please use valid email";
                $msgClass = 'alert-danger';
            } else {
                $toEmail = 'josephbadua1006@gmail.com';
                $subject = 'Contact Request From ' . $name;
                $body = "<h2>Contact Request</h2>
                <h4>Name</h4><p>$name</p>
                <h4>Email</h4><p>$email</p>
                <h4>Message</h4><p>$message</p>
                ";
                
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

                $headers .= "From: $name <$email>" . "\r\n";

                if(mail($toEmail, $subject, $body, $headers)) {
                    $msg = "Your email has been sent";
                    $msgClass = 'alert-success';
                } else {
                    $msg = "Your email could not be sent";
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            $msg = "Please fill in all fields";
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">My Website</a>
        </div>
    </div>
</nav>
    <?php if($msg != ""):?>
        <div class="alert <?php echo $msgClass; ?>">
            <?php echo $msg; ?>
        </div>
    <?php endif?>

<div class="container">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ""  ?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type='text' name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email: ""  ?>">
        <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ""  ?>"></textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
</body>
</html>