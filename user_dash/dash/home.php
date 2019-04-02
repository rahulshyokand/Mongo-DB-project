<?php
require '../api/fetch_user.php';
require '../api/fetch_article.php';
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
      <link rel="stylesheet" href="../assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <link href="../assets/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">



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
                                      <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a>
                                      </li>
                                      <li class="breadcrumb-item active">Interests</li>
                                  </ol>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-12">
                                  <div class="card">
                                      <div class="card-body card-body-scroll">
                                      <?php
                                        $tag = $arr[0]['tags'] ;
                                        $tag_array = object_2_array($tag) ;
                                        ?>
                                          <h4 class="card-title mb-4">Add Your Interests</h4>
                                          <div class="input-group mb-4">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroupPrepend2">Topics</span>
                                              </div>
                                                <form id="data" class="mt-5 mb-5" enctype="multipart/form-data" method="post">
                                              <input type="text" value="<?php   echo join(', ',$tag_array) ; ?>" name="topics" class="form-control" id="tags_2" placeholder="Add tags" aria-describedby="inputGroupPrepend2" required="">
                                          </div>
                                          <div class="text-center mb-4 mt-4">
                                              <button type="submit" id="register" class="btn btn-primary">Update Interests</button>
                                          </div>
                                            </form>

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

        <script src="../assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="js/plugins-init/bootstrap-tagsinput-init.js"></script>


</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

    $(function() {
        $('form').submit(function(e) {
            $('#register').text('Syncing...');
            e.preventDefault();
            jQuery.ajax({
                type: 'POST',
                url: "../api/add_tags.php",
                data: new FormData($("#data")[0]),
                processData: false,
                contentType: false,
                success: function(data)
                {
                         //test status or error with alert
                     alert(data);
                     if(data == 1)
                    {
                        block('#failed','#error');
                        $('#success').css('display','block');
                        $('#register').text('Preferences Synced');
                        // setTimeout(
                        //   function()
                        //   {
                        //     //do something special
                        //     // redirecting to next page
                        //     window.location.href='page-login.html';
                        //   }, 500);

                    }
                    //user exists
                    else if(data == 2)
                    {
                        block('#error','#success');
                        $('#register').text("Register");
                        $('#failed').css('display','block');
                        //window.location.href='login.php';
                    }
                    else
                    {
                        block('#failed','#success');
                        $('#error').css('display','block');
                        $('#register').text('Register');
                    }
                }
            });
        });
    });
    function block(a,b)
    {
        $(a).css('display', 'none');
        $(b).css('display', 'none');
    }

</script>
