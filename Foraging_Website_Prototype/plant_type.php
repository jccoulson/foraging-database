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
    <h4> Select a plant type </h4>
    <form method="post" action="plant_type.php">
        <input type="submit" name="query_type" value="Herb">
        <input type="submit" name="query_type" value="Fungi">
        <input type="submit" name="query_type" value="Nut">
        <input type="submit" name="query_type" value="Fruit">
        <input type="submit" name="query_type" value="Cactus">
    </form>
    <br>
    EOL;

    if (isset($_POST['query_type'])){
        //print the type that was selected
        $type = strtolower($_POST['query_type']);
        $region = strtolower($region);
        
        //display what we are selecting
        echo "Selecting the common name and description from every $type in the $region region. <br><br>";

        //do the query stuff
        $conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);

        $region = $_SESSION['region'];

        //query
        $q = $conn->query("SELECT common_name, description from plant join resides_in using (pscientific_name) where type = '$type' and rname = '$region'");

        while ($q_row = $q->fetch_assoc()){
            $name = $q_row["common_name"];
            $desc = $q_row["description"];

            echo <<<EOL
                $name
                <br>
                <textarea readonly rows="5" cols="90">
                    $desc
                </textarea>
                <br>
                <form method="post" action ="plant_type.php">
                    <input type="submit" name="plant" value="$name">
                </form>
                <br><br>
            EOL;
        } 
        $conn->close (); 
    }

    if (isset($_POST['plant'])){
        $_SESSION['com_name'] = $_POST['plant'];
        $_SESSION['type'] = $type;

        //send to the next page
        $web_addr = "Location: https://www.ecst.csuchico.edu/~aalfaro5/foraging/plant.php";
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