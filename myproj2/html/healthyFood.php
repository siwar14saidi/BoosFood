
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BoosFood</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/HealthyFood.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&family=Dosis&family=Epilogue:ital,wght@0,100;1,600&family=Grenze+Gotisch&family=Josefin+Sans:ital,wght@0,400;1,300&family=Lemonada:wght@500&family=M+PLUS+1p&family=Niconne&family=Permanent+Marker&family=Ropa+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&family=Dosis&family=Epilogue:ital,wght@0,100;1,600&family=Grenze+Gotisch&family=Josefin+Sans:ital,wght@0,400;1,300&family=Lemonada:wght@500&family=M+PLUS+1p&family=Niconne&family=Permanent+Marker&family=Ropa+Sans:ital@0;1&display=swap" rel="stylesheet"> 
      
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
            <img src="../images/LogoBossFoodddd.svg" width="290px" >
                <button class="font navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                    
                      <li><a style="color: #fff;" href="ShoppingCard.php"><i class="font2 fa fa-shopping-cart fa-1x" style="color: #fff;"></i> shopping card
                        <span id="shopcartnbr" class=" font ml-3 badge badge-pill badge-light" >0</span> </a></li>
                    </ul>
                    
                </div>
                <div>
                <div class=" col-md-12">  
                                 <a class="font nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: #fff;">
                   <?php       
                foreach($_SESSION as $email)
                {
                print"$email";
                }
                                        ?>
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="home.php">
                          <i class="font fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          accuiel
                        </a>
                        <a class="font2 dropdown-item" href="minichat.php">
                            <i class="font fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          contact
                          </a>
                         
                        <div class="dropdown-divider"></div>
                        <a  class="dropdown-item" href="../controle/usercontrole.php?event=logout"style="color: rgb(255, 217, 0);">
                            <i class=" font fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                      </div>
            </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="font" style="font-size: 40px;">Healthy Food</div>
                
              </div>
            </div>
        </header>
        
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="font2 section-heading text-uppercase">List Of The Healthy Food</h2>
                    <br>
                </div>
                <div class="row">
                    
                <?PHP   
                                       $server = "localhost";
                                       $database = "testa";
                                       $username = "root";
                                       $password = "";
                                       $mysqli = new mysqli($server, $username, $password, $database);
                                   
                                    $query = "SELECT * FROM  food ";
                                    
              
                    if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_assoc()) {?> 
                                 <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                                                    <div class="portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('<?php echo''.$row['name'].'';?>')" class="btn btn-danger text-white btn-block"  href="#" >
                                             <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                                </div>
                                                
                                          
                                            <img  class="img-fluid" <?php echo 'src="../controle/uploads/'.$row['image'].'"';?> alt=".">
                                        </a>
                                       <div class="portfolio-caption">
                                           <div class="font2 portfolio-caption-heading"><?php echo ''.$row["name"].'';?></div>
                                       <br>
                                       <div class="font3 portfolio-caption-subheading text-muted"> <?php echo''.$row["price"].'$'?></div>
                                         <?php echo'   </div>
                                        </div>     
                   
                       </div>        ';
                                        }

                                    
                                    }
                                    ?>  
              </section>
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="font col-lg-4 text-lg-left" style="font-size: 20px;">BoosFood</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  
                </div>
            </div>
        </footer>
      
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="modal-body">
              
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="./js/food.js"></script>
        <script src="js/scripts.js"></script>

    </body>
</html>






