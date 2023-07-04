<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="home-page.css">

    <title>home-page</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home-page.php">EventMasters</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo 'about.php'; ?>">About<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo 'register.php'; ?>">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#add_event">Create An Event</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo 'view.php'; ?>">View All Events</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="<?php echo 'search.php'; ?>">Search-Events</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="<?php echo 'contact.php'; ?>">Contact Us</a>
      </li>  
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="button"><a href="<?php echo 'logout.php'; ?>">Logout</a></button>
    </form>
  </div>
</nav>
<!--banner-->
<div class="banner">
    <div class="border"> </div>
    <h2>The Event Masters</h2>
    <p>An event organizing company</span></p>
    <div class="border border-bottom"> </div>
  </div>

 <!--Slider-->
<div id="slider">  
  <div class="slide" style="background:coral;">
     <img src="event management 1.jpeg" >
  </div>
 
  <div class="slide" style="background:crimson;">
    <img src=" event management 2.jpeg" >
  </div>
  
  <div class="slide" style="background: #6edf10;">
    <img src="event management 3.jpeg" >
  </div>

  <div class="slide" style="background: #6edf10;">
    <img src="event management 4.jpeg" >
  </div>
  
  <!--Controlling arrows-->
  <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</span>
  <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</span>
</div>
  <div id="dots-con">
 <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
 </div>

<div class="container"></div>
<footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title">About</h2>
      <ul>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Careers</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Resources</h2>
      <ul>
        <li><a href="#">Docs</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">eBooks</a></li>
        <li><a href="#">Webinars</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Contact</h2>
      <ul>
        <li><a href="#">Help</a></li>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Advertise</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Stay Updated</h2>
      <p>Subscribe to our newsletter to get our latest news.</p>
      <form>
        <input type="email" name="email" placeholder="Enter email address">
        <input type="submit" value="Subscribe">
      </form>
    </div>
  </section>

  <!-- Footer legal -->
  <section class="ft-legal">
    <ul class="ft-legal-list">
      <li><a href="#">Terms &amp; Conditions</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li>&copy; 2019 Copyright Nowrap Inc.</li>
    </ul>
  </section>
</footer>
 <!-- Create an event -->
    <div class="modal fade" id="add_event" tabindex="-1" aria-labelledby="add_event" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create an Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                 <!-- <div class="mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="id" name="id" required>
                    </div>-->
                  <div class="mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Event-Name" name="event_name" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Event-Location" name="event_location" required>
                    </div>
                    <div class="mb-3">
                        <input type="datetime-local" class="form-control form-control-sm" name="start_date_time" title="Start-Date-Time" required >
                    </div>
                    <div class="mb-3">
                        <input type="datetime-local" class="form-control form-control-sm" required title="End-Date-Time" name="end_date_time" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Type-of-Event" name="type_of_event" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success btn-block" name="submit">Add an Event</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id=$_POST['id'];
        $Eventname = $_POST['event_name'];
        $Eventlocation = $_POST['event_location'];
        $Startdatetime = $_POST['start_date_time'];
        $Enddatetime=$_POST['end_date_time'];
        $Typeofevent=$_POST['type_of_event'];

         
      // Connection to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successful
//if (!$conn){
    //die("Sorry we failed to connect: ". mysqli_connect_error());
//}
//else{
    //echo "Connection was successful<br>";
//}

// Create a db
$sql = "CREATE DATABASE EVENTDETAILS";
$result = mysqli_query($conn, $sql);

//if($result){
    //echo "The db was created successfully!<br>";
//}
//else{
    //echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
//}

      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "EVENTDETAILS";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
     // Die if connection was not successful
//if (!$conn){
    //die("Sorry we failed to connect: ". mysqli_connect_error());
//}
//else{
    //echo "Connection was successful<br>";
//}

        // Create a table in the db
$sql = "CREATE TABLE `eventtable` ( `id` int AUTO_INCREMENT ,`eventname` LONGTEXT , `eventlocation` LONGTEXT,`startdatetime` DATETIME,`enddatetime` DATETIME,`typeofevent` LONGTEXT)";
$result = mysqli_query($conn, $sql);

//Check for the table creation success
//if($result){
    //echo "The table was created successfully!<br>";
//}
//else{
    //echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
//}


$sql = "INSERT INTO `eventtable` (`eventname`, `eventlocation`, `startdatetime`, `enddatetime`,`typeofevent`) VALUES ('$Eventname', '$Eventlocation', '$Startdatetime','$Enddatetime','$Typeofevent')";
        $result = mysqli_query($conn, $sql);

        //if($result){
          //echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          //<strong>Success!</strong> Your entry has been submitted successfully!
         //<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          //<span aria-hidden="true">×</span>
          //</button>
        //</div>';
        //}
        //else{
            //echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        //}

 }
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>