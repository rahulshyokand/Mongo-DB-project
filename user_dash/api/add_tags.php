<?php
require '../../config.php' ;
require '../fetch_user.php' ;
// file imported for mongo connection setup
//require '../vendor/autoload.php'; // include Composer's autoloader
//$i=0;
if(isset($_POST['topics']))
{
	$topics=$_POST['topics'];
	//verify Data
	// $con = new MongoDB\Client("mongodb://localhost:27017");
	//$con = new MongoClient();
	// Select Database
	if($client){
		// Selected in config.php File DataBase
	  /********  $db = $->user_preference; *****/
	    // Select Collection
	    $collection = $db->user_account;
	    $qry = array("email" => $email);
	    $result = $collection->findOne($qry);
      //echo $result ;
      // Email ID Already Exists
if (!empty($result)) {
    echo 2;
    die ;
}
$name= $_POST['name'];
$password = md5($_POST['password']);
$contact = $_POST['contact'];
$email = $_POST['email'];
//$token = mt_rand(100000, 999999);
$date = date("Y-m-d");

if($client){
    // Select Collection
    $collection = $db->user_account;
    $result = $collection->updateOne( ({'email':''},{$set:{'title':'New MongoDB Tutorial'}}) );

    //echo "user inserted in collection with object id '{$result->getInsertedId()}'";

  }
if($result->getInsertedId())
{
                  echo 1;
}
}
}
 else {
   echo 3 ;
 }

 ?>
