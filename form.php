<?php
$insert = false;
if(isset($_POST['name'])){
//SET CONNECTION VARIABLES
$server = "localhost";
$username = "root";
$password = "";

//CREATE A DATABASE CONNECTION
$con = mysqli_connect($server, $username, $password);  //CONNECTION MAKE WITH DATABASE 

//TO CHECK THE CONNECTION MAKE WITH DATABASE USE THIS 

if(!$con){
    die("connection to this database failed due to" . 
    mysqli_connect_errno());
}
// echo "Success connecting to the db";


//COLLECT POST VARIABLES
// BELOW CODE AND FIELD LINK WITH EACH OTHER AND CREATED ACCORDINGLY
$name = $_POST["name"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];
//THERE IS TRAVEL TRAVEL IN INSERT FIRST ONE IS DB NAME AND SECOND ONE IS TABLE NAME
$sql = " INSERT INTO `travel`.`travel` ( `name`, `age`, `phone`, `email`, `password`, `dt`) 
VALUES ('$name', '$age', '$phone', '$email', '$password', 
current_timestamp());";
// echo $sql;


//TO INSERT WITH DATABASE  -> OBJECT OPERATOR
//EXECUTE THE QUERY
if($con->query($sql) == true){
        // echo "Successfully inserted";

        //FOR SUCCESSFUL INSERTION
        $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}


//CLOSE THE DATABASE CONNECTION IMP TO CLOSE 
$con->close();          //CONNECTION CLOSED WHEN WORK DONE 
}
?>


<!-- HTML -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Travel Website</title>
  </head>
  <body>
    <img class="travel-img" src="travel.jpg" alt="travel" />
    <div class="container-fluid p-0">
      <h1 class="text-center welcome-travel">Welcome to Travel Form</h1>
      <p class="text-dark text-center mt-4">
        Enter your details and submit this form to confirm your participation in
        the trip
      </p>
      <?php 
      if($insert == true){
      echo "<h2 class='bg-light p-2 text-center mt-4'>
        Thanks for submitting your form.
      </h2>";
    }
      ?>
    </div>
    <div class="container mt-5">
      <form action="form.php" method="post"    class="form-bg text-white p-5 rounded">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Your Name</label>
              <input
                type="text"
                name="name"
                class="form-control"
                id="name"
                aria-describedby="nameHelp"
                placeholder="Enter your name"
                required/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="age">Your Age</label>
              <input
                type="text"
                name="age"
                class="form-control"
                id="age"
                aria-describedby="ageHelp"
                placeholder="Enter your age"
              />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone">Phone</label>
              <input
                type="phone"
                name="phone"
                class="form-control"
                id="phone"
                aria-describedby="phoneHelp"
                placeholder="Enter your number"
              required/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">Email address</label>
              <input
                type="email"
                name="email"
                class="form-control"
                id="email"
                aria-describedby="emailHelp"
                placeholder="Enter email"
                required/>
              <small id="emailHelp" class="form-text text-muted"
                >We'll never share your email with anyone else.</small
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="password">Password</label>
              <input
                type="password"
                name="password"
                class="form-control"
                id="password"
                placeholder="Password"
                required/>
            </div>
          </div>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" />
          <label class="form-check-label" for="exampleCheck1"
            >Check me out</label
          >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!-- COPY FROM DATABASE AFTER TESTING FIRST TESTING -->

 <!-- INSERT INTO `travel` (`sno`, `name`, `age`, `phone`, `email`, `password`, `dt`) VALUES ('1', 'testname', '3', '9999999999999', 'this@this.com', 'this is my first message.', current_timestamp());  -->

