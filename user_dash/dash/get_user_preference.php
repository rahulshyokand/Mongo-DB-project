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
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>Hello, <span>Welcome here</span></h4>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Send Image for Ads</h4>
                                <form action="#" id="step-form-vertical" class="step-form-vertical">
                                    <div>
                                        <h4>Personal Information</h4>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">First Name*</label>
                                                        <input type="text" name="firstName" class="form-control" placeholder="Parsley" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Last Name*</label>
                                                        <input type="text" name="lastName" class="form-control" placeholder="Montana" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Email Address*</label>
                                                        <div class="input-group">
                                                            <input type="email" class="form-control border-right-0" id="inputGroupPrepend01" aria-describedby="inputGroupPrepend10" placeholder="cellophane@gmail.com" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text bg-transparent" id="inputGroupPrepend10"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Phone Number*</label>
                                                        <div class="input-group">
                                                            <input type="text" name="phoneNumber" class="form-control border-right-0" placeholder="(+1)408-657-9007" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text bg-transparent" id="inputGroupPrepend11"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Where are you from*</label>
                                                        <input type="text" name="place" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <h4>Company Info</h4>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Company Name*</label>
                                                        <input type="text" name="firstName" class="form-control" placeholder="Cellophane Square" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Company Email Address*</label>
                                                        <div class="input-group">
                                                            <input type="email" class="form-control border-right-0" id="inputGroupPrepend21" aria-describedby="inputGroupPrepend12" placeholder="cellophane@gmail.com" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text bg-transparent" id="inputGroupPrepend12"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Company Phone Number*</label>
                                                        <div class="input-group">
                                                            <input type="text" name="phoneNumber" class="form-control border-right-0" placeholder="(+1)408-657-9007" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text bg-transparent" id="inputGroupPrepend13"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Your position in Company*</label>
                                                        <input type="text" name="place" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <h4>Business Hours</h4>
                                        <section>
                                            <div class="row">
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <h4>Monday *</h4>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="9.00" type="number" name="input191" id="input191">
                                                    </div>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="6.00" type="number" name="input20" id="input20">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 mb-4">
                                                <h4>Tuesday *</h4>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="input21" id="input21">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="input22" id="input22">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 mb-4">
                                                <h4>Wednesday *</h4>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="iniput23" id="iniput23">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="input24" id="input24">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 mb-4">
                                                <h4>Thrusday *</h4>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="input25" id="input25">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="input26" id="input26">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 mb-4">
                                                <h4>Friday *</h4>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="input27" id="input27">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="input28" id="input28">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 mb-4">
                                                <h4>Saturday *</h4>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number" name="input29" id="input29">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number" name="input30" id="input30">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 mb-4">
                                                <h4>Launch *</h4>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="11.00" type="number" name="input31" id="input31">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="12.00" type="number" name="input32" id="input32">
                                                </div>
                                            </div>
                                        </div>
                                        </section>
                                        <h4>Email Setup</h4>
                                        <section>
                                            <div class="row emial-setup">
                                                <div class="col-sm-3 col-6">
                                                    <div class="form-group">
                                                        <label for="mailclient1" class="mailclinet mailclinet-gmail">
                                                            <input type="radio" name="emailclient" id="mailclient1">
                                                            <span class="mail-icon">
                                                                <i class="mdi mdi-google-plus" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="mail-text">I'm using Gmail</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="form-group">
                                                        <label for="mailclient2" class="mailclinet mailclinet-office">
                                                            <input type="radio" name="emailclient" id="mailclient2">
                                                            <span class="mail-icon">
                                                                <i class="mdi mdi-office" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="mail-text">I'm using Office</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="form-group">
                                                        <label for="mailclient3" class="mailclinet mailclinet-drive">
                                                            <input type="radio" name="emailclient" id="mailclient3">
                                                            <span class="mail-icon">
                                                                <i class="mdi mdi-google-drive" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="mail-text">I'm using Drive</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="form-group">
                                                        <label for="mailclient4" class="mailclinet mailclinet-another">
                                                            <input type="radio" name="emailclient" id="mailclient4">
                                                            <span class="mail-icon">
                                                                <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="mail-text">I'm using Another Service</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="skip-email text-center">
                                                        <p>Or if want skip this step entirely and setup it later</p>
                                                        <a href="javascript:void()">Skip step</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
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
