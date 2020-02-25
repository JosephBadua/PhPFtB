<?php
    include('config/config.php');
    require('config/db.php');
    // $conn

    if(isset($_POST['delete'])) {
        $delete_id = mysqli_real_escape_string($connection, $_POST['delete_id']);

        $query = "DELETE FROM posts WHERE id = $delete_id";

        if(mysqli_query($connection, $query)){
            header('Location:' . ROOT_URL);
        } else {
            echo 'Error ' . mysqli_error($connection); 
        }

    }

    $id = mysqli_real_escape_string($connection, $_GET['id']);

    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($connection, $query);

    //Fetch All
    $post = mysqli_fetch_assoc($result);
    // var_dump($posts);
    //Free Result

    mysqli_free_result($result);

    //close conn

    mysqli_close($connection);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>MySQL</title>
</head>
    <body>
           <div class="container">
               <a href="<?php echo ROOT_URL;?>" class="btn btn-default">Back</a>
                <div class="well">
                <h3><?php echo $post['Title']; ?></h3>
                    <small>Created on <?php echo $post['created_at']; ?> by  <?php echo $post['Author']; ?> </small>
                    <p><?php echo $post['Body']; ?></p>
                    <hr>
                    <form class="float-right" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <input type="hidden" name="delete_id" value="<?php echo $post['id'];?>" >
                        <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                    </form>
                    <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-default">Edit</a>

                </div>
    </body>
</html>