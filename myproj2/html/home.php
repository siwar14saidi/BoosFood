
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
        <link href="./css/styles.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&family=Dosis&family=Epilogue:ital,wght@0,100;1,600&family=Grenze+Gotisch&family=Josefin+Sans:ital,wght@0,400;1,300&family=Lemonada:wght@500&family=M+PLUS+1p&family=Niconne&family=Permanent+Marker&family=Ropa+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&family=Dosis&family=Epilogue:ital,wght@0,100;1,600&family=Grenze+Gotisch&family=Josefin+Sans:ital,wght@0,400;1,300&family=Lemonada:wght@500&family=M+PLUS+1p&family=Niconne&family=Permanent+Marker&family=Ropa+Sans:ital@0;1&display=swap" rel="stylesheet"> 
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                
            <img src="../images/LogoBossFoodddd.svg" style="margin-top: -20PX;" width="280px" >
                <button class="font navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto" >
                        <li class="font nav-item"><a class="nav-link js-scroll-trigger" href="#services" >Services</a></li>
                        <li class="font nav-item"><a class="nav-link js-scroll-trigger" href="#about" >About</a></li>
                        <li class="font nav-item"><a class="nav-link js-scroll-trigger" href="#team" >Team</a></li>
                        
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
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" >
                        <a class="font dropdown-item" href="home.php">
                          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          accuiel
                        </a>
                        <a class="font dropdown-item" href="minichat.php">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          contact
                          </a>
                         
                       
                        <a  class="font dropdown-item" href="../controle/usercontrole.php?event=logout"style="color: rgb(255, 217, 0);">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                 
              </div>    
            </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="hello" >
                  <h1 class="font text">Welcome To BossFood </h1>
              </div>
                
<div class="hi" >
<!--   <SECTION alig="text-center"><IMG src="../images/clickhere.gif" width="150" height="100"></IMG></SECTION>--> 
<button  onclick="location.href='HealthyFood.php'" type="button" class="text">

  Healthy Food </button>
  <button onclick="location.href='SpecialFood.php'" type="button" class="submit2">
    Special Food </button>
  <button onclick="location.href='NormalFood.php'" type="button" class="submit">
   Normal Food </button>
 
    

</div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="font3 section-heading text-uppercase">Services</h2>
                   
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                          
                        </span>
                        <h4 class="font3my-3">WebSite or application</h4>
                        <p class="font2 text-muted">Entering a website via the internet or by downloading the application </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="font3 my-3">shopping</h4>
                        <p class="font2 text-muted">Choose your favorite types of food HealthyFood , SpecialFood , NormalFood</p>
                     
                      
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-bus fa-stack-1x fa-inverse" aria-hidden="true"></i>
                        </span>
                        <h4 class="font3 my-3">Receipt</h4>
                        <p class="font2 text-muted">Delivery will be done within seconds</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="font3 section-heading text-uppercase">About</h2>
    
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class=" timeline-heading">
                                <h4 class="font3">2013-2016</h4>
                                <h4 class="font3 subheading">Opening of the restaurant</h4>
                            </div>
                            <div class="timeline-body"><p class="font2 text-muted">The opening of the first restaurant in major Tunis</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="font3">March 2017</h4>
                                <h4 class="font3 subheading">Increased requests and development decision</h4>
                            </div>
                            <div class="timeline-body"><p class="font2 text-muted">With the admiration of many customers at our restaurants, we decided to work by delivering to your home</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="font3">December 2018</h4>
                                <h4 class="font3 subheading ">growth BoossFood</h4>
                            </div>
                            <div class="timeline-body"><p class="font2 text-muted">boosfood Food offers home delivery of meals boissons, drinks 🍾, desserts 🍩, etc.
                                Order and have your dishes and products delivered to you from the best restaurants near you.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="font3">July 2019</h4>
                                <h4 class="font3 subheading">new subsidiary company</h4>
                            </div>
                            <div class="timeline-body"><p class="font2 text-muted">We opened two new branches in Sfax and Sousse</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4 class="fon3">
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="font3 section-heading text-uppercase">Our Amazing chef</h2>
                
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4 class="font3">chef mohamed</h4>
                            <p class="font2 text-muted">chef mohamed </p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                            <h4 class="font3">chef hassen</h4>
                            <p class="font2 text-muted">chef hassen</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4 class="font3">chef wajdi</h4>
                            <p class="font2 text-muted">chef wajdi</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class=" font3 large text-muted">They are better three top chef in the world</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-6 my-3">
                        <a ><img class="img-fluid d-block mx-auto"  src="../images/Carte-Mastercard.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a><img class="img-fluid d-block mx-auto" src="../images/pro.jpg" alt="" /></a>
                    </div>

                    <div class="col-md-4 col-sm-6 my-3">
                        <a ><img class="img-fluid d-block mx-auto" src="assets/img/logos/Digicard.jpg" alt="" /></a>
                    </div>
                  
                    
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="font col-lg-4 text-lg-left" style="font-size: 20px;">BossFood</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="./js/scripts.js"></script>
    </body>
</html>


