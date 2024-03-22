<!-- Group 2 Foraging for food Website -->
<!-- Members: Alejandro Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox-->
<!-- For CSCI370 Team Project for Professor Renner-->

<!-- Establish MariaDB server authentication -->
<?php
session_start(); //assinging for the database
if(isset($_POST['maria_password']))
{
    $_SESSION['maria_user'] = $_POST['maria_user']; 
    $_SESSION['maria_password'] = $_POST['maria_password']; 
    $_SESSION['db_username'] = $_POST['maria_user'] . "@ecc-db";
}

define ("DB_HOST", "ecc-db.csuchico.edu"); // hostname of DB server
define ("DB_USER", $_SESSION['db_username']); // username@ecc-db
define ("DB_NAME",  $_SESSION['maria_user']);          // username
define ("DB_PORT", 3306);                    // port number
define ("PASS", $_SESSION['maria_password']);              // Password to be filled by POST


?>
<!---------------- END -------------------------->
