<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
    echo mysqli_connect_error();

    if(isset($_POST['submit_form']))
    {
        $name_user=$_POST['name_user'];
        $exp=$_POST['exp_teach'];
        $topic=$_POST['topic'];
        $age=$_POST['age'];	
        $message=$_POST['message'];	
        $course_name=$_POST['course_name'];	
        $lecture=$_POST['number_lecture'];	
        $time=$_POST['time_radio'];	
        $quiz=$_POST['quiz'];	
        $goal1=$_POST['goal1'];	
        $goal2=$_POST['goal2'];	
        $goal3=$_POST['goal3'];	
        $goal4=$_POST['goal4'];	
        $sql="INSERT INTO `form`(`name`, `teach_exp`, `topic`, `age`, `description`, `course_name`,`lecture_no`, `hours`, `quiz`, `goal_1`, `goal_2`, `goal_3`, `goal_4`) VALUES ('$name_user','$exp','$topic','$age','$message','$course_name','$lecture','$time','$quiz','$goal1','$goal2','$goal3','$goal4')";
        if (mysqli_query($con, $sql)) {
            $msg = "Record has been successfully inserted";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
          }
          header("location: after_login.php");

  }		

mysqli_close($con);
?>