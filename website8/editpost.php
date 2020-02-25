<?php
    include('config/config.php');
    require('config/db.php');

    if(isset($_POST['submit'])) {
        $updated_id = mysqli_real_escape_string($connection, $_POST['update_id']);
        $title = mysqli_real_escape_string( $connection, $_POST['title']);
        $author = mysqli_real_escape_string( $connection, $_POST['author']);
        $body = mysqli_real_escape_string( $connection, $_POST['body']);

        $query = "UPDATE posts SET
                    Title='$title',
                    Author='$author',
                    Body='$body'
                WHERE id = '$updated_id';
        ";

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


<?php include('inc/header.php'); ?>
           <div class="container">
           <h1>Add Post</h1>
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $post['Title'];?>">
    </div>
    <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control" value="<?php echo $post['Author'];?>">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea type="text" name="body" class="form-control"><?php echo $post['Body'];?></textarea>
    </div>
    <input type='hidden' name='update_id' value="<?php echo $post['id']; ?>">
    <input type="submit" name="submit" value="submit" class="btn btn-primary">

            </form>
<?php include('inc/footer.php'); ?>
