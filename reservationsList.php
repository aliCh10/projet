<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->

    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">A&A cars</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu" href="usersList.html"><i class="fa fa-bar-chart-o fa-3x"></i> Users</a>
                    </li>
                    <li>
                        <a href="carsList.html"><i class="fa fa-bar-chart-o fa-3x"></i> Cars</a>
                    </li>
                    <li>
                        <a href="reservationsList.html"><i class="fa fa-bar-chart-o fa-3x"></i> Reservations</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div style="color: white;
                    padding: 15px 50px 5px 50px;
                    float: right;
                    font-size: 16px;">
                        <a href="createReservations.php" class="btn btn-success">Create new reservation</a>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                All users
                            </div>
                            <?php
                            require 'reservation.php';
                            $u = new Reservation(null, null, null, null, null, null);

                            // Créer une instance de la classe 'users'

                            // Appeler la fonction 'display' sur l'objet 'users'
                            //$userObj->display($pdo);

                            $u->display($pdo);
                            $rows = $u->display($pdo);
                            ?>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">




                                        <thead>
                                            <tr>
                                                <th>Id_user</th>
                                                <th>Immatriculation</th>
                                                <th>date de début </th>
                                                <th>date de fin</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        while ($res = $rows->fetch()) { ?>
                                            <tbody>
                                                <th><?php echo $res['id_u'] ?></th>
                                                <th><?php echo $res['immatriculation'] ?></th>
                                                <th><?php echo $res['date_deb'] ?></th>
                                                <th><?php echo $res['date_fin'] ?></th>
                                                <th><?php echo $res['status'] ?></th>

                                                <th>
                                             <button class="btn btn-warning center" name="up">

                                            <a href="updateReserv.php?id=<?php echo $res['id_reservation']?>" >update </a>
                                            </button>
                                           </th>
                                        <th class="center"><button type="button" class="btn btn-danger center"  name="del">
                                            <a href="reservationList.php?id=<?php echo $res['id_reservation']?> " > delete</a>
                                        </button></th>

                                            </tbody>
                                        <?php  } ?>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
                <!-- /. PAGE WRAPPER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
            <!-- /. WRAPPER  -->
            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
            <!-- JQUERY SCRIPTS -->
            <script src="assets/js/jquery-1.10.2.js"></script>
            <!-- BOOTSTRAP SCRIPTS -->
            <script src="assets/js/bootstrap.min.js"></script>
            <!-- METISMENU SCRIPTS -->
            <script src="assets/js/jquery.metisMenu.js"></script>
            <!-- DATA TABLE SCRIPTS -->
            <script src="assets/js/dataTables/jquery.dataTables.js"></script>
            <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
            <script>
                $(document).ready(function() {
                    $('#dataTables-example').dataTable();
                });
            </script>
            <!-- CUSTOM SCRIPTS -->
            <script src="assets/js/custom.js"></script>
     



</body>

</html>