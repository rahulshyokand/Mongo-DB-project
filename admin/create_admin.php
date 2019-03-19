<?php
/****** Creating Account for accessing Add system *******/
/************************
require '../vendor/autoload.php'; // include Composer's autoloader

$username = "gdgucse";
$password = md5("gdgucse");

// $client = new MongoClient();
$client = new MongoDB\Client("mongodb://localhost:27017");

$collection = $client->user_preference->account;

$result = $collection->insertOne( [ 'username' => $username , 'date' => date("Y-m-d")  , 'password' => $password ] );

echo "user for admin panel created '{$result->getInsertedId()}'";
*************************/

 // if(isset($_POST['username']) && isset($_POST['password'])){
 //     $username = ($_POST['username']);
 //     $password = ($_POST['password']);
 //     $pass_hash = md5($password);


 //}
 ?>
