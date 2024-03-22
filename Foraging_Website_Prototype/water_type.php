<!-- Group 2 Foraging for food Website -->
<!-- Members: Alejandro Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox-->
<!-- For CSCI370 Team Project for Professor Renner-->

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<?php
	session_start();		//required at top
	include 'connect.php';	//incude connect script on every page
?>
<!-- Give options for query  -->
<?php
            
    //echo the entities that we want to query
    if ($_SESSION['region'] == 'N') $region = "Northern";
    else if ($_SESSION['region'] == 'E') $region = "Eastern";
    else if ($_SESSION['region'] == 'S') $region = "Southern";
    else if ($_SESSION['region'] == 'W') $region = "Western";

    //echo the entities that we want to query
    echo <<<EOL
    <h1> Query Selection In The $region Region</h1>
    <form method="post" action="options.php">
        Back to entity select:
        <input type="submit" name="back_to_options" value= "back">
    </form>
    <hr>
    <h4> Select a water type </h4>
    <form method="post" action="water_type.php">
        <input type="submit" name="query_type" value="Fresh">
        <input type="submit" name="query_type" value="Salt">
        <input type="submit" name="query_type" value="Foul">
    </form>
    <br>

    EOL;
    if (isset($_POST['query_type'])){
        //print the type that was selected
        $_SESSION['type'] = $_POST['query_type'];

        $web_addr = "Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/water.php";
		header($web_addr);
    }
?>
<html>
<body class="water-type">
    <form method="POST" action = "maria_db.php">
        <input type = "submit" name = "logout" value = "Logout" style="float: right;">
    </form>
</body>
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