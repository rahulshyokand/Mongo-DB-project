<?php
require '../../config.php' ;
require '../api/fetch_user.php' ;
// file imported for mongo connection setup
//require '../vendor/autoload.php'; // include Composer's autoloader
//$i=0;
if(isset($_POST['topics']))
{
	if($client){
      // Email ID Already Exists
if($client){
    // Select Collection
		$topics=$_POST['topics'];
    $tags_array = explode(",",$topics);
	//echo (	print_r($tags_array) );

    $collection = $db->user_account;
//	$result=$collection->updateOne(['email' => $email,  'tags' => $tags_array] ) ;
	$result = $collection->updateOne(
    [ 'email' => $email ],
    [ '$set' => [ 'tags' => $tags_array ]]
);

//$result = $collection->updateOne( $filter =  ['email': $email],[$set:{'topics': $tags_array}]);
//echo "user inserted in collection with object id '{$result->getInsertedId()}'";
  }
if($result)
{
      echo 1;
}
}
}
 else {
   echo 3 ;
 }

 ?>
