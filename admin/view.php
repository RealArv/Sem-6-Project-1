<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

$servername="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($servername,$username,$password,$dbname);

$sql = "SELECT* FROM form2";
$result = mysqli_query($con, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_POST['delete_btn'])){
     $id=$_POST['delete_id'];
     $con->query("delete from form2 where id=$id");
     echo "<script>window.location='view.php'</script>";
}

?>


<!-- Begin Page Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 text-center">COURSES CREATED</h1>

 <div class="card shadow mb-4">
  <div class="card-header bg-primary py-3">
    <h6 class="m-0 font-weight-bold text-light text-center">USER LIST
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="table-class">Name of the course</th>
            <th class="table-class">Lectures </th>
            <th class="table-class">Author</th>
            <th class="table-class">Phone</th>
            <th class="table-class">E-mail</th>
            <th class="table-class">Release&nbspdate</th>
            <th class="table-class">Downloads</th>
            <th class="table-class">Action</th>
            <th class="table-class">Delete</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach ($files as $file): ?>
          <tr>
            <td><?php echo $file['name']; ?></td>
            <td><?php echo $file['lecture']; ?></td>
            <td><?php echo $file['author']; ?></td>
            <td><?php echo $file['phone']; ?></td>
            <td><?php echo $file['email']; ?></td>
            <td><?php echo $file['publish_date']; ?></td>
            <td><?php echo $file['downloads']; ?></td>
            <td><a class="pom" href="../view_vipin.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
            <td>
                <form action="view.php" method="post">
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