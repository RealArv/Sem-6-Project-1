<?php

  $servername="localhost";
  $username="root";
  $password="";
  $dbname="project";
  $con=mysqli_connect($servername,$username,$password,$dbname);
  
  $sql = "SELECT * FROM prof";
  $result = mysqli_query($con, $sql);
  //$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  if(!$con)
      echo mysqli_connect_error();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGS</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/prof_view.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>
<?php 
  
?>
<body class="prof-pad bidibam">
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning nav-custom">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse nav-mar" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto text-center mt-2 mt-lg-0">
                    <li class="nav-item active">
                    <a class="nav-link" href="prof_details.php">Profile</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="bleh.php">Home</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="form_new.html">Course creation</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="view_vipin.php">View courses</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="prof_form.html">Become a professor</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.html">Logout</a>
                    </li>
                 </ul>
            </div>
            
      </nav>
      <div class="jumbotron">
        <h1 class="display-4 text-center text-uppercase">Professors</h1>
        <p class="lead text-center">Here you can view all the professors who are willing to help. Use the contact button to send a request. </p>
        <hr class="my-4">
        <p class="lead text-center">Note that it might take a few days to for the admins to respond to the request. Please check your mail for any notices</p>
        </div>
            <div class="row">
               <?php 
                while($rows=$result->fetch_assoc())
                {
                ?>   
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 prof-left-mar">
                    <div class="card">
                      <div class="prof-height">
                        <img src="<?php echo $rows['name_file'];?>" class="card-img-top">
                      </div>
                      <div class="card-body justify-content-center align-self-center">
                        <h5 style="card-title "> NAME: &nbsp<?php echo $rows['prof_name'];?></h5>
                        <hr>
                        <p> QUALIFICATIONS: &nbsp<?php echo $rows['prof_quali'];?></p>
                        <p> SUBJECT: &nbsp<?php echo $rows['subject'];?></p>
                        <p> OCCUPATION:  &nbsp<?php echo $rows['occu'];?></p>
                        <p> EXPERIENCE: &nbsp<?php echo $rows['prof_exp'];?> years</p>
                        <p> ABOUT YOURSELF: &nbsp<?php echo $rows['about'];?></p>
                        <hr>
                        <p> E-MAIL: &nbsp<?php echo $rows['prof_email'];?></p>
                        <p> DAY: &nbsp<?php echo $rows['days'];?></p>
                        <p> COUNTRY: &nbsp<?php echo $rows['country'];?></p>
                        <hr>
                        <p> Verified: &nbsp<?php echo $rows['verified'];?></p>
                      </div>
                  </div>
              </div>
            <?php 
              }
            ?>   


         </div>           
        </div>
      </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>

