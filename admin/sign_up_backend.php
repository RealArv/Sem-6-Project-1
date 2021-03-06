<?php

$msg = "";
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
	echo mysqli_connect_error();

    if(isset($_POST['submit']))
    {
      $aname=$_POST['name'];
      $auname=$_POST['username'];
      $aemail=$_POST['email'];
      $apassw=$_POST['password'];	
          $sql="INSERT INTO `admin_login`(`name`,`username`, `email`, `password`) VALUES ('$aname','$auname','$aemail','$apassw')";
            if (mysqli_query($con, $sql)) {
                $msg = "Record has been successfully inserted";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
              }
              header("location: register.php");
      }		
  
  mysqli_close($con);
  
  ?>