<?php

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()){
        // error
        echo 'Failed to Connect ' . mysqli_connect_errno();
    } else {

    }

?>