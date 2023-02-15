<?php 

session_start();

$con = mysqli_connect("localhost","root","","ism");

if (mysqli_connect_errno())
{
    echo "Failed to Connect to MySQL: ".mysqli_connect_error();
}

if (isset($_POST['login']))
{
	$username = mysqli_real_escape_string($con, $_POST['uname']);
	$password = mysqli_real_escape_string($con, $_POST['pass']);
						
	$query = mysqli_query($con, "SELECT * FROM passkeys WHERE password='$password' and username='$username'");
	$row = mysqli_fetch_array($query);
	$num_row = mysqli_num_rows($query);
						
	if ($num_row > 0) 
	{			
		header('location:login.html');						
	}
	else
	{
		header('location:index.html');
	}
}

?>