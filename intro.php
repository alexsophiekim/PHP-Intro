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

    //if else statement
    if ($boolean === true) {
        echo "The boolean is true";
        echo '<br>';
    }   else {
        echo "The boolean is false";
        echo '<br>';
    }

    // Loop
    echo count($array);

    for ($i=0; $i < count($array) ; $i++) {
        echo '<br>';
        echo $array[$i];
        echo '<br>';
    }

    // It will kill php. Stop php!
    // die($string);

    //associate array - similar as an object

    // $favouriteColours = array('red','blue','green');
    $favouriteColours = array(
        'simon' => 'green',
        'brayden' => 'purple',
        'ryley' => 'red'
    );
    echo $favouriteColours['simon'];
    echo '<br>';

    // loop -$favouriteColours is name of the array, $person is key, $value is value
    foreach ($favouriteColours as $person => $value) {
        echo '<br>';
    // concatenate using .(dot) instead of '+'
        echo $person . '\'s favourite colour is ' . $value;
    }


    $class = array(
        'Simon' => array(
            'age' => 19,
            'colour' => 'green',
            'food' => 'Sushi',
            'town' => 'Ngaio',
            'fullLicence' => false
        ),
        'Brayden' => array(
            'age' => 21,
            'colour' => 'purple',
            'food' => 'Sushi',
            'town' => 'Brown Owl',
            'fullLicence' => true
        ),
        'Ryley' => array(
            'age' => 19,
            'colour' => 'red',
            'food' => 'Garlic Bread',
            'town' => 'Tawa',
            'fullLicence' => false
        ),
        'Andy' => array(
            'age' => 26,
            'colour' => 'blue',
            'food' => 'Fish tacos',
            'town' => 'Lower Hutt',
            'fullLicence' => false
        ),
        'Katherine' => array(
          'age' => 18,
          'colour' => 'Purple',
          'food' => 'Pizza',
          'town' => 'Tawa',
          'fullLicence' => true
        ),
        'Larissa' => array(
          'age' => 19,
          'colour' => ' khaki green',
          'food' => 'food',
          'town' => 'wadestown',
          'fullLicence' => false
        ),
        'Sophie' => array(
            'age' => 32,
            'colour' => 'peach',
            'food' => 'avocado',
            'town' => 'paraparaumu',
            'fullLicence' => true
        ),
        'Annie' => array(
            'age' => 17,
            'colour' => 'blue',
            'food' => 'pizza',
            'town' => 'Taita',
            'fullLicence' => false
        )
    );




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



         <?php
            // foreach ($class as $classMember => $details) {
            //     var_dump($details);
            //     echo '<div>';
            //     echo '<h3>'.$classMember.'</h3>';
            //     echo '<p>'.$details['age'].' years old</p>';
            //     echo '</div>';
            // }
          ?>


          <!-- <?php foreach ($class as $classMember => $details) { ?>
              <div class ="">
                  <h3><?php echo $classMember; ?></h3>
                  <p><?php echo $details['age']; ?> years old</p>
                  <p>Their favourite food is <?php echo $details['food']; ?></p>
                  <p>Their favourite colour is <?php echo $details['colour']; ?></p>
                  <p>They live in <?php echo $details['town']; ?></p>
                  <?php if ($details['fullLicence']===true) { ?>
                      <p>They have their full licence</p>
                  <?php } else { ?>
                        <p>They don't have full licence</p>
                  <?php } ?>
                  <hr>
              </div>
          <?php } ?> -->


          <!-- : endforeach instead of { } -->


            <?php foreach ($class as $classMember => $details): ?>
                <div class ="">
                    <h3><?php echo $classMember; ?></h3>
                    <p><?php echo $details['age']; ?> years old</p>
                    <p>Their favourite food is <?php echo $details['food']; ?></p>
                    <p>Their favourite colour is <?php echo $details['colour']; ?></p>
                    <p>They live in <?php echo $details['town']; ?></p>
                    <?php if ($details['fullLicence']===true): ?>
                        <p>They have their full licence</p>
                    <?php else: ?>
                          <p>They don't have full licence</p>
                    <?php endif; ?>
                    <hr>
                </div>
            <?php endforeach; ?>




    </body>
</html>
