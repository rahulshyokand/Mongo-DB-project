<?php
require 'vendor/autoload.php'; // include Composer's autoloader

$var = 'article';

$client = new MongoDB\Client("mongodb://localhost:27017");

$collection = $client->user_preference->;

$result = $collection->insertOne( [ 'tag' => ['Technology' , 'cybersecurity' , 'Huawei' ] , 'date' => date("Y-m-d")   , 'news' => "Huawei opens cybersecurity lab in Brussels to win over EU" ] );

echo "Inserted with Object ID '{$result->getInsertedId()}'";

?>
