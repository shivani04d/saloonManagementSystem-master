<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Beauty Book System</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <?php include_once('includes/header.php'); ?>
    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 ">
                    <h1 class="hero-title">Beauty Book System</h1>
                    <p class="hero-text"><strong>Beauty salone Fashion for Woman</strong> </p>
                    <a href="appointment.php" class="btn btn-default">Make an Appointment</a>
                </div>
            </div>
        </div>
    </div>

    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="images/parlor.jpg" alt="Parlor Image"
                        class="img-responsive"></div>
                        
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="well-block">
                        <?php

                        $ret = mysqli_query($con, "select * from tblpage where PageType='aboutus' ");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($ret)) {
                            ?>
                            <h1><?php echo $row['PageTitle']; ?></h1>
                            <h5 class="small-title ">Best Experience Ever</h5>
                            <p><?php echo $row['PageDescription']; ?></p><?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once('includes/footer.php'); ?>
    <!-- /.footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <!-- sticky header -->
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>