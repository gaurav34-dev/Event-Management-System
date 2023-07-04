<?php

$id = $_GET['id'];

$servername="localhost";
$username="root";
$password="";
$database="EVENTDETAILS";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql="DELETE FROM `eventtable` WHERE id=$id";

$delete=mysqli_query($conn,$sql);

if($delete)
{    
	header("Location: home-page.php");
}