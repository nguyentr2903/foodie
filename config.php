
<?php
/* Define MySQL connection details and database table name */
$SETTINGS["mysqli_database"] = 'foodies';
$SETTINGS["USERS"] = 'php_users_login'; // this is the default table name that we used

/* Connect to MySQL using MySQLi */
$connection = mysqli_connect("localhost", "root", "") or die('Unable to connect to MySQL server.<br ><br >Please make sure your MySQL login details are correct.');

$db = mysqli_select_db($connection, $SETTINGS["mysqli_database"]) or die('Unable to select database.');
?>
