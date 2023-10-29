
<?php
if(isset($_POST['s']))
{
	$c=mysqli_connect("localhost","root","","college");
	$n=$_POST['name'];
	$em=$_POST['email'];
	$msg=$_POST['message'];

	mysqli_query($c,"insert into contect_us(name,email,message)values('$n','$em','$msg')");

	
      header("location:index.html");

      echo "<script>alert('added suceess fully...')</script>";

}
?>