<?php

	include('db/dbconn.php');
	if (isset($_POST['signup']))
{
	$firstname=$_POST['firstname'];
	
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$zipcode=$_POST['zipcode'];	
	$mobile=$_POST['mobile'];
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$check = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `customer` WHERE `email` = '$email'"));
		if($check == 1)
			{
				echo "<script>alert('EMAIL Existe')</script>";	 
			}
			
			else
				{
					mysqli_query ($conn, "INSERT INTO customer (firstname, mi, lastname, address, country, zipcode, mobile, telephone, email, password)
					VALUES ('$firstname',  '$lastname', '$address', '$country', '$zipcode', '$mobile',  '$email', '$password')") ;
					echo "<script>alert('Inscrption OK')</script>";		
				}				
					
}
?>