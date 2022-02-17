<?php
require 'DataBaseConnectionManager.php';

$databaseConnectionManager = new DataBaseConnectionManager();

$name = $_POST['nomusager'];
$email = $_POST['email'];
$numtel = $_POST['numtel'];
$numcell = $_POST['numcell'];
$MDP = $_POST['MDP'];

$databaseConnectionManager->addFormToBD($name, $email, $numtel, $numcell, $MDP);


