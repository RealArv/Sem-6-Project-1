<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

$servername="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($servername,$username,$password,$dbname);

$sql = "SELECT* FROM prof";
$result = mysqli_query($con, $sql);
//$row = $result->fetch_array();
//$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_POST['verify_btn'])){
  $id=$_POST['verify_id'];
  $con->query("update prof set verified = 'YES' where p_id=$id");
  echo "<script>window.location='admin_prof_veri.php'</script>";
}

if(isset($_POST['delete_btn'])){
  $id=$_POST['delete_id'];
  $con->query("delete from prof where p_id=$id");
  echo "<script>window.location='admin_prof_veri.php'</script>";
}
?>


<!-- Begin Page Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 text-center">PROFESSOR REQUESTS</h1>

 <div class="card shadow mb-4">
  <div class="card-header bg-primary py-3">
    <h6 class="m-0 font-weight-bold text-white text-center">PROFESSOR LIST </h6>
  </div>

  <div class="row">
           <?php
             while($rows=$result->fetch_assoc())
               {
            ?>   
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 prof-left-mar">

                    
                    <div class="prof-height  m-3">
                      <img src="../<?php echo $rows['name_file'];?>" class="card-img-top">
                    </div>
                    <div class="card-body justify-content-center align-self-center">
                      <h5 style="card-title "> NAME:  &nbsp<?php echo $rows['prof_name'];?></h5>
                      <hr>
                      <p> QUALIFICATIONS:  &nbsp<?php echo $rows['prof_quali'];?></p>
                      <p> SUBJECT:  &nbsp<?php echo $rows['subject'];?></p>
                      <p> OCCUPATION:  &nbsp<?php echo $rows['occu'];?></p>
                      <p> EXPERIENCE:  &nbsp<?php echo $rows['prof_exp'];?> years</p>
                      <p> ABOUT YOURSELF:  &nbsp<?php echo $rows['about'];?></p>
                      <hr>
                      <p> E-MAIL:  &nbsp<?php echo $rows['prof_email'];?></p>
                      <p> DAY:  &nbsp<?php echo $rows['days'];?></p>   
                      <p> COUNTRY:  &nbsp<?php echo $rows['country'];?></p>   
                      <hr>   
                      <p> VERIFIED: &nbsp<?php echo $rows['verified'];?></p>
                      <p> Profile Verification:  &nbsp<?php echo $rows['verification'];?></p>   

                      <form action="admin_prof_veri.php" method="POST">
                        <div class="col align-self">
                        <input type="hidden" name="verify_id" value="<?php echo $rows['p_id']; ?>">
                        <button type="submit" name="verify_btn" class="btn btn-primary btn-block mb-3 r"> APPROVE</button>

                        <input type="hidden" name="delete_id" value="<?php echo $rows['p_id']; ?>">
                        <button type="submit" name="delete_btn" class="btn btn-danger btn-block"> DELETE</button>
                        </div>
                       </form>
                    </div>

            </div>
            <?php 
              }
            ?>   
         </div>  

</div>

</div>

    <?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>