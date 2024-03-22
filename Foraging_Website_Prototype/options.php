<!-- Group 2 Foraging for food Website -->
<!-- Members: Alejandro Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox-->
<!-- For CSCI370 Team Project for Professor Renner-->

<!DOCTYPE html>

<?php
	session_start();		//required at top
	include 'connect.php';	//incude connect script on every page
?>

<!-- Give options for query  -->
<?php
    //set region to full name for displaying the header
    if ($_SESSION['region'] == 'N') $region = "Northern";
    else if ($_SESSION['region'] == 'E') $region = "Eastern";
    else if ($_SESSION['region'] == 'S') $region = "Southern";
    else if ($_SESSION['region'] == 'W') $region = "Western";
        
    //echo the entities that we want to query
    echo <<<EOL
    <h1> Query Selection In The $region Region</h1>
    <form method="post" action="region.php">
        Back to region select:
        <input type="submit" name="back_to_region" value= "back">
    </form>
    <hr>
    <form method="post" action="options.php">
        <input type="submit" name="query" value="Plant">
        <input type="submit" name="query" value="Animal">
        <input type="submit" name="query" value="Water">
        <br><br>
        <input type="submit" name="suggestion" value ="Suggestion">
    </form>
    EOL;

    if (isset($_POST['query'])){
        //print the entity that was selected
        $_SESSION['entity'] == $_POST['query'];

        //send to the next page
        $web_addr = "Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/" . strtolower($_POST['query'])  . "_type.php";
		header($web_addr);
               
    } else if (isset($_POST['suggestion'])){
        //send to the next page
        $web_addr = "Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/suggestion.php";
		header($web_addr);
    }
?>

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

