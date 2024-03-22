<!-- Group 2 Foraging for food Website -->
<!-- Members: Alejandro Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox-->
<!-- For CSCI370 Team Project for Professor Renner-->

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<?php
	include 'connect.php';
	session_start();
?>

<div class = "employee-chopg">
  
	<body class = "employee-chopg">
  
		<div class="header">
		  <h1>Foraging for Food</h1>
		  
	  
		  
			  <form method="POST" action = "maria_db.php">
				  <input type = "submit" name = "logout" value = "Logout" style="float: right;">
			  </form>
		  
			 <form method="post" action ="employee_choice.php">
						  <input type="submit" name="back" value="Back" style="float: left">
					  </form>
		  
		  <!-- <img src="logo1.jpeg" alt="logo" />                 logo for header -->
		</div>

		<div class = "container">
			<div class = "region-box">
				<div class = "col-md-6 login">
<h1><font size="7">Welcome employee</font></h1>
<h2> <font size="6">Choose what category you would like to change </font> </h2>

<form method="post" action="employee_choice.php"> 
  <input type="radio" name="entity_option" value="Animal" /> Animal <br />
  <input type="radio" name="entity_option" value="Plant"/> Plant<br />
  <input type="radio" name="entity_option" value="Water"/> Water (cannot add or remove water)<br />
  <input type="radio" name="entity_option" value="User"/> User<br />

<h3> <font size="5">Choose what you would like to do to that category </font> </h3>
			



<input type="submit" name="update" value = "Update the database" style="height:300px; width:300px; font-size:15px">
<input type="submit" name="add" value = "Add to the database" style="height:300px; width:300px; font-size:15px">
<input type="submit" name="remove" value = "Remove from the database" style="height:300px; width:300px; font-size:15px"><br>

</body>
</div>
</div>
</div>



<?php
if(isset ($_POST['update']) &&($_POST['entity_option'] == 'Animal')  )
{
	$_SESSION['chosen_entity'] = $_POST['entity_option'];
	echo $_SESSION['chosen_entity'];
	header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/update.php");
}

if(isset ($_POST['update']) &&($_POST['entity_option'] == 'Plant') )
{
	$_SESSION['chosen_entity'] = $_POST['entity_option'];
	echo $_SESSION['chosen_entity'];
	header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/update.php");
}

if(isset ($_POST['update']) &&($_POST['entity_option'] == 'Water'))
{
	$_SESSION['chosen_entity'] = $_POST['entity_option'];
	echo $_SESSION['chosen_entity'];
	header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/update.php");

}
if(isset ($_POST['update']) &&($_POST['entity_option'] == 'User'))
{
	$_SESSION['chosen_entity'] = $_POST['entity_option'];
	echo $_SESSION['chosen_entity'];
	header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/update.php");

}

if(isset ($_POST['add']) &&($_POST['entity_option'] == 'Animal')  )
{
	$_SESSION['chosen_entity'] = $_POST['entity_option'];
	echo $_SESSION['chosen_entity'];
	header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/add.php");
}
if(isset ($_POST['add']) &&($_POST['entity_option'] == 'Plant')  )
{
	$_SESSION['chosen_entity'] = $_POST['entity_option'];
	echo $_SESSION['chosen_entity'];
	header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/add.php");
}
if(isset ($_POST['add']) &&($_POST['entity_option'] == 'Water')  )
{
	echo "Sorry you cannot add to the water entity";
}
if(isset ($_POST['add']) &&($_POST['entity_option'] == 'User')  )
{
	$_SESSION['chosen_entity'] = $_POST['entity_option'];
	echo $_SESSION['chosen_entity'];
	header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/add.php");
}

if(isset ($_POST['remove']) &&($_POST['entity_option'] == 'Animal')  )
{
	$_SESSION['chosen_entity'] = $_POST['entity_option'];
	echo $_SESSION['chosen_entity'];
	header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/remove.php");
}
if(isset ($_POST['remove']) &&($_POST['entity_option'] == 'Plant')  )
{
	$_SESSION['chosen_entity'] = $_POST['entity_option'];
	echo $_SESSION['chosen_entity'];
	header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/remove.php");
}
if(isset ($_POST['remove']) &&($_POST['entity_option'] == 'Water')  )
{
	echo "sorry you cannot remove any current water types.";
}
if(isset ($_POST['remove']) &&($_POST['entity_option'] == 'User')  )
{
	$_SESSION['chosen_entity'] = $_POST['entity_option'];
	echo $_SESSION['chosen_entity'];
	header("Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/remove.php");
}

?>


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