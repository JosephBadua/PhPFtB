<?php
    include('config/config.php');
    require('config/db.php');

    if(isset($_POST['submit'])) {
        $title = mysqli_real_escape_string( $connection, $_POST['title']);
        $author = mysqli_real_escape_string( $connection, $_POST['author']);
        $body = mysqli_real_escape_string( $connection, $_POST['body']);

        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

        if(mysqli_query($connection, $query)){
            header('Location:' . ROOT_URL);
        } else {
            echo 'Error ' . mysqli_error($connection); 
        }

    }

?>


<?php include('inc/header.php'); ?>
           <div class="container">
           <h1>Add Post</h1>
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea type="text" name="body" class="form-control"></textarea>
    </div>
    <input type="submit" name="submit" value="submit" class="btn btn-primary">

            </form>
<?php include('inc/footer.php'); ?>
