<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>register/sign up page</title>
  </head>
  <style>
    body{
        background-image:url("https://img.freepik.com/free-photo/office-supplies_23-2148103974.jpg?size=626&ext=jpg");
        background-size:cover;
        background-repeat:no-repeat;
        background-attachment:fixed;
    }
    div>a.navbar-brand{
     white-space:normal;
    }
    </style>

  <body>
  <div class="container-fluid text-center" style="height:auto;background:black;">
  <a class="navbar-brand" href="?php echo 'register.php'; ?>"><h2>EventMasters Registration</h2></a>
</div>

<?php
    $showAlert= false;
    $showError=false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_name = $_POST['u-name'];
        $pass_word = $_POST['pass'];
        

      // Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);
// Die if connection was not successful
//if (!$conn){
    //die("Sorry we failed to connect: ". mysqli_connect_error());
//}
//else{
    //echo "Connection was successful<br>";
//}

// Create a db
$sql = "CREATE DATABASE logindatabase";
$result = mysqli_query($conn, $sql);

//if($result){
    //echo "The db was created successfully!<br>";
//}
//else{
    //echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
//}
 
// Variables to be inserted into the table
//$user_name = $_POST['u-name'];
//$pass_word = $_POST['pass'];

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "logindatabase";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "CREATE TABLE `logintable` ( `username` VARCHAR(10) , `password` VARCHAR(10),UNIQUE (username))";

$result = mysqli_query($conn, $sql);

$existSql = "SELECT * FROM `logintable` WHERE username = '$user_name'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
        // $exists = false; 
        
        
    



// Die if connection was not successful
//if (!$conn){
    //die("Sorry we failed to connect: ". mysqli_connect_error());
//}
//else{
    //echo "Connection was successful<br>";
//}

// Create a table in the db


// Check for the table creation success
//if($result){
    //echo "The table was created successfully!<br>";
//}
//else{
    //echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
//}
  

// Sql query to be executed
$hash = password_hash($pass_word, PASSWORD_DEFAULT);
$sql = "INSERT INTO `logintable` (`username`, `password`) VALUES ('$user_name', '$hash')";
$result = mysqli_query($conn, $sql);
if($result)
{
  $showAlert =true;
  header("location:index.php");
}
else{
  $showError = "Failure";
}

}

// Add a new login-detail to the login table in the database
//if($result){
    //echo "The record has been inserted successfully successfully!<br>";
//}
//else{
    //echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
//}
  }

    
?>


<?php
    //if($showAlert){
    //echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
       // <strong>Success!</strong> Your account is now created and you can login
       // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //<span aria-hidden="true">&times;</span>
        //</button>
    //</div> ';
 // }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

<div class="container mt-3">
<h1>Please enter your username and password</h1>
    <form action="register.php" method="post">
    <div class="form-group">
        <label for="u-name">User Name</label>
        <input type="u-name" name="u-name" class="form-control" minlength="10" id="u-name" required>
        <small id="u-name" class="form-text text-muted">We'll never share your username and password with anyone else.</small>
        <small id="u-name" class="form-text text-muted">minimum length of username is 10</small>
    </div>
    <div class="form-group">
        <label for="pass">Password</label>
        <input type="password" class="form-control" id="pass" name="pass" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        <small id="u-name" class="form-text text-muted">Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</small>
    </div>
    
    <button type="submit" class="btn btn-primary"><a>Register</a></button>
    </form>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>