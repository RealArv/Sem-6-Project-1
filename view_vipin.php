<?php
    include 'form_new.php';  
    session_start();
    
    if(isset($_SESSION['a']))
    {
        
    }
    else
    {
        header("location:home.html");
    }
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
     

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 

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
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="view_vipin.php" class="navbar-brand">WELCOME</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a class="nav-font" href="course_prof.php" class="smoothScroll">Course Profile</a>
                         <li><a class="nav-font" href="bleh.php" class="smoothScroll">Home</a>
                         <li><a class="nav-font" href="#view" class="smoothScroll">View</a>
                         <li><a class="nav-font" href="#contact" class="smoothScroll">Contact</a>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a class="nav-font" href="logout.php" class="smoothScroll">Logout</a>
                    </ul>
               </div>

          </div>
     </section>
     
        <div class="view-heading">
            <div class="heading-container">
                <div class="text-div"> View Courses
                </div>
            </div>
        </div>

     <section id="view">
        <div class="main-view-div">
            <div class="nav-div">
                <nav class="view-nav-class">
                    <ul class="view-items" id="myGroup">
                        <a href="#demo" class="view-list" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">All</a> 
                        <div class="row">
                        <div id = "demo" class="collapse view-content" data-parent="#myGroup">
                              <table class="table table-class">
                                   <thead>
                                        <tr>
                                             <th class="table-class">Name of the course</th>
                                             <th class="table-class">Number of lectures </th>
                                             <th class="table-class">Author</th>
                                             <th class="table-class">Goal-1</th>
                                             <th class="table-class ">Release&nbspdate</th>
                                             <th class="table-class">Action</th>
                                        </tr>
                                        <?php foreach ($files as $file): ?>
                                            <tr>
                                             <td><?php echo $file['name']; ?></td>
                                             <td><?php echo $file['lecture']; ?></td>
                                             <td><?php echo $file['author']; ?></td>
                                             <td><?php echo $file['goal1']; ?></td>
                                             <td><?php echo $file['publish_date']; ?></td>
                                             <td><a href="view_vipin.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                                             </tr>
                                          <?php endforeach;?>
                                   </thead>  
                              </table>
                          </div>
                          </div>
                        <a href="#demo1" class="view-list" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">Physics</a> 
                        <div id = "demo1" class="collapse view-content" data-parent="#myGroup">
                         <div class="">
                              <table class="table table-class">
                              <thead>
                                        <tr>
                                             <th class="table-class">Name of the course</th>
                                             <th class="table-class">Number of lectures </th>
                                             <th class="table-class">Author</th>
                                             <th class="table-class">Goal-1</th>
                                             <th class="table-class ">Release&nbspdate</th>
                                             <th class="table-class">Action</th>
                                        </tr>
                                        <?php     $con=mysqli_connect($servername,$username,$password,$dbname);
                                                  $sql = "SELECT* FROM form2 where subject='Physics'";
                                                  $result = mysqli_query($con, $sql);
                                                  $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                  foreach ($files as $file):
                                              ?>
                                            <tr>
                                            <td><?php echo $file['name']; ?></td>
                                            <td><?php echo $file['lecture']; ?></td>
                                            <td><?php echo $file['author']; ?></td>
                                            <td><?php echo $file['goal1']; ?></td>
                                            <td><?php echo $file['publish_date']; ?></td>
                                            <td><a href="view_vipin.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                                          </tr>
                                          <?php endforeach;?>
                                   </thead>  
                              </table>
                          </div>
                       </div>
                        <a href="#demo2" class="view-list" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">Chemistry</a> 
                        <div id = "demo2" class="collapse view-content" data-parent="#myGroup">
                         <div class="row">
                              <table class="table table-class">
                              <thead>
                                        <tr>
                                             <th class="table-class">Name of the course</th>
                                             <th class="table-class">Number of lectures </th>
                                             <th class="table-class">Author</th>
                                             <th class="table-class">Goal-1</th>
                                             <th class="table-class ">Release&nbspdate</th>
                                             <th class="table-class">Action</th>
                                        </tr>
                                        <?php     $sql = "SELECT* FROM form2 where subject='Chemistry'";
                                                  $result = mysqli_query($con, $sql);
                                                  $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                  foreach ($files as $file):
                                              ?>
                                            <tr>
                                            <td><?php echo $file['name']; ?></td>
                                            <td><?php echo $file['lecture']; ?></td>
                                            <td><?php echo $file['author']; ?></td>
                                            <td><?php echo $file['goal1']; ?></td>
                                            <td><?php echo $file['publish_date']; ?></td>
                                            <td><a href="view_vipin.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                                          </tr>
                                          <?php endforeach;?>
                                   </thead>
                              </table>
                          </div>
                       </div>
                        <a href="#demo3" class="view-list" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">Maths</a> 
                        <div id = "demo3" class="collapse view-content" data-parent="#myGroup">
                         <div class="">
                              <table class="table table-class">
                              <thead> 
                                        <tr>
                                             <th class="table-class">Name of the course</th>
                                             <th class="table-class">Number of lectures </th>
                                             <th class="table-class">Author</th>
                                             <th class="table-class">Goal-1</th>
                                             <th class="table-class ">Release&nbspdate</th>
                                             <th class="table-class">Action</th>
                                        </tr>
                                        <?php     $sql = "SELECT* FROM form2 where subject='Maths'";
                                                  $result = mysqli_query($con, $sql);
                                                  $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                  foreach ($files as $file):
                                              ?>
                                            <tr>
                                            <td><?php echo $file['name']; ?></td>
                                            <td><?php echo $file['lecture']; ?></td>
                                            <td><?php echo $file['author']; ?></td>
                                            <td><?php echo $file['goal1']; ?></td>
                                            <td><?php echo $file['publish_date']; ?></td>
                                            <td><a href="view_vipin.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                                          </tr>
                                          <?php endforeach;?>
                                   </thead>
                              </table>
                          </div>
                       </div>
                        <a href="#demo4" class="view-list" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">Economics</a> 
                        <div id = "demo4" class="collapse view-content" data-parent="#myGroup">
                         <div class="">
                              <table class="table table-class">
                              <thead>
                                        <tr>
                                             <th class="table-class">Name of the course</th>
                                             <th class="table-class">Number of lectures </th>
                                             <th class="table-class">Author</th>
                                             <th class="table-class">Goal-1</th>
                                             <th class="table-class ">Release&nbspdate</th>
                                             <th class="table-class">Action</th>
                                        </tr>
                                        <?php     $sql = "SELECT* FROM form2 where subject='Economics'";
                                                  $result = mysqli_query($con, $sql);
                                                  $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                  foreach ($files as $file):
                                              ?>
                                            <tr>
                                            <td><?php echo $file['name']; ?></td>
                                            <td><?php echo $file['lecture']; ?></td>
                                            <td><?php echo $file['author']; ?></td>
                                            <td><?php echo $file['goal1']; ?></td>
                                            <td><?php echo $file['publish_date']; ?></td>
                                            <td><a href="view_vipin.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                                          </tr>
                                          <?php endforeach;?>
                                   </thead>
                              </table>
                          </div>
                       </div>
                       <a href="#demo5" class="view-list" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">Biology</a> 
                        <div id = "demo5" class="collapse view-content" data-parent="#myGroup">
                         <div class="">
                              <table class="table table-class">
                              <thead>
                                        <tr>
                                             <th class="table-class">Name of the course</th>
                                             <th class="table-class">Number of lectures </th>
                                             <th class="table-class">Author</th>
                                             <th class="table-class">Goal-1</th>
                                             <th class="table-class ">Release&nbspdate</th>
                                             <th class="table-class">Action</th>
                                        </tr>
                                        <?php     $sql = "SELECT* FROM form2 where subject='Biology'";
                                                  $result = mysqli_query($con, $sql);
                                                  $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                  foreach ($files as $file):
                                              ?>
                                            <tr>
                                            <td><?php echo $file['name']; ?></td>
                                            <td><?php echo $file['lecture']; ?></td>
                                            <td><?php echo $file['author']; ?></td>
                                            <td><?php echo $file['goal1']; ?></td>
                                            <td><?php echo $file['publish_date']; ?></td>
                                            <td><a href="view_vipin.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                                          </tr>
                                          <?php endforeach;?>
                                   </thead>
                              </table>
                          </div>
                       </div>
                    </ul>
                    <div class="dummy-line"></div>
                </nav>
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
                                        <li><a href="#">Terms & Conditions</a>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <!-- <div class="col-md-4 col-sm-12"></div>-->
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
  <!-- <script src="js/bootstrap.min.js"></script> -->
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>