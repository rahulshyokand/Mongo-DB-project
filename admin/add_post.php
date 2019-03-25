<?php
session_start();
if(isset($_SESSION['username'])){
echo "Account : ".$_SESSION['username'];
echo '<h3> <a href="logout.php"> Logout </a> </h3>';
$username = $_SESSION['username'];
}
else {
  	echo'<script> window.location.replace("index.php");</script>';
}
 ?>

  <?php
  require '../config.php' ;

 if(isset($_POST['type']) && isset($_POST['tags']) )
 {

   $type=$_POST['type'];
   $tag = $_POST['tags'];

   $tags_array = explode(",",$tag);
   $content = $_POST['content'];

   if($client){

       // Select Collection
       $collection = $db->$type;
       $result = $collection->insertOne( [  'tag' => $tags_array , 'date' => date("Y-m-d")  , $type => $content ] );
   echo '<br>';
       echo $type . " inserted in collection with object id '{$result->getInsertedId()}'";

     }

 }

   ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Add Article or News</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Add Article or News</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                      <div class="form-row p-t-20">
                          <label class="label label--block">Choose Type of Post</label>
                          <div class="p-t-15">
                              <label class="radio-container m-r-55">Article
                                  <input type="radio" checked="checked" name="type" value="article">
                                  <span class="checkmark"></span>
                              </label>
                              <label class="radio-container">News
                                  <input type="radio" name="type" value="news">
                                  <span class="checkmark"></span>
                              </label>
                          </div>
                      </div>
                        <div class="form-row m-b-55">


                            <div class="name">Tags </div>
                            <div class="value">
                                <div class="row row-refine">

                                    <div class="col-1">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="tags"> </textarea>
                                            <label class="label--desc">Comma Seperate Tags</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="form-row m-b-55">
                            <div class="name">Content</div>
                            <div class="value">
                                <div class="row row-refine">

                                    <div class="col-12">
                                        <div class="input-group-desc">
                                            <textarea class="input--style-5" type="text" name="content"> </textarea>
                                            <label class="label--desc">Post Content</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
