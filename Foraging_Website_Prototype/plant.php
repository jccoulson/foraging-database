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
    $com_name = $_SESSION['com_name'];
    $type = $_SESSION['type'];

    //create new maria db connection
	$conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);

    //check connection
    if ($conn->connect_errno) echo $conn->connect_error;

    //query
    $q = $conn->query("SELECT pscientific_name, common_name, family_name, description, preparation, cultivating, parts_edible, toxicity, picture_url from plant where common_name = '$com_name'");
    //$q = $conn->query("SELECT common_name, family_name FROM plant where pscientific_name = '$sci_name'");
    while ($q_row = $q->fetch_assoc()){
        
        $sci_name = $q_row['pscientific_name'];
        $fam_name = $q_row['family_name'];
        
        $desc = $q_row['description'];
        $prep = $q_row['preparation'];
        $cult = $q_row['cultivation'];
        $parts = $q_row['parts_edible'];
        $tox = $q_row['toxicity'];
        $url = $q_row['picture_url'];

        
        echo <<<EOL
            <img src="$url" height='400'>
            <br>
            Image Source: Wikipedia

            <hr>
            <h4>
            $com_name ($sci_name) <br>
            <textarea readonly rows="5" cols="90">
                $desc
            </textarea>
            <br><br>

            Preparation <br>
            <textarea readonly rows="5" cols="90">
                $prep
            </textarea>
            <br>
            Toxticity: $tox
            <br><br>

            Edible Parts <br>
            <textarea readonly rows="2" cols="90">
                $parts
            </textarea>
            <br><br>

            <form method="post" action ="plant_type.php">
                <input type="submit" name="back" value="Back">
            </form>

            </h4>

            <br><br>
            
        EOL;
              

    }
    $conn->close ();  
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
