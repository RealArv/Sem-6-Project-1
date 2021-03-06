<?php
session_start();

$invalid = "";
$servername="localhost:3308";
$username="root";
$password="password";
$dbname="project";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
	echo mysqli_connect_error();

	if(isset($_POST['submit']))
	{
			$uname=$_POST['user'];
			$passw=$_POST['password'];	
			$_SESSION['uname'] = $uname;
			$sql="SELECT * FROM login WHERE username='$uname'";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
				$row=mysqli_fetch_assoc($result);		
				$e=$row["username"];
				$p=$row["password"];
				$f=$row["f_name"];
				if($uname==$e)
				{
					if($passw==$p) {
						$_SESSION['a']=10;
						$_SESSION['username'] = $f;
						header('location:bleh.php');
					}
					else {
						$invalid = "Invalid password";
						echo $invalid;
					}
				}
				if ($uname != $e) {
					header("location: home.html");
				}
			}	
		}		

mysqli_close($con);
?>

<!-- '<script>alert("Wrong password")</script>'; -->