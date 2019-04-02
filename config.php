<?php
/*function object_2_array($result)
{
 $array = array();
 foreach ($result as $key=>$value)
 {
   if (is_object($value))
   {
     $array[$key] = object_2_array($value);
   }
   if (is_array($value))
   {
     $array[$key] = object_2_array($value);
   }
   else
   {
     $array[$key]=$value;
   }
 }
 return $array;
} */
/*************************************************************************/
/****** This file will be used in all files for connection to MongoDB ******/
require 'vendor/autoload.php' ;
$client = new MongoDB\Client("mongodb://localhost:27017");
/****** Database for the proect Selected here *******/
$db = $client->user_preference ;
/****** Validating Client for connection  ******/
if($client == false){
  echo "MongoDB Connection Error" ;
}
/***************USE CASE FOR THE FIlE***********/
/********Choose Collection in main file********/
 /***********$collection = $db->news ***********/
 /********************************************/

 ?>
