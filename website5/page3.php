<?php
    $user = ['name' => 'Brad', 'email' => 'test@test.com', "Age" => 24 ];

    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30));

    $user = unserialize($_COOKIE['user']);

    print_r($user);

    echo $user['email'];
    ?>