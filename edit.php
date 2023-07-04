<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> Edit Event</title>
</head>
<body>
     <?php require 'nav.php' ?>
    <?php
        $id=$_GET['id'];

        $servername="localhost";
        $username="root";
        $password="";
        $database="EVENTDETAILS";

        $conn=mysqli_connect($servername,$username,$password,$database);
        $sql = "SELECT * FROM `eventtable` WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $id = $row['id'];
       $eventname =$row['eventname'];
       $eventlocation = $row['eventlocation'];
       $startdatetime = $row['startdatetime'];
       $enddatetime = $row['enddatetime'];
       $typeofevent = $row['typeofevent'];


    ?>
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <h2> Edit Events</h2>
                            <hr>
                            <form action="update.php" method="post">
                               <div class="form-group">
                                   <!-- <label for="id">id</label>-->
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $id;?>" placeholder="id" required>
                                </div>

                                <div class="form-group">
                                    <label for="event-name">Event-Name</label>
                                    <input type="text" name="event_name" class="form-control" value="<?php echo $eventname; ?>" placeholder="Event Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="event-location">Event-Location</label>
                                    <input type="text" name="event_location" class="form-control" value="<?php echo $eventlocation; ?>" placeholder="Event Location" required>
                                </div>
                                <div class="form-group">
                                    <label for="start-date-time">start-date-time</label>
                                    <input type="datetime-local" name="start_date_time" class="form-control" value="<?php echo $startdatetime; ?>" title="Start-Date-Time" required>
                                </div>
                                <div class="form-group">
                                    <label for="end-date-time">End-Date-Time</label>
                                    <input type="datetime-local" name="end_date_time" class="form-control" value="<?php echo $enddatetime; ?>" title="End-Date-Time"required>
                                </div>
                                <div class="form-group">
                                    <label for="type-of-event">Type-Of-Event</label>
                                    <input type="text" name="type_of_event" class="form-control" value="<?php echo $typeofevent; ?>" placeholder="Type of Event" required>
                                </div>

                                <button type="submit" name="update" class="btn btn-primary"> Update Data </button>

                            </form>

                        </div>
                    </div>
                </div>

                </div>
            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
</body>
</html>