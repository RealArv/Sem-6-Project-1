<?php
    session_start();

    if(isset($_SESSION['a']))
    {
        
    }
    else
    {
        header("location:home.html");
    }
?> 

<?php
     
 
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>AGS</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
     
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <div class="navbar custom-navbar navbar-light navbar-expand-lg nav-blo" role="navigation">
               <div class="nav-welcome mr-auto">
                    <a href="" class="navbar-brand custom-heading"><?php echo "WELCOME&nbsp" .$_SESSION['username']; ?></a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#nav-sum"></button>
               </div>

               <!-- MENU LINKS -->

               <div id="#nav-sum" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                         <li class="nav-item active"><a href="#top" class="smoothScroll">Home</a></li>
                         <li class="nav-item"><a href="#feature" class="smoothScroll">Features</a></li>
                         <li class="nav-item"><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="logout.php" class="smoothScroll">Logout</a></li>
                    </ul>
               </div>
     </div>


     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Learn from the best!</h1>
                                             <h3>You can ask your doubts directly to our professors</h3>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Start your journey with us</h1>
                                             <h3>The courses are made by people from different communities around the globe</h3>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Having any difficulties?</h1>
                                             <h3>Go on below and contact us. Tell us what's bothering you</h3>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>

     <!-- feature -->
     <div id="feature" class="container-fluid font-change ">
        <div class="row my-row">

            <!-- left side-->
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 my-col bg-left text-edits">
                <!-- contents -->
               <div class="row justify-content-end my-row tint">
                <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 my-col margin-adjust padding-adjust">

                    <div class="row my-row padding-adjusts">
                        <h2 class="feature-h4">Latest Courses</h2>
                        <p class="text-large sub-heading-text">Our website offers users to expand and share their knowledge base with the entire world. Join us on this wonderful venture.</p>
                    </div>

                    <div class="row my-row margin-adjust">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 my-col mar">
                            <div class="row">
                                <div class="col-4 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-4 my-col mar">
                                    <img src="./images/icon.png" class="size-adjust" alt="">
                                </div>
                            </div>
                            <form action="form_new.html" method="post">
                                <h4>Create Course</h4>
                                <p class="text-large">Create your own course to help the community!</p>
                            <div class="row align-self-end padding-adjusts">
                                <button type="submit" class="btn btn-outline-primary">CREATE</button>
                            </div>
                         </form>
                        </div>

                        <!-- icon and 2nd text -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 my-col mar">
                            <div class="row">
                                <div class="col-4 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-4 my-col mar">
                                    <img src="./images/icon.png" class="size-adjust" alt="">
                                </div>
                            </div>
                            <form action="view_vipin.php" method="post">
                            <h4>View Courses</h4>
                            <p class="text-large"> Existing courses made by authors all over the world</p>
                            <div class="row align-self-end padding-adjusts">
                                <button type="submit" class="btn btn-outline-primary">VIEW</button>
                            </div>
                         </form>
                        </div>


                    </div>
                </div>    
               </div>
            </div>

            <!-- right side -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-0 col-xs-0 my-col bg-right"> 
            </div>
            
        </div>
      </div>

      <!-- PROFESSORS -->
     <section id="professors">
          <div class="container-fluid">
               <div class="row prof-mar custom-height">
                         <div class="col-sm-4 margin-adjust bg-prof-1">
                              <div class="row">
                                   <div class="text-center custom-margin-text">
                                        <form action="prof_form.html">
                                             <h4 class="font-size prof-color-left">TEACH ANYONE</h4>
                                             <p class="font-size-p prof-color-left">We are hiring!! Click on the link below to join us. You will get a chance to mentor students all over the world</p>
                                             <button type="submit" class="btn btn-outline-dark btn-lg btn-custom-left">CREATE</button>
                                        </form>
                                   </div>
                              </div>
                         </div>
                         <div class="col-sm-4 bg-left-pro rounded prof-mar custom-margin-prof">
                    </div>
                    <div class="col-sm-4 margin-adjust bg-prof-3">
                         <div class="row">
                              <div class="text-center custom-margin-text mar-right">
                                   <form action="prof_view.php">
                                        <h4 class="font-size prof-color-right">ASK FOR HELP</h4>
                                        <p class="font-size-p prof-color-right">We have many esteemed professors with vast knowledge from prestigous universities all around the world. </p>
                                        <button type="submit" class="btn btn-outline-light btn-lg btn-custom-right">VIEW</button>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="feedback.php" method="post">
                              <div class="section-title-1">
                                   <h2>Contact us <br><small>We love to talk!</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">
                    
                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder="Tell us what you want" name="message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="submit" value="Send Message">
                              </div>

                         </form>
                    </div>
                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>
               </div>
          </div>    
     </section>       
     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p><a href="mailto:youremail.co">iamawesome@gmail.com</a></p>
                              </address>
                              <div class="footer_menu">
                                   <h2>Quick Link</h2>
                                   <ul>                                                                           
                                        <li><a href="#">Terms & Conditions</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <!-- <div class="col-md-4 col-sm-12"></div>-->
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>