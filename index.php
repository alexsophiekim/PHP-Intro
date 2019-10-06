<?php
    // phpinfo();

    // echo 'hello';
    // echo '<h1>HELLO</h1>';

    //Strings
    $string = 'Good morning';
    //Integers
    $integer = 2;
    //Floats
    $float = 3.5;
    //Booleans
    $boolean = false;
    //Arrays
    $array = array('item1', 'item2', 'item3');
    //Objects
    class Me {
        function Me(){
            $this->name = 'Sophie';
            $this->gender = 'female';
        }
    }

    $myself = new Me();

    $null = null;

    define('SITETITLE', 'This is a constant variable');

    //var_dump is for console.log in javascript
    var_dump($array);
    echo '<pre>';
        print_r($array);
    echo '</pre>';

    // It will kill php. Stop php!
    die($string);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo 'This is the page title'; ?></title>
    </head>
    <body>

        <?php
            echo '<h1>This is an H1</h1>';
            echo '<p>This is a paragraph</p>';
         ?>
         <h3>Our string varialbe is : <?php echo $string; ?></h3>
         <h3>Our integer variable is : <?php echo $integer; ?></h3>
         <h3>Our float variable is : <?php echo $float; ?></h3>
         <h3>Our boolean variable is : <?php echo $boolean; ?></h3>
         <h3>A object variable is : <?php echo $myself->name; ?></h3>
         <h3>Our null variable is : <?php echo $null; ?></h3>
         <h3>Our constant variable is: <?php echo SITETITLE; ?></h3>
         <h3>A value in my array is: <?php echo $array[0]; ?></h3>
    </body>
</html>
