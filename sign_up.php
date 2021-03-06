<?php

$msg = "";
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
	echo mysqli_connect_error();

    if(isset($_POST['register']))
    {
      $fname=$_POST['full_name'];
      $uname=$_POST['user'];
      $passw=$_POST['password'];	
          $sql="INSERT INTO `login`(`f_name`, `username`, `password`) VALUES ('$fname','$uname','$passw')";
            if (mysqli_query($con, $sql)) {
                $msg = "Record has been successfully inserted";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
              }
              header("location: home.html");
      }		
  
  mysqli_close($con);
  
  ?>