<?php

// file imported for mongo connection setup
require '../vendor/autoload.php'; // include Composer's autoloader
$i=0;
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);

	//verify Data
	 $con = new MongoDB\Client("mongodb://localhost:27017");
	//$con = new MongoClient();
	// Select Database
	if($con){
		// Select DataBase
	    $db = $con->user_preference;
	    // Select Collection
	    $collection = $db->account;
	    $qry = array("username" => $username, "password" => $password);
	    $result = $collection->findOne($qry);
			if(!empty($result))
			{
				// i = 1 for success login

				//$json = MongoDB\BSON\toJSON(MongoDB\BSON\fromPHP($result));
		     $i=1;
			//	 echo "<script> alert($json); </script>";
				session_start();
				$_SESSION['username']=$username;

		    //load the Dash board file after login success
				echo'<script> window.location.replace("add_post.html");</script>';
				//header("Location: https://gdgufest.com/dashboard.php") ;
			}
			else
			{

				// i = 2 for invlid credentials
		    $i=2;
			}

	}else{
	    die("Mongo DB not connected!");
	}




	  // login for acceleron's if statement ends


	//login for sportopia



} //isset submit ends
?>

<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="UTF-8">

        <meta name="description" content="G.D.Goenka University proudly presents fifth edition of Acceleron`19,THE ANNUAL TECHNO- CULTURAL FESTIVAL of the University, which is scheduled from 6th March 2019 to 8th March 2019. ">


    <meta name="keywords" content="GDGU, GD Goenka University, Acceleron, Sportopia, IDEA, GD Goenka, Annual Fest, gdgufest.com, IDEA 2019, ECell, gdgoenkauniversity.com, Acceleron'19, Events at Gurgaon, Sportopia'19, IDEA'19, GD Goenka Education City, GDGEC, Aman Mathur, Cultural Fest">

    <meta name="author" content="GD Goenka University">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <title>GD Goenka University - Acceleron 2019</title>

    <link rel="icon" type="icon/ico" href="img/logo.png">

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



    <link href="css/et-line.css" rel="stylesheet">



    <link href="css/owl.carousel.min.css" rel="stylesheet">

    <link href="css/owl.theme.default.min.css" rel="stylesheet">



    <link rel="stylesheet" href="css/animate.min.css">



    <link href="css/main.css" rel="stylesheet">

</head>



<body style="background-color: #000000">

    <div class="loader">

        <div class="loader-outter"></div>

        <div class="loader-inner"></div>

    </div>


                    <style type="text/css">

                        .contact{
                            border:1px solid #f50136;
                            border-radius: 2rem;
                            margin: 10px;
                        }
                        .title{
                            color: white;
                        }
                        .category{margin-top: 50px;}
                        .contact:hover{
                            background-color: #f50136;
                            color: white;
                        }
                            @media screen and (min-width: 480px) {
.contact{margin-top: 0px;}.category{margin-top: 0px;}
}
.myform{
    position: relative;
    background-color: white;
    width: 100%;
    padding: 30px;
    border-radius: 12px;
}
input[name]{border-radius: 7px;}
                    </style>
    <section class="pt100 pb100 ambassador" >

        <div class="container text-center">
                <h3 class="title" style="color: #fff">

                    Login

                </h3>
            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6">
                    <form class="myform form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

												<?php
                        if($i==1){ echo'
                        <div class="form-group">
                            <div class="alert alert-success">Logged in Successfully...</div>
                        </div>';

											}
                        if($i==2){ echo'
                        <div class="form-group">
                            <div class="alert alert-danger">Invalid Credentials</div>
                        </div>';
												echo "<script> alert($result); </script>";

											} ?>


												<div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="username" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
                        </div>

                        <div class="form-group">
                            <input class="form-control btn btn-primary btn-rounded mt30" name="submit" type="submit" value="Login" style="background-color:#f50136">
                        </div>
                    </form>
                </div>

                <div class="col-md-3"></div>
            </div>
        </div>

    </section>






    <script src="js/jquery.min.js"></script>



    <script src="js/popper.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/waypoints.min.js"></script>



    <script src="js/owl.carousel.min.js"></script>



    <script src="js/parallax.min.js"></script>



    <script src="js/jquery.counterup.min.js"></script>



    <script src="js/jquery.countdown.min.js"></script>



    <script src="js/wow.min.js"></script>



    <script src="js/main.js"></script>

</body>



</html>
