<?php
require '../../config.php' ;
// file imported for mongo connection setup
//require '../vendor/autoload.php'; // include Composer's autoloader
if(isset($_POST['email']))
{
	$email = $_POST['email'];
	$password=md5($_POST['password']);

	//verify Data
	// $con = new MongoDB\Client("mongodb://localhost:27017");
	//$con = new MongoClient();
	// Select Database
	if($client){
		// Selected in config.php File DataBase
	  /********  $db = $->user_preference; *****/
	    // Select Collection
	    $collection = $db->user_account;
	    $qry = array("email" => $email, "password" => $password);
	    $result = $collection->findOne($qry);
			if(!empty($result))
			{
				// i = 1 for success login
				//$json = MongoDB\BSON\toJSON(MongoDB\BSON\fromPHP($result));
			//	 echo "<script> alert($json); </script>";
				session_start();
				$_SESSION['email']=$email;
        echo 1;
		    //load the Dash board file after login success
			//	echo'<script> window.location.replace("dash/index.html");</script>';
				//header("Location: https://gdgufest.com/dashboard.php") ;
			}
			else
			{
				// i = 2 for invlid credentials
		    echo 2 ;
			}

	}else{
	    die("Mongo DB not connected!");
	}
} //isset submit ends
?>
