<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP Web</title>
  </head>
  <body>
    <h1 class="text-center">PHP BASICS</h1>

    <!-- THIS IS PHP SYNTAX -->
    <br/>
    <div class="text-center">
    <?php
    define('PI', 3.142);
    echo  "Hello and this is printed using php";   //WE USE ECHO TO SHOW CONTENT IN BROWSER ECHO WORKS LIKE THAT
    ?>

    <?php
    echo  "Hello Again";   //WE USE ECHO TO SHOW CONTENT IN BROWSER ECHO WORKS LIKE THAT
    
    $var1 = 10;
    $var2 = 10;
    echo $var1;
    echo $var2;

    echo $var1 + $var2;


    // OPERATOR IN PHP
    // Arithmetic Operator
    echo "<br>";
    echo "<br>";
    echo  "<h1>Arithmetic Operator</h1>";
    echo "<br>";
    echo "<br>";
    echo "Value of var1 * var2 is: ";
    echo "<br>";
    echo $var1 * $var2; 
    echo "<br>";
    echo  "Value of var1 + var2 is: ";
    echo "<br>";
    echo $var1 + $var2;
    echo "<br>"; 
    echo  "Value of var1 - var2 is: ";
    echo "<br>";
    echo $var1 - $var2;
    echo "<br>"; 
    echo  "Value of var1 / var2 is: ";
    echo "<br>";
    echo $var1 / $var2; 
    echo "<br>";

    // Assignment Operator
    echo "<br>";
    echo "<br>";
    echo  "<h1>Assignment Operator</h1>";
    echo "<br>";
    echo "<br>";
    $newVar = $var1;
    echo $newVar;
    echo "<br>";
    $newVar += 1;
    echo $newVar;
    echo "<br>";
    $newVar -= 1;
    echo $newVar;
    echo "<br>";
    $newVar *= 2;
    echo $newVar;
    echo "<br>";
    $newVar /= 2;
    echo $newVar;
    echo "<br>";

    // Comparison Operator
    echo "<br>";
    echo "<br>";
    echo  "<h1>Comparison Operator</h1>";
    echo "Value of 1==4 is: ";
    echo "<br>";
    echo var_dump(1==4);   //THIS FUNCTION USED TO TELL VARIABLE VALUE OR TYPE
    echo "<br>";
    echo "<br>";
    echo "Value of 1!=4 is: ";
    echo "<br>";
    echo var_dump(1!=4);
    echo "<br>";
    echo "<br>";
    echo "Value of 1>=4 is: ";
    echo "<br>";
    echo var_dump(1>=4);
    echo "<br>";
    echo "<br>";
    echo "Value of 1<=4 is: ";
    echo "<br>";
    echo var_dump(1<=4);
    


    // Increment/Decrement Operator
    echo "<br>";
    echo "<br>";
    echo  "<h1>Increment/Decrement Operator</h1>";
    echo "<br>";
    echo "<br>"; 
    // echo $var2++;
    // echo "<br>"; 
    // echo $var2;
    // echo "<br>"; 
    // echo $var2--;
    // echo "<br>"; 
    // echo $var2;
    // echo "<br>"; 
    // echo --$var2;
    // echo "<br>"; 
    // echo $var2;
    echo "<br>"; 
    echo ++$var2;
    echo "<br>"; 
    echo $var2;
    echo "<br>"; 

    // Logical Operator
    // and (&&)
    // or (||)
    // xor
    // ! (not)

    echo "<br>";
    echo "<br>";
    echo  "<h1>Logical Operators</h1>";

    echo "<br>";
    echo  "<h1>And Operator</h1>";
    $myVar = (true and true);
    $myVar2 = (false and true);
    $myVar3 = (false and false);
    $myVar4 = (true and false);
    echo "<br>";
    echo var_dump($myVar);
    echo "<br>";
    echo var_dump($myVar2);
    echo "<br>";
    echo var_dump($myVar3);
    echo "<br>";
    echo var_dump($myVar4);

    echo "<br>";
    echo "<br>";

    echo "<br>";
    echo  "<h1>Or Operator</h1>";
    $myVar = (true or true);
    $myVar2 = (false or true);
    $myVar3 = (false or false);
    $myVar4 = (true or false);
    echo "<br>";
    echo var_dump($myVar);
    echo "<br>";
    echo var_dump($myVar2);
    echo "<br>";
    echo var_dump($myVar3);
    echo "<br>";
    echo var_dump($myVar4);

    echo "<br>";
    echo "<br>";

    echo "<br>";
    echo  "<h1>Xor Operator</h1>";
    $myVar = (true xor true);
    $myVar2 = (false xor true);
    $myVar3 = (false xor false);
    $myVar4 = (true xor false);
    echo "<br>";
    echo var_dump($myVar);
    echo "<br>";
    echo var_dump($myVar2);
    echo "<br>";
    echo var_dump($myVar3);
    echo "<br>";
    echo var_dump($myVar4);

    echo "<br>";
    echo "<br>";

    ?>

    <?php

    // DATA TYPES IN PHP 
    // String 
    // Integer
    // Float
    // Boolean 
    // Array 
    // Object 
    echo "<h1>Data Types</h1> <br>";
    $var = "This is a string";
    echo var_dump($var);
    echo "<br>";
    $var = 55;
    echo "<br>";
    echo var_dump($var);
    echo "<br>";
    $var = 55.5;
    echo "<br>";
    echo var_dump($var);
    echo "<br>";
    $var = true;
    echo "<br>";
    echo var_dump($var);
    echo "<br>";
    $var = [1,2,3,4,5];
    echo "<br>";
    echo var_dump($var);
    echo "<br>";
    
  
    // SET CONSTANT VALUE ALWAYS TOP OF THE CODE IN PHP STARTING TAG DEFINE()

    echo "<br>";
    echo PI;    //DEFINE ABOVE CODE AT THE TOP
    ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>