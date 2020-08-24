<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/ui/assets/images/favicon.png') ?>">
    <title>RayyanTech - Student Report Sheet Generator</title>
    <link href="<?= base_url('assets/ui/dist/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/ui/dist/css/pages/authentication.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/ui/assets/libs/toastr/build/toastr.min.css') ?>" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Rayyan Tech</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->       
            

            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?= base_url('assets/ui/assets/images/big/auth-bg2.jpg')?>) no-repeat left center;">
                <div class="container">
                    <div class="row">
                        <div class="col s12 l8 m6 demo-text">
                            <span class="db"><img src="<?= base_url('assets/ui/assets/images/logo-icon.png')?>" alt="logo" /></span>
                            <span class="db"><img src="<?= base_url('assets/ui/assets/images/logo-text.png')?>" alt="logo" /></span>
                            <h1 class="font-light m-t-40">Welcome to the <span class="font-medium black-text">RayyanTech Result Sheet Processor</span></h1>
                            <p>The system is designed to meet your need immediately it comes up on your mind. "How do I get this?" and it's there next to the previous action</p>
                            <!-- <a class="btn btn-round red m-t-5">Know more</a> -->
                        </div>
                    </div>
                    <div class="auth-box auth-sidebar">
                        <div id="loginform">
                            <div class="p-l-10">
                                <h5 class="font-medium m-b-0 m-t-40">Sign In to Admin</h5>
                                <small>Just login to your account</small>
                            </div>
                            <!-- Form -->
                            <div class="row">
                                <form class="col s12" method="POST" action="<?= base_url('admin/login') ?>">
                                    <!-- email -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="uname" type="text" name="uname" class="validate" required>
                                            <label for="uname">Username</label>
                                        </div>
                                    </div>
                                    <!-- pwd -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password" type="password" name="pword" class="validate" required>
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <!-- pwd -->
                                    <div class="row m-t-5">
                                        <div class="col s7">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Remember Me?</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- pwd -->
                                    <div class="row m-t-40">
                                        <div class="col s12">
                                            <button class="btn-large w100 blue accent-4" type="submit">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="<?= base_url('assets/ui/assets/libs/jquery/dist/jquery.min.js')?>"></script>
        <script src="<?= base_url('assets/ui/dist/js/materialize.min.js')?>"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script>
        $('.tooltipped').tooltip();
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
        });
        $(function() {
        $(".preloader").fadeOut();
        });
        </script>
    </body>
</html>