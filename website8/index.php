<?php
    include('config/config.php');
    require('config/db.php');
    // $conn

    $query = 'SELECT * FROM posts ORDER BY created_at DESC';
    $result = mysqli_query($connection, $query);

    //Fetch All
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($posts);
    //Free Result

    mysqli_free_result($result);

    //close conn

    mysqli_close($connection);

?>


<?php include('inc/header.php'); ?>
           <div class="container">
           <h1>Posts</h1>
            <?php foreach($posts as $post): ?>
                <div class="well">
                <h3><?php echo $post['Title']; ?></h3>
                    <small>Created on <?php echo $post['created_at']; ?> by  <?php echo $post['Author']; ?> </small>
                    <p><?php echo $post['Body']; ?></p>
                    <a class="btn btn-default" href="post.php?id=<?php echo $post['id'];?>">Read More</a>
                </div>
            <?php endforeach;?></div>
<?php include('inc/footer.php'); ?>
