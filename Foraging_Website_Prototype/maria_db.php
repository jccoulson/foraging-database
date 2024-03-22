<!-- Group 2 Foraging for food Website -->
<!-- Members: Alejandro Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox-->
<!-- For CSCI370 Team Project for Professor Renner-->
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<?php
	include 'connect.php';
	session_start(); 
?>
<body class = "employee-chopg">
  
	<body class = "employee-chopg">
  
		<div class="header">
		  <h1>Foraging for Food</h1>
				  <!-- <img src="logo1.jpeg" alt="logo" />                 logo for header -->
		</div>

		  <div class = "container">
			<div class = "region-box">
				<div class = "col-md-6 login">
					
<h2> Mariadb Login Below </h2>
	<form method="post" action="maria_db.php">
	Enter Mariadb_Username: <input type="username" name = "maria_user"><br>
	Enter password: <input type="password" name="maria_password"><br>
	<input type="submit" name="submit">
	</form>
	<br>
				</div>
			</div>
		  </div>

<?php
	// If submit button pressed
	if (isset ($_POST["submit"])) 
	{	
		
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if ($conn->connect_errno) 
		{ 
		echo $conn->connect_error; 
		}
		else
		{
			header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/login_page.php");
		}
		$conn->close ();

	}
?>