<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

$servername="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($servername,$username,$password,$dbname);

$sql = "SELECT* FROM feedback";
$result = mysqli_query($con, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>


<!-- Begin Page Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 text-center">FEEDBACK</h1>

 <div class="card shadow mb-4">
  <div class="card-header bg-primary py-3">
    <h6 class="m-0 font-weight-bold text-light text-center">USER LIST
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="table-class">Name: &nbsp</th>
            <th class="table-class">E-mail &nbsp</th>
            <th class="table-class">Feedback &nbsp</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
            <tr>
                <td><?php echo $file['name']; ?></td>
                <td><?php echo $file['email']; ?></td>
                <td><?php echo $file['feedback']; ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>

    <?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>