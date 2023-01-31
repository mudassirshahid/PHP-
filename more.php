<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>More PHP</title>
  </head>
  <body>
    <h1 class="text-center">Learn About PHP</h1>
    <div class="container-fkuid text-center mt-5">
    <p>Can I Go?</p>
    <?php
    $age = 20;
    if($age>18){
        echo "Yes GO!";  
    }
    else {
        echo "No You're Underage";
    }

    echo "<br>";
    echo "<br>";
    echo "<h1>Arrays</h1>";
    echo "<br>";
    $languages = array("Python", "Javascript", "PHP", "NodeJS");
    echo "<br>";
    echo $languages[0];
    echo "<br>";
    echo $languages[1];
    echo "<br>";
    echo count($languages);

    //LOOPS IN PHP 

    echo "<br>";
    echo "<br>";
    echo "<h1>Loops</h1>";
    echo "<br>";
    $a = 0;
    while ($a <= 10) {
      echo "<br>The value of a from the while loop is: ";
      echo $a;
      $a++;
    }
    echo "<br>";
    echo "<br>";


    //ITERATING ARRAYS IN PHP USING WHILE LOOPS IN PHP 
    $a = 0;
    while ($a < count($languages)) {
      echo "<br>The value of language is: ";
      echo $languages[$a];
      $a++;
    }
    echo "<br>";
    echo "<br>";
    
    //DO WHILE LOOP    DIFFERENCE B/W WHILE AND DO WHILE IS IN DO WHILE FIRST VALUE EXECUTE THEN CONDITION CHECK IN WHILE LOOP  
    $a = 0;
    do {
      echo "<br>The value of a from the do while loop is: ";
      echo $a;
      $a++;
    } while ($a < 10);

    echo "<br>";
    echo "<br>";


    //FOR LOOP 
    for ($a=0; $a < 10; $a++) { 
      echo "<br>The value of a from the for loop is: ";
      echo $a;
    }
    echo "<br>";
    echo "<br>";


    //FOREACH LOOP 
    foreach ($languages as $value) { 
      echo "<br>The value of language from the foreach loop is: ";
      echo $value;
    }


    //FUNCTIONS
    function printNumber($number){
      echo "<br>Your number is ";
      echo $number;
    }
    printNumber(50);


    echo "<br>";
    echo "<br>";

    //STRINGS
    echo "<h1>Strings</h1>";
    echo "<br>";
    echo "<br>";
    $str = "String Value";
    $length = strlen($str);
    echo "The length of this string is ".$length. " and this is the string concatenation";
    echo "<br>";
    echo "The word of this string is ". str_word_count($str). " and this is the string concatenation";
    echo "<br>";
    echo "The reverse of this string is ". strrev($str);
    echo "<br>";
    echo "The search of this string is ". strpos($str, 'ing');
    echo "<br>";
    echo "The replace string is ". str_replace('ing', '', $str);
    ?>

    
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>