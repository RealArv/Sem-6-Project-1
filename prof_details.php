<?php   
      session_start();

      $servername="localhost";
      $username="root";
      $password="";
      $dbname="project";
      $con=mysqli_connect($servername,$username,$password,$dbname);
      
      
      $temp=$_SESSION['uname'];
      $sql = "SELECT* FROM login where username='$temp'";
      $result = $con->query($sql) or die($con->error);
      $rows=$result->fetch_assoc();

      $temp2=$_SESSION['username'];
      $sql2 = "SELECT* FROM prof where prof_name='$temp2'";
      $result2 = mysqli_query($con, $sql2);
      $rows2=$result2->fetch_assoc();
 

      //$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
      
        //   if(!$con)
        //       echo mysqli_connect_error();

        if(isset($_POST['update'])){
            $occu = $_POST['occu'];
            $email = $_POST['email'];
            $about = $_POST['about'];
            $veri = $_POST['veri'];

            $con->query("update prof set occu='$occu' , prof_email='$email' , about='$about' , verification='$veri' where prof_name='$temp2'") or die ($con->error);

            header("location:prof_view.php");
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGS</title>
</head>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/user_prof.css?v=<?php echo time(); ?>"></head>

<form action="prof_details.php" method="POST">
<div class="container emp-profile">
            
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?php echo $rows2['name_file'];?>" class="card-img-top" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $rows2['prof_name']; ?>
                                    </h5>
                                    <h6>
                                        <?php echo $rows2['occu']; ?>
                                    </h6>
                                    <p class="proile-rating">VERIFIED STATUS: <span><?php echo $rows2['verified']; ?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Update</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Social Link</p>
                            <a href="<?php echo $rows2['verification'];?>">Linkedin</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="container margin-prof">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Professor</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows2['prof_name'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows['password'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows2['prof_email'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>DOB</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows2['prof_DOB'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Language</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows2['Language'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Country</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows2['country'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Subject</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows2['subject'];?></p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                 <div class="container margin-prof margin-2">
                                            <div class="row">
                                                <div class="col-md-6 mb-3 pr-4">
                                                    <label>Occupatioin</label>
                                                </div>
                                                <div class="col-md-6 mb-3 ">
                                                    <input name="occu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Occupation">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-Mail">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label>About</label>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <input name="about" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="About yourself">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Verification</label>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <input name="veri" type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Verification link">
                                                       
                                                        <button type="submit" name="update" class="btn btn-primary mt-3"> Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                 </div>  
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="prof_view.php" type="button" class="profile-edit-btn">Go back</a>
                    </div>
               
            </div>  
        </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>