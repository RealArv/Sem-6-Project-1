<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($servername,$username,$password,$dbname);

$sql = "SELECT* FROM form2";
$result = mysqli_query($con, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(!$con)
    echo mysqli_connect_error();

    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $lecture=$_POST['lecture'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];	
        $topic=$_POST['topic'];	
        $bdate=$_POST['bdate'];	
        $time=$_POST['time'];	
        $about=$_POST['about'];
        $quiz=$_POST['quiz'];	
        $goal1=$_POST['goal1'];	
        $goal2=$_POST['goal2'];	 
        $author=$_POST['author'];
        //$pub_date = "INSERT INTO form2 SET date = CURRENT_TIMESTAMP";
        $current_date = date("d-m-Y");

        $filename = $_FILES['file']['name'];
        $file = $_FILES['file']['tmp_name'];  
        $size = $_FILES['file']['size'];
        $destination = 'uploads/' . $filename;

        if(move_uploaded_file($file, $destination)){
         $sql="INSERT INTO form2(name, lecture, email, phone, subject, bday, hours, about,quiz, goal1, goal2, author, name_file, size, downloads, verified, publish_date) VALUES ('$name','$lecture','$email','$phone','$topic','$bdate','$time','$about','$quiz','$goal1','$goal2','$author','$filename','$size', 0, 'NO','$current_date')";
         if (mysqli_query($con, $sql)) {
            header("location: bleh.php");
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
          }
        }

        if(isset($_POST['save'])) {
          
          // get the file extension
          $extension = pathinfo($filename, PATHINFO_EXTENSION);
      
          // the physical file on a temporary uploads directory on the server
          $file = $_FILES['myfile']['tmp_name'];
          $size = $_FILES['myfile']['size'];
      
          if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
              echo "You file extension must be .zip, .pdf or .docx";
          } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
              echo "File too large!";
          } else {
              // move the uploaded (temporary) file to the specified destination
              if (move_uploaded_file($file, $destination)) {
                  $sql = "INSERT INTO form2(name_file) VALUES ('$filename')";
                  if (mysqli_query($con, $sql)) {
                      echo "File uploaded successfully";
                  }
              } else {
                  echo "Failed to upload file.";
              }
          }
       }
    }

        if (isset($_GET['file_id'])) {
          $id = $_GET['file_id'];
      
          // fetch file to download from database
          $sql = "SELECT * FROM form2 WHERE id=$id";
          $result = mysqli_query($con, $sql);
      
          $file = mysqli_fetch_assoc($result);
          $filepath = 'uploads/' . $file['name_file'];
      
          if (file_exists($filepath)) {
              header('Content-Description: File Transfer');
              header('Content-Type: application/octet-stream');
              header('Content-Disposition: attachment; filename=' . basename($filepath));
              header('Expires: 0');
              header('Cache-Control: must-revalidate');
              header('Pragma: public');
              header('Content-Length: ' . filesize('uploads/' . $file['name_file']));
              readfile('uploads/' . $file['name_file']);

              $newCount = $file['downloads'] + 1;
              $updateQuery = "UPDATE form2 SET downloads=$newCount WHERE id='$id'";
              mysqli_query($con, $updateQuery);
              exit;
          }      
      }	
mysqli_close($con);

?>