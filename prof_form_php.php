<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($servername,$username,$password,$dbname);

$sql = "SELECT* FROM prof";
$result = mysqli_query($con, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(!$con)
    echo mysqli_connect_error();

    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $lang=$_POST['lang'];
        $email=$_POST['email'];
        $subj=$_POST['subj'];	
        $exp=$_POST['exp'];
        $country=$_POST['country'];	
        $bdate=$_POST['bdate'];	
        $quali=$_POST['quali'];	
        $about=$_POST['about'];		
        $veri=$_POST['prof_veri'];		
        $days=$_POST['days'];		

        $filename = $_FILES['photo']['name'];
        $file = $_FILES['photo']['tmp_name'];  
        $size = $_FILES['photo']['size'];
        $destination = 'uploads_photo/' . $filename;
        $img1=$destination;

        if(move_uploaded_file($file, $destination)){
         $sql="INSERT INTO prof(prof_name, Language, prof_email, subject, country, prof_DOB, prof_quali, prof_exp, about, verification, name_file, days, size, verified) VALUES ('$name','$lang','$email','$subj','$country','$bdate','$quali','$exp','$about','$veri','$img1','$days','$size', 'NO')";
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
                  $sql = "INSERT INTO prof(name_file) VALUES ('$filename')";
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
          $sql = "SELECT * FROM prof WHERE p_id=$id";
          $result = mysqli_query($con, $sql);
      
          $file = mysqli_fetch_assoc($result);
          $filepath = '../uploads_photo/' . $file['name_file'];
      
          if (file_exists($filepath)) {
              header('Content-Description: File Transfer');
              header('Content-Type: application/octet-stream');
              header('Content-Disposition: attachment; filename=' . basename($filepath));
              header('Expires: 0');
              header('Cache-Control: must-revalidate');
              header('Pragma: public');
              header('Content-Length: ' . filesize('uploads_photo/' . $file['name_file']));
              readfile('uploads_photo/' . $file['name_file']);
              exit;
          }      
      }	
mysqli_close($con);

?>