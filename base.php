<?php
require 'vendor/autoload.php'; // include Composer's autoloader

// Testing variable in sert in DB
$name = "Rahul Shyokand";
$age = 20 ;
$interest = ["cubing" , "tech" , "mobile" , "computer"];


$client = new MongoDB\Client("mongodb://localhost:27017");


/*****************collection created *******************/

/******************db_name -> collection_name*****************/
$collection = $client->user_prefences->user_details;

$result = $collection->insertOne( [ 'name' => $name  , 'age' => $age , 'interest' => $interest ] );

echo "Inserted with Object ID '{$result->getInsertedId()}'";

?>
