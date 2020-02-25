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

    // $string = "asdasjhsfjshfffffffffffffffffffffffffffffffffffffffffffffffffffffffff";

    // $compressed = gzcompress($string);

    // echo $compressed;

    // $original = gzuncompress($compressed);

    // echo $original;

        // $loggedIn = false;


        // echo ($loggedIn) ? 'Good Job' : 'No';

        // $isRegistered = ($loggedIn ? true : false);
        // echo $isRegistered;
        

        // $age = 5;
        // $score = 0;

        // echo 'You score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : 'Low');

        // $arr = [1,2,3,4,5,6]

        // if(filter_has_var(INPUT_POST, 'data')) {
        //     echo 'Data Found';
        // } else {
        //     echo 'No Data';
        // }

        // if(filter_has_var(INPUT_POST, 'data')) {
        //     $email = $_POST['data'];

        //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        //     echo $email.'<br>';

        //   if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     echo "Email is valid";
        //   } else {
        //       echo 'email is not valid';
        //   }
        // }

        // $var = '23';

        // if(filter_var($var, FILTER_VALIDATE_INT)) {
        //     echo $var . " is a number";
        // } else {
        //     echo $var . ' is not a number';
        // }

        // $number = '1232232133213213133';
        // // var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));

        // $filters = ["data" => FILTER_VALIDATE_EMAIL, "data2" => ["filter" => FILTER_VALIDATE_INT, "options" => ['min-range' => 1, 'max-range' => 100]]]

        // print_r(filter_input_array(INPUT_POST, $filters));

?>



    <!-- <div>
        <?php if($loggedIn): ?>
            <h1>Welcome</h1>
        <?php else: ?> 
            <h1>Welcome Guest</h1>
        <?php endif ?>
    </div> 

    <div>
            <?php foreach($arr as $val): ?>
                <?php  echo $val; ?>
        <?php endforeach ?>
    </div>

    <div>
        <?php for($i = 0; $i < 10; $i++ ): ?>
                <?php  echo $i; ?>
        <?php endfor ?>
    </div> -->
<!-- 
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="data">
            <button type="submit">Submit</button>
        </form> -->

        