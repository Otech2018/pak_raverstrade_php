<!doctype html>
<html lang="en">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="assets/css/sweetalert2.min.css" rel="stylesheet">
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/ext-component-sweet-alerts.js"></script>
    <title>Raverstrade - Investment Project Login Form</title>
</head>



<body class="bg-login">

    <script language=javascript>
        function checkform() {
            if (document.mainform.username.value == '') {
                alert("Please type your username!");
                document.mainform.username.focus();
                return false;
            }
            if (document.mainform.password.value == '') {
                alert("Please type your password!");
                document.mainform.password.focus();
                return false;
            }
            return true;
        }
    </script>


    <br><br>

    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">

                        <div class="mb-4 text-center">
							<a href="index.php">
								<img src="cardstyles/images/logo/logo.png" width="180" alt="" />
							</a>
						</div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="text-white">Registration completed</h3>
                                        <p>Thank you for registering at Ravers Trade <a href="/login">Sign in here</a>
                                        </p>
                                    </div>

                                    <div class="login-separater text-center mb-4"> <span>We are Happy to Have you on Board</span>
                                        <hr>
                                    </div>
                                    <div class="form-body">

                                        <p>
                                            Now you can now log into your account.
                                            All account options are active and ready to use. Remember to protect access to your account
                                             in the best possible way. We suggest you do not share your login details with anyone 
                                              for the best account protection.
                                        </p>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <a href="login.php" class="btn btn-primary">
                                                    <i class="bx bx-user"></i>Sign in here</a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <!--app JS-->
    <script src="assets/js/app.js"></script>
    <!-- Code injected by live-server -->

</body>



</html>