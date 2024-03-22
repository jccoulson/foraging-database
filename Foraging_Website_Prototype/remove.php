<!-- Group 2 Foraging for food Website -->
<!-- Members: Alejandro Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox-->
<!-- For CSCI370 Team Project for Professor Renner-->

<!DOCTYPE html>
<?php
	include 'connect.php';
	session_start();
?>

<html>
   <form method="post" action ="employee_choice.php">
                <input type="submit" name="back" value="Back">
            </form>
</html>

<?php


if($_SESSION['chosen_entity'] == 'Animal')
{
?>
<h1>Removing from the Animal entity</h1>
<h2>Enter the scientific name of the animal you want removed from the database then submit</h1>

<form method="post" action="remove.php">
	Animal Scientific name <input type="text" name = "animal_scientific"><br>
<input type="submit" name="animal_submit" value="Submit animal to be removed">
</form>

<h4>Display of scientific names of animals in database</h4>
<?php

$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
if ($conn->connect_errno) { echo $conn->connect_error; }

$result = $conn->query("SELECT Ascientific_name from animal");

while($row = $result->fetch_assoc())
{
	echo $row['Ascientific_name']. "<br>";
}

if(isset ($_POST['animal_submit']))
{
	if(!(empty($_POST['animal_scientific'])))
	{
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if ($conn->connect_errno) { echo $conn->connect_error; }

		$animal_scientific = $_POST['animal_scientific'];

		$sql_query = $conn->query("select Ascientific_name from Animal where Ascientific_name = '$animal_scientific'  ");
		if ($sql_query->num_rows)  //checking if inputted name is a valid animal to remove
		{
			$sql_delete = "DELETE from Animal where Ascientific_name = '$animal_scientific'";
			if ($conn->query($sql_delete) === TRUE)
			{
  				echo "<br>" ."<b>Animal deleted successfully<b>";
			} 
			else 
			{
  				echo "<br>" ."<b>Error deleting record: <b>" . $conn->error;
			}
		}
		else
		{
			echo "<br>" . "<b>There is no animal by that name in the database<b>";
		}


		
	}
}

}

if($_SESSION['chosen_entity'] == 'Plant')
{
?>

<h1>Removing from the Plant entity</h1>
<h2>Enter the scientific name of the plant you want removed from the database then submit</h1>

<form method="post" action="remove.php">
	Plant Scientific name <input type="text" name = "plant_scientific"><br>
<input type="submit" name="plant_submit" value="Submit plant to be removed">
</form>

<h4>Display of scientific names of animals in database</h4>
<?php
$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
if ($conn->connect_errno) { echo $conn->connect_error; }

$result = $conn->query("SELECT Pscientific_name from plant");

while($row = $result->fetch_assoc())
{
	echo $row['Pscientific_name']. "<br>";
}

if(isset ($_POST['plant_submit']))
{
	if(!(empty($_POST['plant_scientific'])))
	{
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if ($conn->connect_errno) { echo $conn->connect_error; }

		$plant_scientific = $_POST['plant_scientific'];

		$sql_query = $conn->query("select Pscientific_name from Plant where Pscientific_name = '$plant_scientific'  ");
		if ($sql_query->num_rows)  //checking if inputted name is a valid animal to remove
		{
			$sql_delete = "DELETE from Plant where Pscientific_name = '$plant_scientific'";
			if ($conn->query($sql_delete) === TRUE)
			{
  				echo "<br>" . "<b>Plant deleted successfully<b>";
			} 
			else 
			{
  				echo "<br>" . "<b>Error deleting record: <b>" . $conn->error;
			}
		}
		else
		{
			echo "<br>" . "<b>There is no plant by that name in the database<b>";
		}


		
	}
}

}

if($_SESSION['chosen_entity'] == 'User')
{
?>

<h1>Removing a User account</h1>
<h2>Enter the email of the user you want deleted from the database</h1>

<form method="post" action="remove.php">
	Email <input type="text" name = "user_email"><br>
<input type="submit" name="user_submit" value="Submit user to be removed">
</form>

<h4>Display of Emails of users in database</h4>
<?php
$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
if ($conn->connect_errno) { echo $conn->connect_error; }

$result = $conn->query("SELECT Email from user");

while($row = $result->fetch_assoc())
{
	echo $row['Email']. "<br>";
}

if(isset ($_POST['user_submit']))
{
	if(!(empty($_POST['user_email'])))
	{
		
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if ($conn->connect_errno) { echo $conn->connect_error; }

		$user_email = $_POST['user_email'];

		$sql_query = $conn->query("select email from user where email = '$user_email'  ");
		if ($sql_query->num_rows)  //checking if inputted name is a valid animal to remove
		{
			$sql_delete = "DELETE from user where email = '$user_email'";
			if ($conn->query($sql_delete) === TRUE)
			{
  				echo "<br>" . "<b>User deleted successfully<b>";
			} 
			else 
			{
  				echo "<br>" . "<b>Error deleting record: <b>" . $conn->error;
			}
		}
		else
		{
			echo "<br>" . "<b>There is no User with that email in the database<b>";
		}


		
	}
}


}
$conn->close();
?>
<html>
	
    <form method="POST" action = "maria_db.php">
        <input type = "submit" name = "logout" value = "Logout">
    </form>
</html>

<?php
if (isset ($_POST["logout"]))     //if logout is press
    {    
    //remove all session variables
    session_unset();
        
    // destroy the session 
    session_destroy();
        
    // unset $_POST & close connection
    unset($_POST);
    mysqli_close($con);

     header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/mariadb.php"); 

    }
?>




