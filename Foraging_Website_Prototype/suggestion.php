<!-- Group 2 Foraging for food Website -->
<!-- Members: Alejandro Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox-->
<!-- For CSCI370 Team Project for Professor Renner-->

<!DOCTYPE html>

<?php
	session_start();		//required at top
	include 'connect.php';	//incude connect script on every page
?>



<!-- After suggestion is imputed, connect to DB and update...ADD? -->
<?php
    
    //create form
    echo <<<EOL
    <h1> Suggestion Page</h1>
    <form method="post" action="options.php">
        Back to entity select:
        <input type="submit" name="back_to_options" value= "back">
    </form>
    <hr>

    Suggestion <br>
    <form method="post" action ="suggestion.php">
        <textarea name="suggest_text" rows="5" cols="90" placeholder="Enter comment here and click submit"></textarea>
        <br>
    
        <input type="submit" name="sub" value="submit">
    </form>
    EOL;

    

    //add if button is select
    if (isset($_POST['sub'])){

        $text = $_POST['suggest_text'];

        //only add to the database if they type something in the suggestion box
        if (strlen($text) > 0){
                       
            //connect to the database
            $conn = new mysqli (DB_HOST, DB_USER, PASS, DB_NAME, DB_PORT);

            //check connection
            if ($conn->connect_errno) echo $conn->connect_error;

            //query
            $email = $_SESSION['email'];

            $sql = "INSERT INTO suggestion VALUES ('$text', '$email')";
            //$sql = "INSERT INTO SUGGESTION VALUES ('This is just a another stuff suggestion', 'fake@fake.com')";
            
            if ($conn->query($sql) === TRUE){
                echo "Submittion was successful";
            }else{
                echo "Failed to submit";
            }
            
            $conn->close();
            
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
