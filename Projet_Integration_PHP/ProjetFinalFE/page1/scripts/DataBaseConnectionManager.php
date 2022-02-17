<?php

class DataBaseConnectionManager{
    
    private $serverName = "localhost"; // To Change according to your configuration
    private $userName = "root"; // To Change according to your configuration
    private $password = ""; // To Change according to your configuration
    private $dbName = "projetphp"; // To Change according to your configuration
    private $conn;

    function __construct(){

    }


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


    public function addFormToBD($name, $email, $numtel, $numcell, $MDP){

            $conn = $this->getConnection();

            if($conn->connect_error){
                    echo "Erreur de connection";
            }
            $stmt = $conn->prepare("INSERT INTO infoformulaire (nomusager, email, numtel, numcell, MDP) VALUES (?, ?, ?, ?, ?);");
            $stmt->bind_param("sssss", $name, $email, $numtel, $numcell, $MDP);
            $stmt->execute();
            $stmt->close();
            echo "New records added successfully";
            $conn->close();
    }


    public function getImageList(){

        foreach($image as $value){
        $sql = "select nomfichier from images";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        $image = $row['name']
        $image_src = "upload/".$image;

        ?>
        <img src='<?php echo $image_src; ?>'>
        }
    }
}

