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
<form method="post" enctype="multipart/form-data">
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
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a class="active-menu" href="usersList.php"><i class="fa fa-bar-chart-o fa-3x"></i> Users</a>
                    </li>
                    <li>
                        <a  href="carsList.html"><i class="fa fa-bar-chart-o fa-3x"></i> Cars</a>
                    </li>
						   <li  >
                        <a   href="reservationsList.html"><i class="fa fa-bar-chart-o fa-3x"></i> Reservations</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="bg-light text-center rounded p-5">
                    <h1 class="mb-4">Create a new Reservation</h1>
                    <form>
                        
                          <div class="row g-3" style="padding: 16px">  
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="id_u" name="id_u" />
                                    </div>
                                </div>
                        <div class="row g-3" style="padding: 16px">  
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="immatriculation" name="immatriculation" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="date" placeholder="date_deb" name="date_deb"/>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" placeholder="date_fin" name="date_fin" />
                                        </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control bg-white border-0" placeholder="status "  name="status" />
                                    </div>
                            </div>
                           
                        </div>
                      
                        <div class="row">
                            <button class="btn btn-primary w-100 py-3" type="submit" name="aj">Create a new Reservation </button>
                        </div>
                    </div>
                    </form>
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
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <?php
    require 'reservation.php';
    $pdo = new PDO('mysql:host=localhost;dbname=datalocation', 'root', '');
    if (isset($_POST['aj'])) {
        $id_u = isset($_POST['id_u']) ? $_POST['id_u'] : "";
        $immatriculation = isset($_POST['immatriculation']) ? $_POST['immatriculation'] : "";
        $date_deb = isset($_POST['date_deb']) ? $_POST['date_deb'] : "";
        $date_fin = isset($_POST['date_fin']) ? $_POST['date_fin'] : "";
        $status = isset($_POST['status']) ? $_POST['status'] : "";
     $q = new Reservation(null,$id_u, $immatriculation, $date_deb, $date_fin, $status);
    $result = $q->insertion($pdo);
    if ($result) {
      echo "La réservation a été créée avec succès.";
    } else {
      echo "Erreur lors de la création de la réservation.";
    }
}
    
      ?>
    
   
</body>
</html>
