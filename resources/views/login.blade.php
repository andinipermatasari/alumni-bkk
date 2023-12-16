<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body class="h-100"> 
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form method="post" action="{{ route('postlogin') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Nisn</strong></label>
                                            <input type="text" class="form-control" name="nisn" id="nisn">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" id="password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign up</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
                <!-- <div class="login_form_container">
                    <div class="login_form">
                        <h2>Login</h2>
                        <div class="input_group">
                            <i class="fa fa-user"></i>
                            <input type="text" placeholder="Nisn" class="input_text" autocomplete="off">
                        </div>
                        <div class="input_group">
                            <i class="fa fa-ublock-alt"></i>
                            <input type="password" placeholder="Password" class="input_text" autocomplete="off">
                        </div>
                        <div class="button_group" id="login_button">
                            <a>Submit</a>
                        </div>
                    </div>
                </div>
                
                <script src="./vendor/global/global.min.js"></script>
                <script src="./js/quixnav-init.js"></script>
                <script src="./js/custom.min.js"></script> -->