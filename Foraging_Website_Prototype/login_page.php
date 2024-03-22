<!-- Group 2 Foraging for food Website -->
<!-- Members: Alejandro Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox-->
<!-- For CSCI370 Team Project for Professor Renner-->


<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<?php
	include 'connect.php';
	session_start();
?>
<html>
	<head>
		<title> user log in </title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<link rel="stylesheet" type= "text/css"
		      href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<!--   can insert any h1 or 2 tags customs like shadows    -->
	</head>

	<body class = "login-page">

		<div class="header">
			<h1>Foraging for Food</h1>
			<!-- <img src="logo1.jpeg" alt="logo" />                 logo for header -->
		</div>

		<div class = "container">
			<div class = "login-box">
				<div class = "row">
					<div class = "col-md-6 login">

						<h2>Login </h2> 
						<form method="post" action="login_page.php"> <br>

							<div class = "form-group">
								<label> Email: </label>  
								<input type="email" name = "email" class = "from-control" ><br>
							</div>

								<div class = "form-group">
									<label> Password:  </label>
									<input type="password" name="password" class = "from-control" > &ensp; <br>
								</div>

								<input type="checkbox" name="employeeCheck" value = "Employee">
								<label for="employeeCheck">Are you an Employee? </label>
								<br>
								<input type="submit" name="submit">
								
								<br>
								<label> or </label> <br>
								<input type="submit" name="signup" value="Create Account">
								
						</form>
						<br>
					</div>
				</div>
			</div> 
		</div>
	</body>

</html>


<?php
	// If submit button pressed
	
	if (isset ($_POST["submit"]) && isset ($_POST["employeeCheck"])) //seeing if they are employee
	{
		$email = $_POST['email'];
		$password = $_POST["password"];
		$empCheck = 'Employee';
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if ($conn->connect_errno) { echo $conn->connect_error; }
	
		
		$sql_query = $conn->query("select email from user where email = '$email' AND password = '$password' AND type = '$empCheck' "); //checking employee status in the query also
		
		
		
		if ($sql_query->num_rows)
		{
			$_SESSION['email'] = $email;
			echo "employee successfully found";
			header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/employee_choice.php");

  		} 
		else
		{
			 $sql_query = $conn->query("select email from user where email = '$email' AND password = '$password'  ");
			if ($sql_query->num_rows) //doing another check to see if its a valid account that is not an employee
			{
				echo "This is not an employee account"; //more specific error
			}
			else
			{
				 echo "Invalid Email or Password";
			}

 			
		} 
	
		
			$conn->close ();

	}
	
	if (isset ($_POST["submit"]) && !(isset ($_POST["employeeCheck"]))) //making sure they did not check mark
	{	
		$email = $_POST['email'];
		$password = $_POST["password"];
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if ($conn->connect_errno) { echo $conn->connect_error; }
		

		$sql_query = $conn->query("select email from user where email = '$email' AND password = '$password'  ");
		
		
		
		if ($sql_query->num_rows)
		{
			$_SESSION['email'] = $email;
			header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/region.php");

  		} 
		else
		{
 			 echo "Invalid Email or Password";
		} 
	
		
			$conn->close ();

		}

	if (isset ($_POST["signup"])) //they clicked on signup button
	{
		header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/create_account.php");
	}
	

?>