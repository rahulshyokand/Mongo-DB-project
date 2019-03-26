<?php
require '../api/fetch_user.php' ;
require '../api/fetch_news.php'   ;
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>User Preference Console</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link href="../assets/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <?php include 'includes/preloader.html'; ?>
    <!--*******************
        Preloader end
    ********************-->

        <!--**********************************
            Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
<!--  Included with Header file-->
        <!--**********************************
            Header start
        ***********************************-->
<?php include 'includes/header.php'; ?>

<!--**********************************
    Header end
***********************************-->
        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include 'includes/sidebar.php'; ?>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

                  <!--**********************************
                      Content body start
                  ***********************************-->


                  <div class="content-body">
                      <div class="container-fluid">
                          <div class="row page-titles">
                              <div class="col p-md-0">
                                  <h4>Hello, <span>Welcome here</span></h4>
                              </div>
                              <div class="col p-md-0">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a>
                                      </li>
                                      <li class="breadcrumb-item active">News</li>
                                  </ol>
                              </div>
                          </div>
                          <!-- row -->
                          <div class="row">
                              <div class="col-12">
                                <!-- To be run in a loop for showing the news for the user -->


                              <?php
                               for($i = 0 ; $i < count($news); $i = $i + 1 ){
                                 $tag = $news[$i]['tag'] ;
                                 $tag_array = object_2_array($tag) ;
                                echo '  <div class="card">
                                      <div class="card-body">
                                          <h4 class="card-title">'. $news[$i]['news'].'</h4>
                                          <p>Posted On : '. $news[$i]['date'] . '</p>
                                            <p>Tags : '. join(', ',$tag_array). '</p>
                                          <div class="summernote"></div>
                                      </div>
                                  </div> '  ;
                                }
                                ?>
                                  <div class="card" style="display: none ;">
                                      <div class="card-body">
                                          <h4 class="card-title"><?php echo $news[0]['news'] ; ?></h4>
                                          <p>Posted On : <?php echo $news[0]['date'] ; ?> </p>
                                          <div class="summernote"></div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>





                      <!-- #/ container -->
                  </div>

        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
      <?php include 'includes/footer.php'; ?>
        <!--**********************************
            Footer end
        ***********************************-->


        <!--**********************************
            Right sidebar start
        ***********************************-->
    <?php include 'includes/right-sidebar.html'; ?>
        <!--**********************************
            Right sidebar end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../assets/plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="../assets/plugins/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/plugins-init/jquery-steps-init.js"></script>


</body>

</html>
