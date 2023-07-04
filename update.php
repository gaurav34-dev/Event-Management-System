<?php
        $id=$_POST['id'];
        $Eventname = $_POST['event_name'];
        $Eventlocation = $_POST['event_location'];
        $Startdatetime = $_POST['start_date_time'];
        $Enddatetime=$_POST['end_date_time'];
        $Typeofevent=$_POST['type_of_event'];

        $servername="localhost";
        $username="root";
        $password="";
        $database="EVENTDETAILS";

        $conn=mysqli_connect($servername,$username,$password,$database);

        $sql="UPDATE `eventtable` SET `eventname`='$Eventname',`eventlocation`='$Eventlocation',`startdatetime`='$Startdatetime',`enddatetime`='$Enddatetime',`typeofevent`='$Typeofevent' WHERE id=$id";

        $update = mysqli_query($conn,$sql);

        if($update)
        {
        	header("Location: home-page.php");
        }




 ?>