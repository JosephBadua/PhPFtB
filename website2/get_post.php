<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['name'])) {
            $name = htmlentities($_GET['name']);
            echo $name;
        };

        // if(isset($_POST['name'])) {
        //     // $name = htmlentities($_POST['name']);
        //     // echo $name;
        // }

        // if(isset($_REQUEST['name'])) {
        //     $name = htmlentities($_REQUEST['name']);
        //     echo $name;
        // }
    ?>
    <form method="GET" action="get_post.php">
        <div>
            <label>Name</label>
            <br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label>
            <br>
            <input type="email" name="email">
        </div>
        <input type="submit" value="submit" name="submit">
    </form>
        <ul>
            <li>
                <h1><a href="get_post.php?name=Steve">Steve</a></h1>
            </li>
            <li>
                <h1><a href="get_post.php?name=Brad">Brad</a></h1>
            </li>
        </ul>
        <h1><?php echo "{$name}'s Profile";  ?></h1>

</body>
</html>