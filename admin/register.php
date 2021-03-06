<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

$servername="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($servername,$username,$password,$dbname);

$sql = "SELECT* FROM admin_login";
$result = mysqli_query($con, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_POST['delete_btn'])){
     $id=$_POST['delete_id'];
     $con->query("delete from admin_login where id=$id");
     echo "<script>window.location='register.php'</script>";
}

?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add an Admin </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="sign_up_backend.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>  
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
        <button type="button" class="ml-4 btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
          Add Admin Profile 
        </button>
    </h6>
  </div>
</div>

</div>

<div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="table-class">Name</th>
            <th class="table-class">Username</th>
            <th class="table-class">E-mail</th>
            <th class="table-class">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach ($files as $file): ?>
          <tr>
            <td><?php echo $file['name']; ?></td>
            <td><?php echo $file['username']; ?></td>
            <td><?php echo $file['email']; ?></td>

            <td>
                <form action="register.php" method="post">
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
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>