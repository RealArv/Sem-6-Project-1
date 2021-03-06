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
      $fname=$_POST['name'];
      $email=$_POST['email'];
      $message=$_POST['message'];	
          $sql="INSERT INTO `feedback`(`name`, `email`, `feedback`) VALUES ('$fname','$email','$message')";
            if (mysqli_query($con, $sql)) {
                $msg = "Record has been successfully inserted";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
              }
              header("location: home.html");
      }		
  
  mysqli_close($con);
  
  ?>