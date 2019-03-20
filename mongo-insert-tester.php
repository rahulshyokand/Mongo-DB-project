<?php
/**Config File for DB connection**/
require 'config.php' ;
/******Selecting Collection For usage*******/
$var = 'article';
$collection = $db->$var;
/*Inserting Data in DB*/
$result = $collection->insertOne( [ 'tag' => ['Technology' , 'cybersecurity' , 'Huawei' ] , 'date' => date("Y-m-d")   , 'news' => "Huawei opens cybersecurity lab in Brussels to win over EU" ] );
/***Output for the insertion shown***/
echo "Inserted with Object ID '{$result->getInsertedId()}'";

?>
