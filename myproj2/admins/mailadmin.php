<?php
require_once "../configdb/db_connector.php";

session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Now UI Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                <?php       
                foreach($_SESSION as $email)
                {
                print"$email";
                }
                                        ?>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="index.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

              
                    <li>
                        <a href="add_admin.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="tableHealthyFood.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Table Healthy Food</p>
                        </a>
                    </li>
                    <li >
                        <a href="tableNormalFood.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Table Normal Food</p>
                        </a>
                    </li>
                    <li>
                        <a href="tableSpecialFood.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Table Special Food</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="mailadmin.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>mail admin</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Table List</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../controle/usercontrole.php?event=logout">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Mail</h4>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <?PHP   
                                       $server = "localhost";
                                       $database = "testa";
                                       $username = "root";
                                       $password = "";
                                       $mysqli = new mysqli($server, $username, $password, $database);
                                   
                                    $query = "SELECT * FROM  mail ";
                                    
                                  
                                 echo ' <table id="books" class="table">   
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>username</th>
                                                <th>email</th>
                                                <th>Phone</th>
                                                <th>messages</th>
                                                <th>#</th>
                                              
                                            </tr>
                                         
                                        </thead>   <tbody>' ;
                                        if ($result = $mysqli->query($query)) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<tr> 
                                                <td>'.$row["id"].'</td> 
                                                 <td>'.$row["username"].'</td>
                                                   <td>'.$row["email"].'</td> 
                                                   <td>'.$row["phone"].' </td>
                                                   <td>'.$row["messages"].'</td>
                                                   ';?>
                                                   <td> <a   href="../controle/mailadmincontrole.php?event=delete&&idMail=<?php echo''.$row["id"].'';  ?>" class="btn btn-danger"> <i class="far fa-trash-alt"></i> </a></td> 
                                                 
                                                 
                                             <?php
                                             echo'    
                                               </tr>    '       ;   }
                                               }
   
                            echo'                 
                               </tbody>

                               </table>
                                   '          ;
                     
                           ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-header panel-header-sm">
            </div>
                   
    </body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>

</html>