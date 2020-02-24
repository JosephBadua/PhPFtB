<?php
    include './server-info.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>System Info</title>
</head>
<body>
    
    <div class="container">
        <h1> Server & File Info </h1>
        <?php if($server): ?>
            <ul class="list-group">
            <?php foreach($server as $global => $item): ?>
                <li class="list-group-item">
                    <strong><?php echo $global;?>:</strong>
                    <?php echo $item;  ?>
                </li>
            <?php endforeach?>
            </ul>
        <?php endif?>

        <h1> Server & File Info </h1>
        <?php if($client): ?>
            <ul class="list-group">
            <?php foreach($client as $global => $item): ?>
                <li class="list-group-item">
                    <strong><?php echo $global;?>:</strong>
                    <?php echo $item;  ?>
                </li>
            <?php endforeach?>
            </ul>
        <?php endif?>

    </div>

</body>
</html>