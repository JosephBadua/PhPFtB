<?php
    setcookie('username', 'frank', time() + (86400 * 30));

    setcookie('username', 'frank', time() - 3600 );

    if(count($_COOKIE) > 0) {
        echo "There are " . count($_COOKIE) . " cookies here ";
    } else {
        echo "No cookies"; 
    };

    
    if(isset($_COOKIE['username'])) {
        echo 'User ' . $_COOKIE['username'] . ' is set <br>';
    } else {
        echo 'No User Found';
    };
?> 