<?php
    // $name = "Hello World";
    // $num1 = 4;
    // print $name;

    // for($i=0; $i < 10; $i++) {
    //     print "Number $i ";
    //     print '<br>';
    // }

    // $i = 0;

    // while($i < 10) {
    //     echo $i;
    //     echo '<br>';
    //     $i++;
    // }

    // $people = ['Brad', 'Jose', 'William'];
    
    // foreach($people as $person) {
    //     echo "My name is $person";
    //     echo "<br>";
    // }

    // $people = ['Brad' => 'bigbrad@gmail.com', 'Jose' => 'ItsJose@yahoo.com', 'William' => 'ItsWilliam@gmail.com'];

    // foreach($people as $person => $email){
    //     echo "$person's email is $email";
    //     echo "<br>";
    // }

    // function simplefunc() {
    //     echo "Hello World";
    // };

    // simplefunc();

    // function sayHi($name = "dick") {
    //     echo " Hello $name";
    // };

    // sayHi();

    // function addNumbers($numb1, $numb2) {
    //     return $numb1 + $numb2;
    // }

    // // echo addNumbers(2,3);


    // $myNum = 10;

    // function addFive(&$num) {
    //     $num += 5;
    // }

    // addFive($myNum);

    // echo "Value: $myNum"


        // $num = 5;

        // if($num == 5) {
        //     echo "balls";
        // }

        // date_default_timezone_set('America/Los_Angeles');

        // echo date('h:m:sa');
    
    // $outpit = substr('Hello', 1, 3 );
    // echo $outpit;

    // $output = strlen('Hello There');
    // echo $output;

    // $output = strrpos('Hello World', 'o');
    // echo $output;

    // $text = "          HELLO          ";
    // $text = trim($text);
    // var_dump($text);
    
    // $output = strtolower('Hello World');
    // echo $output;

    // $output = ucwords('hello world');
    // echo $output;

    // $text = 'Hello World';
    // $output = str_replace("World", "Everyone", $text);
    // echo $output;

    // $text = "";
    // $output = is_string($text);
    // echo $output;

    // $values = [true, false, null, 'abc', 22, '33', 22.13, '22.13', '', ' ', 0, '0'];

    // foreach($values as $item){
    //     if(is_string($item)) {
    //         echo "$item is a string";
    //         echo "<br>";
    //     };
    // };

    $string = "asdasjhsfjshfffffffffffffffffffffffffffffffffffffffffffffffffffffffff";

    $compressed = gzcompress($string);

    echo $compressed;

?>