<?php
    
    session_start();

    if(isset($_SESSION['a']))
    {
        
    }
    else
    {
        header("location:login.php");
    }
    include('includes/header.php'); 
    include('includes/navbar.php'); 

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="project";
    $con=mysqli_connect($servername,$username,$password,$dbname);

    $sql1 = "SELECT* FROM login";
    $result = mysqli_query($con, $sql1);
    $num_users=mysqli_num_rows($result);
    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(isset($_POST['delete_btn'])){
        $id=$_POST['delete_id'];
        $con->query("delete from login where id=$id");
        echo "<script>window.location='index.php'</script>";
    }

    $sql2 = "SELECT* FROM form2";
    $result2 = mysqli_query($con, $sql2);
    $courses=mysqli_num_rows($result2);
    
    $sql3 = "SELECT* FROM prof where verified='yes'";
    $result3 = mysqli_query($con, $sql3);
    $pending_prof=mysqli_num_rows($result3);
    
    $sql4 = "SELECT* FROM feedback";
    $result4 = mysqli_query($con, $sql4);
    $feedback=mysqli_num_rows($result4);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 text-center">DASHBOARD</h1>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4 ">
      <div class="card border-left-primary shadow-h h-100 py-2">
        <div class="card-body ">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="admin_user.php"> Total Registered Users</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Users: <?php echo $num_users ?> </h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow-h h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1 "><a href="view.php">Courses created </a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

              <h4>Courses: <?php echo $courses ?> </h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow-h h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="feedback_admin.php">Feedbacks </a></div>
              <div class="row no-gutters align-items-center">

                <h4>Feedbacks: <?php echo $feedback ?> </h4>


              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow-h h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="admin_prof_veri.php"> Professor List </a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>

              <h4>Approved: <?php echo $pending_prof ?> </h4>

            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->

  <h1 class="h4 mb-4 text-gray-800 text-center">PUBLIC USERS</h1>

 <div class="card shadow mb-4">
  <div class="card-header bg-primary py-3">
    <h6 class="m-0 font-weight-bold text-white text-center">USER LIST
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="table-class">Name</th>
            <th class="table-class">Username</th>
            <th class="table-class">Password</th>
            <th class="table-class">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach ($files as $file): ?>
          <tr>
            <td><?php echo $file['f_name']; ?></td>
            <td><?php echo $file['username']; ?></td>
            <td><?php echo $file['password']; ?></td>

            <td>
                <form action="index.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $file['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
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