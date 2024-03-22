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
<h1>Updating the animal database</h1>
<h2>Enter the Scientific name of the animal you want to update database</h1>

<form method="post" action="update.php">
   <b>Scientific Name <br>
   <input type="text" name = "animal_scientific"><br>
   <h3>Enter the information you want updated then press submit</h1>
   Preparation: <br>
   <textarea name = "animal_preparation" rows = "5" cols = "40"></textarea><br>
   Common name: <br>
   <input type="text" name = "animal_common"><br>
   Type: <br>
   <input type="text" name = "animal_type"><br>
   Toxicity("safe" or "toxic"): <br>
   <input type="text" name = "animal_toxicity"><br>
   Size: <br>
   <input type="text" name = "animal_size"><br>
   Description: <br>
   <textarea name = "animal_description" rows = "5" cols = "40"></textarea><br>
   Picture url: <br></b>
   <input type="text" name = "animal_picture"><br>
<input type="submit" name="animal_submit" value="animal_submit">
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
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if($conn->connect_errno) {echo $conn->connect_error;}

		$animal_scientific = $_POST['animal_scientific'];
		$scientific_query = $conn->query("select Ascientific_name from Animal where Ascientific_name = '$animal_scientific'");
		if (!($scientific_query->num_rows))
		{
			echo "<br>" ."<b>There is no animal with that scientific name<b>";
		}
		else
		{
			$animal_preparation = $_POST['animal_preparation'];
			$animal_common = $_POST['animal_common'];
			$animal_type = $_POST['animal_type'];
			$animal_toxicity = $_POST['animal_toxicity'];
			$animal_size = $_POST['animal_size'];
			$animal_description = $_POST['animal_description'];
			$animal_picture = $_POST['animal_picture'];
			//echo $preparation;
			//echo $scientific;
			if(!(empty($_POST['animal_preparation'])))
			{
				$update_preparation = "UPDATE Animal SET Preparation='$animal_preparation' WHERE Ascientific_name = '$animal_scientific' ";
				if ($conn->query($update_preparation) === TRUE)
				{
   					 echo "<br>" ."<b>Preparation updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['animal_common'])))
			{
				$update_common = "UPDATE Animal SET Common_name='$animal_common' WHERE Ascientific_name = '$animal_scientific' ";
				if ($conn->query($update_common) === TRUE)
				{
   					 echo "<br>" ."<b>Common name updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['animal_type'])))
			{
				$update_type = "UPDATE Animal SET Type='$animal_type' WHERE Ascientific_name = '$animal_scientific' ";
				if ($conn->query($update_type) === TRUE)
				{
   					 echo "<br>" ."<b>Type updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['animal_toxicity'])))
			{
				$update_toxicity = "UPDATE Animal SET Toxicity='$animal_toxicity' WHERE Ascientific_name = '$animal_scientific' ";
				if ($conn->query($update_toxicity) === TRUE)
				{
   					 echo "<br>" ."<b>Toxicity updated succesfully<b> ";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['animal_size'])))
			{
				$update_size = "UPDATE Animal SET Size='$animal_size' WHERE Ascientific_name = '$animal_scientific' ";
				if ($conn->query($update_size) === TRUE)
				{
   					 echo "<br>" ."<b>Size updated succesfully<b> ";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record:<b> " . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['animal_description'])))
			{
				$update_description = "UPDATE Animal SET Description='$animal_description' WHERE Ascientific_name = '$animal_scientific' ";
				if ($conn->query($update_description) === TRUE)
				{
   					 echo "<br>" ."<b>Description updated succesfully<b> ";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['animal_picture'])))
			{
				$update_picture = "UPDATE Animal SET Picture_url='$animal_picture' WHERE Ascientific_name = '$animal_scientific' ";
				if ($conn->query($update_picture) === TRUE)
				{
   					 echo "<br>" ."<b>Picture updated succesfully<b> ";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}









		}
		


	}

}

if($_SESSION['chosen_entity'] == 'Plant')
{
?>

<h1>Updating the plant database</h1>
<h2>Enter the Scientific name of the plant you want to update database</h1>

<form method="post" action="update.php">
   Scientific Name <input type="text" name = "plant_scientific"><br>
   <h3>Enter the information you want updated then press submit</h1>

   <b>Preparation: <br>
   <textarea name = "plant_preparation" rows = "5" cols="40"></textarea><br>
   Cultivating: <br>
   <textarea name = "plant_cultivating" rows = "5" cols="40"></textarea><br>
   Type: <br>
   <input type="text" name = "plant_type"><br>
   Edible parts: <br>
   <textarea name = "plant_edible"  rows = "4" cols="40"></textarea><br>
   Common name: <br>
   <input type="text" name = "plant_common"><br>
   Toxicity("safe" or "toxic"): <br>
   <input type="text" name = "plant_toxicity"><br>
   Family name: <br>
   <input type="text" name = "plant_family"><br>
   Description: <br>
   <textarea name = "plant_description" rows = "5" cols="40"></textarea><br>
   Picture url: <br> </b>
   <input type="text" name = "plant_picture"><br>
<input type="submit" name="plant_submit" value="Update Plant">
</form>

<h4>Display of scientific names of plants in database</h4>
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
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if($conn->connect_errno) {echo $conn->connect_error;}

		$plant_scientific = $_POST['plant_scientific'];
		$scientific_query = $conn->query("select Pscientific_name from Plant where Pscientific_name = '$plant_scientific'");
		
		if (!($scientific_query->num_rows))
		{
			echo "<br>" ."<b>There is no plant with that scientific name<b>";
		}
		else
		{
			$plant_preparation = $_POST['plant_preparation'];
			$plant_cultivating = $_POST['plant_cultivating'];
			$plant_type = $_POST['plant_type'];
			$plant_edible = $_POST['plant_edible'];
			$plant_common = $_POST['plant_common'];
			$plant_toxicity = $_POST['plant_toxicity'];
			$plant_family = $_POST['plant_family'];
			$plant_description = $_POST['plant_description'];
			$plant_picture = $_POST['plant_picture'];
			//echo $preparation;
			//echo $scientific;
			if(!(empty($_POST['plant_preparation'])))
			{
				$update_preparation = "UPDATE Plant SET Preparation='$plant_preparation' WHERE Pscientific_name = '$plant_scientific' ";
				if ($conn->query($update_preparation) === TRUE)
				{
   					 echo "<br>" ."<b>Plant preparation updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['plant_cultivating'])))
			{
				$update_cultivating = "UPDATE Plant SET Cultivating='$plant_cultivating' WHERE Pscientific_name = '$plant_scientific' ";
				if ($conn->query($update_cultivating) === TRUE)
				{
   					 echo "<br>" ."<b>Plant cultivating updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['plant_type'])))
			{
				$update_type = "UPDATE Plant SET Type='$plant_type' WHERE Pscientific_name = '$plant_scientific' ";
				if ($conn->query($update_type) === TRUE)
				{
   					 echo "<br>" ."<b>Plant type updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['plant_edible'])))
			{
				$update_edible = "UPDATE Plant SET Parts_edible='$plant_edible' WHERE Pscientific_name = '$plant_scientific' ";
				if ($conn->query($update_edible) === TRUE)
				{
   					 echo "<br>" ."<b>Plant edible parts updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}


			if(!(empty($_POST['plant_common'])))
			{
				$update_common = "UPDATE Plant SET Common_name='$plant_common' WHERE Pscientific_name = '$plant_scientific' ";
				if ($conn->query($update_common) === TRUE)
				{
   					 echo "<br>" ."<b>Plant common name updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			
			if(!(empty($_POST['plant_toxicity'])))
			{
				$update_toxicity = "UPDATE Plant SET Toxicity='$plant_toxicity' WHERE Pscientific_name = '$plant_scientific' ";
				if ($conn->query($update_toxicity) === TRUE)
				{
   					 echo "<br>" ."<b>Plant toxicity updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['plant_family'])))
			{
				$update_family = "UPDATE Plant SET Family_name='$plant_family' WHERE Pscientific_name = '$plant_scientific' ";
				if ($conn->query($update_family) === TRUE)
				{
   					 echo "<br>" ."<b>Plant family updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['plant_description'])))
			{
				$update_description = "UPDATE Plant SET Description='$plant_description' WHERE Pscientific_name = '$plant_scientific' ";
				if ($conn->query($update_description) === TRUE)
				{
   					 echo "<br>" ."<b>Plant description updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['plant_picture'])))
			{
				$update_picture = "UPDATE Plant SET Picture_url='$plant_picture' WHERE Pscientific_name = '$plant_scientific' ";
				if ($conn->query($update_picture) === TRUE)
				{
   					 echo "<br>" ."<b>Plant picture updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}


		}
		


	}

}


if($_SESSION['chosen_entity'] == 'Water')
{
?>

<h1>Updating the water database</h1>
<h2>Enter the type of water you want to update in the database</h1>

<form method="post" action="update.php">
   Water type <input type="text" name = "water_type"><br>
   <h3>Enter the information you want updated then press submit</h1>
	
   <b>
   Preparation: <br>
   <textarea name = "water_preparation" rows="5" cols="40"></textarea><br>
   Method to find: <br>
   <textarea name = "water_find" rows="5" cols="40"></textarea><br>
   Description: <br> </b>
   <textarea name = "water_description" rows="5" cols="40"></textarea><br>
<input type="submit" name="water_submit" value="water_submit">
</form>


<h4>Display of types of water in database</h4>
<?php

$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
if ($conn->connect_errno) { echo $conn->connect_error; }

$result = $conn->query("SELECT type from water");

while($row = $result->fetch_assoc())
{
	echo $row['type']. "<br>";
}

if(isset ($_POST['water_submit']))
	{
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if($conn->connect_errno) {echo $conn->connect_error;}

		$water_type = $_POST['water_type'];
		$type_query = $conn->query("select Type from Water where Type = '$water_type'");
		
		if (!($type_query->num_rows))
		{
			echo "<br>" ."<b>There is no water with that type<b>";
		}
		else
		{
			$water_preparation = $_POST['water_preparation'];
			$water_find = $_POST['water_find'];
			$water_description = $_POST['water_description'];
			//echo $preparation;
			//echo $scientific;
			if(!(empty($_POST['water_preparation'])))
			{
				$update_preparation = "UPDATE Water SET Preparation='$water_preparation' WHERE Type = '$water_type' ";
				if ($conn->query($update_preparation) === TRUE)
				{
   					 echo "<br>" ."<b>Water preparation updated succesfully <b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record:<b> " . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['water_find'])))
			{
				$update_find = "UPDATE Water SET Method_find='$water_find' WHERE Type = '$water_type' ";
				if ($conn->query($update_find) === TRUE)
				{
   					 echo "<br>" ."<b>Water finding method updated succesfully<b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record:<b> " . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['water_description'])))
			{
				$update_description = "UPDATE Water SET Description='$water_description' WHERE Type = '$water_type' ";
				if ($conn->query($update_description) === TRUE)
				{
   					 echo "<br>" ."<b>Water description updated succesfully<b>";

 				}
				else
				{
   					 echo "<br>" ."<b>Error updating record: <b>" . $conn->error;
    
  				}	
			}


		}
	}



}
if($_SESSION['chosen_entity'] == 'User')
{
?>

<h1>Updating the user database</h1>
<h2>Enter the email of the person you want to update info for in the database</h1>

<form method="post" action="update.php">
   User email <input type="text" name = "user_email"><br>
   <h3>Enter the information you want updated then press submit</h1>
   <b>
   First name: <br>
   <input type="text" name = "user_first"><br>
   Last name: <br>
   <input type="text" name = "user_last"><br>
   Type("Employee" or "Regular"):  <br>
   <input type="text" name = "user_type"><br>
   Region('N','S','E','W'): <br>
   <input type="text" name = "user_region"><br>
   Password: </b> <br>
   <input type="text" name = "user_password"><br>
<input type="submit" name="user_submit" value="user_submit">
</form>


<?php
if(isset ($_POST['user_submit']))
	{
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if($conn->connect_errno) {echo $conn->connect_error;}

		$user_email = $_POST['user_email'];
		$email_query = $conn->query("select Email from User where Email = '$user_email'");
		
		if (!($email_query->num_rows))
		{
			echo "There is no user with that email";
		}
		else
		{
			$user_first = $_POST['user_first'];
			$user_last = $_POST['user_last'];
			$user_type = $_POST['user_type'];
			$user_password = $_POST['user_password'];
			$user_region = $_POST['user_region'];

			if(!(empty($_POST['user_first'])))
			{
				$update_first = "UPDATE User SET First_name='$user_first' WHERE Email = '$user_email' ";
				if ($conn->query($update_first) === TRUE)
				{
   					 echo "User first name updated succesfully <br>";

 				}
				else
				{
   					 echo "Error updating record: " . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['user_last'])))
			{
				$update_last = "UPDATE User SET Last_name='$user_last' WHERE Email = '$user_email' ";
				if ($conn->query($update_last) === TRUE)
				{
   					 echo "User last name updated succesfully <br>";

 				}
				else
				{
   					 echo "Error updating record: " . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['user_type'])))
			{
				$update_type = "UPDATE User SET Type='$user_type' WHERE Email = '$user_email' ";
				if ($conn->query($update_type) === TRUE)
				{
   					 echo "User type updated succesfully <br>";

 				}
				else
				{
   					 echo "Error updating record: " . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['user_password'])))
			{
				$update_password = "UPDATE User SET Password='$user_password' WHERE Email = '$user_email' ";
				if ($conn->query($update_password) === TRUE)
				{
   					 echo "User password updated succesfully <br>";

 				}
				else
				{
   					 echo "Error updating record: " . $conn->error;
    
  				}	
			}
			if(!(empty($_POST['user_region'])))
			{
				$update_region = "UPDATE User SET Rname='$user_region' WHERE Email = '$user_email' ";
				if ($conn->query($update_region) === TRUE)
				{
   					 echo "User region updated succesfully <br>";

 				}
				else
				{
   					 echo "Error updating record: " . $conn->error;
    
  				}	
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

