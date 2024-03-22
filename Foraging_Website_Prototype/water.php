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

    //query the database for the specific entity
    $region = $_SESSION['region'];
    $type = strtolower($_SESSION['type']);
    
    //create new maria db connection
	$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);

    //check connection
    if ($conn->connect_errno) echo $conn->connect_error;

    //query
    $q = $conn->query("SELECT type, description, preparation, method_find from water where type = '$type'");

    while ($q_row = $q->fetch_assoc()){
        
        $desc = $q_row['description'];
        $prep = $q_row['preparation'];
        $find = $q_row['method_find'];
        $type = ucfirst($type);
    
        echo <<<EOL
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Cove_with_Shamans_Rock_Olkhon_Island_Lake_Baikal_Russia_%2814594856552%29.jpg/1024px-Cove_with_Shamans_Rock_Olkhon_Island_Lake_Baikal_Russia_%2814594856552%29.jpg" height='400'>
            <br>
            Image Source: Wikipedia
            <hr>

            <h4>

            $type Water <br>
            <textarea readonly rows="5" cols="90">
                $desc
            </textarea>
            <br><br>

            Preparation <br>
            <textarea readonly rows="5" cols="90">
                $prep
            </textarea>
            <br><br>

            How To Find <br>
            <textarea readonly rows="2" cols="90">
                $find
            </textarea>
            <br><br>

            <form method="post" action ="water_type.php">
                <input type="submit" name="back" value="Back">
            </form>
            </h4>
            <br><br>
        EOL;
    }
    $conn->close();
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
