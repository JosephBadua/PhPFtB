<?php
    $path = '/dir1/myfile.php';
    $file1 = 'file1.txt';
    // echo dirname($path);



    // echo realpath($file1);

    // echo is_file($file1);

    // echo is_writable($file1);

    // echo filesize($file1);

    // echo copy('file1.txt', 'file2.txt');
    // rename('file2.txt', 'myfile.txt');

    // unlink('myfile.txt');

    // echo file_get_contents($file1);

    // echo file_put_contents($file1, 'Goodbye World');

    // $current = file_get_contents($file1);

    // $current .= 'Goodbye World';

    // file_put_contents($file1, $current);

    // $handle = fopen($file1, 'r');
    // $data = fread($handle, filesize($file1));
    // echo $data;

    $handle = fopen($file1, 'w');
    $txt = 'John Doe';
    fwrite($handle, $txt);
    fclose($handle);

?>