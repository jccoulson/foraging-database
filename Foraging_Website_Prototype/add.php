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
<h1>Adding to the animal database</h1>
<h2>Enter the animal information you want to add to the database then submit</h1>

<form method="post" action="add.php">
   <b>
   Scientific Name:* <br>
   <input type="text" name = "animal_scientific"><br>
   Preparation: <br>
   <textarea name = "animal_preparation" rows = "5" cols = "40"></textarea><br>
   Common name:* <br>
   <input type="text" name = "animal_common"><br>
   Type <br>
  <input type="text" name = "animal_type"><br>
   Toxicity*("safe" or "toxic"): <br>
   <input type="text" name = "animal_toxicity"><br>
   Size: <br>
   <input type="text" name = "animal_size"><br>
   Description: <br>
  <textarea name = "animal_description" rows = "5" cols = "40"></textarea><br>
   Picture url: </b> <br>
   <input type="text" name = "animal_picture"><br>
   * = required information<br>
<input type="submit" name="animal_submit" value="Create Animal">
</form>


<?php
if(isset ($_POST['animal_submit']))
{
	if((!(empty($_POST['animal_scientific']))) && (!(empty($_POST['animal_common'])))&&(!(empty($_POST['animal_toxicity']))) )
	{
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if ($conn->connect_errno) { echo $conn->connect_error; }

		$animal_scientific = $_POST['animal_scientific'];
		$animal_preparation = $_POST['animal_preparation'];
		$animal_common = $_POST['animal_common'];
		$animal_type = $_POST['animal_type'];
		$animal_toxicity = $_POST['animal_toxicity'];
		$animal_size= $_POST['animal_size'];
		$animal_description = $_POST['animal_description'];
		$animal_picture = $_POST['animal_picture'];

		$sql_insert = "INSERT INTO Animal (Ascientific_name, Preparation, Common_name, Type, Toxicity, Size, Description, Picture_url)
		VALUES ('$animal_scientific', '$animal_preparation', '$animal_common', '$animal_type', '$animal_toxicity', '$animal_size', '$animal_description', '$animal_picture')";

		if ($conn->query($sql_insert) === TRUE)
		{
  			echo "New Animal record created successfully";
		} 
		else
		{
 			echo "There was an error creating the record. Please try again.";
		} 

		
	}
	else //this is a catch all if they didnt enter info in required spots or they entered an animal that already exists maybe sperate if they entered existing animal
	{
		echo "Please enter information in the required sections";
	}
}


}

if($_SESSION['chosen_entity'] == 'Plant')
{
?>

<h1>Adding to the Plant database</h1>
<h2>Enter the plant information you want to add to the database then submit</h1>

<form method="post" action="add.php">
   <b>
   Scientific Name:* <br>
   <input type="text" name = "plant_scientific"><br>
   Preparation :<br>
   <textarea name = "plant_preparation" rows = "5" cols = "40"></textarea><br>
   Cultivating information :<br>
   <textarea name = "plant_cultivating" rows = "5" cols = "40"></textarea><br>
   Type:  <br>
   <input type="text" name = "plant_type"><br>
   Edible parts:<br>
   <textarea name = "plant_edible" rows = "4" cols = "40"></textarea><br>
   Common name:* <br>
   <input type="text" name = "plant_common"><br>
   Toxicity*("safe" or "toxic"): <br>
   <input type="text" name = "plant_toxicity"><br>
   Family name:<br>
   <input type="text" name = "plant_family"><br>
   Description :<br>
   <textarea name = "plant_description" rows = "5" cols = "40"></textarea><br>
   Picture url: <br>
  <input type="text" name = "plant_picture"><br>
   </b>
     * = required information<br>
<input type="submit" name="plant_submit" value="Create Plant">
</form>


<?php
if(isset ($_POST['plant_submit']))
{
	if((!(empty($_POST['plant_scientific']))) && (!(empty($_POST['plant_common'])))&&(!(empty($_POST['plant_toxicity']))) )
	{
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if ($conn->connect_errno) { echo $conn->connect_error; }

		$plant_scientific = $_POST['plant_scientific'];
		$plant_preparation = $_POST['plant_preparation'];
		$plant_cultivating = $_POST['plant_cultivating'];
		$plant_type = $_POST['plant_type'];
		$plant_edible = $_POST['plant_edible'];
		$plant_common = $_POST['plant_common'];
		$plant_toxicity = $_POST['plant_toxicity'];
		$plant_family= $_POST['plant_family'];
		$plant_description = $_POST['plant_description'];
		$plant_picture = $_POST['plant_picture'];

		$sql_insert = "INSERT INTO Plant (Pscientific_name, Preparation, Cultivating, Type, Parts_edible, Common_name, Toxicity, Family_name, Description, Picture_url)
		VALUES ('$plant_scientific', '$plant_preparation', '$plant_cultivating', '$plant_type', '$plant_edible', '$plant_common', '$plant_toxicity', '$plant_family', '$plant_description', '$plant_picture')";

		if ($conn->query($sql_insert) === TRUE)
		{
  			echo "New Plant record created successfully";
		} 
		else
		{
 			echo "There was an error creating the record. Please try again.";
		} 

		
	}
	else //this is a catch all if they didnt enter info in required spots or they entered a plant that already exists maybe sperate if they entered existing plant
	{
		echo "Please enter information in the required sections";
	}
}


}


if($_SESSION['chosen_entity'] == 'User')
{
?>

<h1>Adding to the User database</h1>
<h2>Enter the user information you want to add to the database then submit</h1>

<form method="post" action="add.php">
   <b>
   Email:* <br>
   <input type="text" name = "user_email"><br>
   First name:<br>
   <input type="text" name = "user_first"><br>
   Last name:<br>
   <input type="text" name = "user_last"><br>
   Type*("Employee" or "Regular"): <br>
   <input type="text" name = "user_type"><br>
   Password:<br>
   <input type="text" name = "user_password"><br>
   Region*('N', 'S', 'E', 'W'): </b> <br>
   <input type="text" name = "user_region"><br>

        * = required information<br>
<input type="submit" name="user_submit" value="Create User">
</form>



<?php
if(isset ($_POST['user_submit']))
{
	if(!(empty($_POST['user_email'])) && (!(empty($_POST['user_type'])))&&(!(empty($_POST['user_region']))))
	{	
		
		$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);
		if ($conn->connect_errno) { echo $conn->connect_error; }

		$user_email = $_POST['user_email'];
		$user_first = $_POST['user_first'];
		$user_last = $_POST['user_last'];
		$user_type = $_POST['user_type'];
		$user_password = $_POST['user_password'];
		$user_region = $_POST['user_region'];
		
		$sql_insert = "INSERT INTO User (Email, First_name, Last_name, Type, Password, Rname)
		VALUES ('$user_email', '$user_first', '$user_last', '$user_type' ,'$user_password', '$user_region')";

		if ($conn->query($sql_insert) === TRUE)
		{
  			echo "New User record created successfully";
		} 
		else
		{
 			echo "There was an error creating the record. Please try again.";
		} 

		
	}
	else //this is a catch all if they didnt enter info in required spots or they entered a user that already exists maybe sperate if they entered existing user
	{
		echo "Please enter information in the required sections";
	}
}

}
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