<?php
session_start();

$invalid = "";
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
	echo mysqli_connect_error();

	if(isset($_POST['submit']))
	{
		$uname=$_POST['user'];
		$passw=$_POST['pass'];	
			$sql="SELECT password,username FROM admin_login WHERE username='$uname'";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
				$row=mysqli_fetch_assoc($result);		
				$e=$row["username"];
				$p=$row["password"];
				if($uname==$e)
				{
					if($passw==$p) {
						$_SESSION['a']=10;
						header('location:index.php');
					}
					else {
						 '<script>alert("Wrong password")</script>'; 
					}
				}
				if ($uname != $e) {
					'<script>alert("Wrong password")</script>'; 
				}
			}	
		}		

mysqli_close($con);
?>

