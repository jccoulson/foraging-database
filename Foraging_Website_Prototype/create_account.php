<!-- Group 2 Foraging for food Website -->
<!-- Members: Alejandro Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox-->
<!-- For CSCI370 Team Project for Professor Renner-->

<!DOCTYPE html>
<?php
	include 'connect.php';
	session_start();
?>

<html>
	<head>
		<title> create_account </title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<link rel="stylesheet" type= "text/css"
		      href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!--   can insert any h1 or 2 tags customs like shadows    -->
   
  </head>
  
<body class = "account-creation">
  
  <div class="header">
	<h1>Foraging for Food</h1>
	
	   <form method="post" action ="login_page.php">
					<input type="submit" name="back" value="Back" style="float: left">
				</form>
	
    <!-- <img src="logo1.jpeg" alt="logo" />                 logo for header -->
  </div>
<form method="post" action="login_page.php">
        
	</form>
	<div class = "container">
		<div class = "region-box">
			<div class = "col-md-6 login">

<h2> Create Account</h2>

		<form method="post" action="create_account.php"> 
		First Name: <input type="text" name = "fname"><br>
		Last Name: <input type="text" name="lname"><br>
		Email: <input type="email" name = "signup_email"><br>
		Password: <input type="password" name="signup_password"><br>
		<input type="submit" name="submit">
		</form>
</div>
		</div>
		</div>
</body>


<?php
if (isset ($_POST['submit'])) // If submit button pressed
{
	
	$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
	if ($conn->connect_errno) { echo $conn->connect_error; }

	$new_first_name = $_POST['fname'];
	$new_last_name = $_POST['lname'];
	$new_email = $_POST['signup_email'];
	$new_passwd = $_POST['signup_password'];

	echo $new_first_name;

	$sql_insert = "INSERT INTO User (Email, First_name, Last_name, Password, Type)
	VALUES ('$new_email', '$new_first_name', '$new_last_name', '$new_passwd', 'Regular')";

	

	
	//VALUES ($new_email, $new_first_name, $new_last_name, $new_passwd)";
	
	if ($conn->query($sql_insert) === TRUE)
	{
  		echo "New record created successfully";
		header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/login_page.php");
	} 
	else
	{
 		echo "There was an error signing up. Please try again.";
	} 

$conn->close();

}
?>