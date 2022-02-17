<?php
require 'DataBaseConnectionManager.php';

$databaseConnectionManager = new DataBaseConnectionManager();


//$host = "localhost"; /* Host name */
//$user = "root"; /*User*/
//$password = ""; /* Password */
//$dbname = "projetphp"; /* Database name */

//$con = mysqli_connect($host, $user, $password, $dbname);
// Check Connection
//if(!$con){
//    die("Connection failed: " .mysqli_connect_error());
//}

/* OU BIEN */

public function getConnection(){
    try{
        $conn = new mysqli ("localhost", $this->userName, $this->password, $this->dbName);
        $conn->set_charset("utf8");
        if($conn->connect_error){
            echo "Erreur de connexion, veuillez réessayer"
        }
    }catch(Exception $e){
        //That means the database is not available or credentials are bad. Don't give this information to the user.
        //navigateToErrorPage();
    }
    return $conn;
}


$databaseConnectionManager->getImagesList();
