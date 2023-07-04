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

    <title>View</title>
  </head>
  <style>
.table{
  /* min-width:100vh !important; */
}
.navbar{
  /* min-width:100vh !important; */
}
@media screen and (min-width: 470px) and (max-width:675px){
  .navbar{
    /* min-width:100vh !important; */
  }
}
    </style>
  <body>
     <?php require 'nav.php' ?>
<?php


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
$limit=3;

if(isset($_GET['page']))
{$page = $_GET['page'];
}
else
{
  $page=1;
}

$offset=($page-1)*$limit;
$sql = "SELECT * FROM `eventtable` ORDER BY id ASC LIMIT {$offset},{$limit}";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records of Event details found<br>";
?>

<div style="overflow-x: auto;">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Event-Name</th>
      <th scope="col">Event-Location</th>
      <th scope="col">Start-Date-Time</th>
      <th scope="col">End-Date-Time</th>
      <th scope="col">Type-Of-Event</th>
      <th scop="col" colspan=2 class="text-center">Action</th>
    </tr>
</thead>

<tbody>
<?php 
  while($row = mysqli_fetch_assoc($result)): ?>
    <?php $id=$row['id']; ?> 

    <tr>
      <td><?php echo $row['id']; ?> </td>
      <td><?php echo $row['eventname']; ?> </td>
      <td><?php echo $row['eventlocation']; ?> </td>
      <td><?php echo $row['startdatetime']; ?> </td>
      <td><?php echo $row['enddatetime']; ?> </td>
      <td><?php echo $row['typeofevent']; ?> </td>
  <?php echo "<td>
      <a href='edit.php?id=$id'><button type='button'class='btn btn-warning'>EDIT</button></a>
    </td>"; ?>
    <?php echo "<td>
      <a href='delete.php?id=$id'><button type='button'class='btn btn-danger'>DELETE</button></a>
    </td>"; ?>
    </tr>
  <?php endwhile; ?>
  </tbody>
</table>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "EVENTDETAILS";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
$sql1="SELECT * FROM `eventtable` ";
$result1=mysqli_query($conn,$sql1) or die("Query Failed.");
if(mysqli_num_rows($result1)>0)
{
  $total_records = mysqli_num_rows($result1);
  
  $total_page=ceil($total_records/$limit);
  echo'<ul class="pagination pagination-lg justify-content-center">';
  if($page>1){
  echo'<li><a class="page-link" href="view.php?page='.($page - 1).'">Prev<a></li>';
  }
  for($i=1;$i<=$total_page;$i++)
  {
    if($i==$page){
      $active = "li active";
    }
    else{
      $active="";
    }
   echo' <li class="'.$active.'"><a class="page-link" href="view.php?page='.$i.'">'.$i.'</a></li>';
  }
  if($total_page>$page)
  {
  echo'<li><a class="page-link" href="view.php?page='.($page + 1).'">Next</a></li>';
  }
  echo'</ul>';
}

?>
<!--pagination starts-->
<!--<nav aria-label="Page navigation example">
  
    
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    
  
</nav>-->
<!--pagination-ends-->


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>