
<?php
if(isset($_POST['s']))
{
	$c=mysqli_connect("localhost","root","","college");
	$em=$_POST['email'];
	$fedd=$_POST['fedd'];

	mysqli_query($c,"insert into fedd_back(email,fedd)values('$em','$fedd')");

	
      header("location:index.html");

      echo "<script>alert('added suceess fully...')</script>";

}
?>