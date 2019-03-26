<?php
require '../api/fetch_user.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Wilyer Console</title>
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
                                      <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a>
                                      </li>
                                      <li class="breadcrumb-item active">Blank</li>
                                  </ol>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-12">
                                  <div class="card">
                                      <div class="card-body card-body-scroll">
                                          <h4 class="card-title mb-4">Input Tags</h4>
                                          <div class="form-group mb-5">
                                              <input class="form-control tags" id="tags_1" placeholder="Add tags" type="text" value="Oregon,roffle">
                                          </div>
                                          <h4 class="card-title mb-4">Input Group Tags</h4>
                                          <div class="input-group mb-4">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroupPrepend2">Tags</span>
                                              </div>
                                              <input type="text" value="Montana,Colorado,Oregon,roffle" class="form-control" id="tags_2" placeholder="Add tags" aria-describedby="inputGroupPrepend2" required="">
                                          </div>
                                          <div class="input-group">
                                              <input type="text" value="Montana,Colorado,Oregon,roffle"  class="form-control" id="tags_3" placeholder="Add tags" aria-describedby="inputGroupPrepend2" required="">
                                              <div class="input-group-append c-pointer">
                                                  <span class="input-group-text" id="inputGroupPrepend3">Tags</span>
                                              </div>
                                          </div>
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
