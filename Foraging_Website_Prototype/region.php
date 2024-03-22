<!-- Group 2 Foraging for food Website -->
<!-- Members: Alejandro Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox-->
<!-- For CSCI370 Team Project for Professor Renner-->

<!DOCTYPE html>
<!--region selection map-->

<?php
  session_start();
	include 'connect.php';
?>

<h2> Map </h2>

<!-- DOESNT WORK  -->
<img src="US_Regional_Map.png" alt="US_Regional_Map" height="450" >
<!-- $sql_insert  -->
<h4>Select a region for foraging information.</h4>

<form method="post" action="region.php">
  <input type="radio" name="region" value="W" /> West: Rocky Mountains and Pacific States <br />
  <input type="radio" name="region" value="S"/> South: Southern States<br />
  <input type="radio" name="region" value="N"/> North: Mississippi to the Rocky Mountains<br />
  <input type="radio" name="region" value="E"/> East: North Eastern US<br />
  <input type="submit" name="submit_region">
</form>

<?php


if(isset ($_POST['submit_region'])){

  //connect to maria db
  $conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);

  //error checking
  if($conn->connect_errno) {echo $conn->connect_error;}

  //get the value from the radio node
  $region =$_POST['region'];

  //get the email in a usable form (wont work just using session variable)
  $email = $_SESSION['email'];

  //update the users region in the database
  $sql = "UPDATE User SET Rname='$region' WHERE Email = '$email' ";
  
  //checking if the query is successful (it works with the wrong email as well. Need to fix it)
  if ($conn->query($sql) === TRUE){

    echo "Record updated successfully <br>";
    echo "UPDATE User SET Rname='$region' WHERE Email = '$email' ";
    $_SESSION['region'] = $region;

    $web_addr = "Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/options.php";
		header($web_addr);

  }else{

    echo "Error updating record: " . $conn->error;
    
    
  }	

}
?>

</html>
<html>
	
    <form method="POST" action = "maria_db.php">
         <input type = "submit" name = "logout" value = "Logout" style="float: right;">
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