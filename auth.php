 <?php 

include("config.php");


$username= $_POST['username'];
$password= $_POST['password'];


	
	$q="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$res = mysqli_query($con,$q) or die("wrong query");
	
	
	$count=mysqli_num_rows($res);
	
	if($count==1)
    {
			echo "<script language='javascript' type='text/javascript'>location.href='home1.php'</script>";
	}
	
	else
	{
		 header('location: index.php');
	   
	}
	
?>




