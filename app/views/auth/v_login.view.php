<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fortuna - POS Application</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= BASE_PATH ?>/public/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/sweetalert/dist/sweetalert2.min.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" id="frm_login">
                    <span class="login100-form-title p-b-43">
                        <div class="img-thumbnail mx-auto w-25" style="border-radius: 100%; background-color: #6675df">
                          <img class="img-fluid" src="<?= BASE_PATH ?>/public/images/fortuna_logo.png" alt="">
                        </div>
                    </span>

                    <div class="row alert-section" style="display: none;">
                        <div class="col-lg-12">
                            <div class="alert alert-warning alert-dismissible" id="alert_error"><button type="button" class="close" aria-label="Close" id="close_alert"><span aria-hidden="true">&times;</span></button></div>
                        </div>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" id="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass" id="pass">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" id="btn_save">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            or sign up now
                        </span>
                    </div>

                    <div class="login100-form-social flex-c-m">
                        <a href="<?= BASE_PATH ?>/login/register" class="login100-form-social-item flex-c-m bg1 m-r-5" id="register">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <!-- <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>

                        <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a> -->
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>


<!--===============================================================================================-->
    <script src="<?= BASE_PATH ?>/public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= BASE_PATH ?>/public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= BASE_PATH ?>/public/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= BASE_PATH ?>/public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= BASE_PATH ?>/public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= BASE_PATH ?>/public/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= BASE_PATH ?>/public/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="<?= BASE_PATH ?>/public/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="<?= BASE_PATH ?>/public/js/main.js"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="<?= BASE_PATH ?>/public/jquery-validation/jquery.validate.min.js"></script>

    <script type="text/javascript" src="<?= BASE_PATH ?>/public/sweetalert/dist/sweetalert2.min.js"></script>


    <script>
        $(document).ready(function(){
            $('#btn_save').on('click', function(e){
                $('#frm_login').validate({
                    submitHandler: function(){
                        e.preventDefault();
                        $.ajax({
                            url: "<?= BASE_PATH ?>" + "/login/ajx_login",
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                username: $('#email').val(),
                                password: $('#pass').val()
                            },
                            success: function(data){
                                if(data[1][1] == 'ok'){
                                    Swal.fire({
                                        icon: 'success',
                                        title: data[1][0]
                                    }).then(() => {
                                        window.location.replace("<?= BASE_PATH ?>/home");
                                    });
                                }else{
                                    $('.alert-text').remove();
                                    $('#alert_error').append('<span class="alert-text">'+data[1][0]+'</span>');
                                    $('.alert-section').fadeIn('slow');
                                }
                            }
                        });
                    }
                });
            });

            $('#close_alert').on('click', function(){
                $('.alert-section').fadeOut('slow');
            });

            $('#register').tooltip({
                title: 'Register Now!'
            });
        });
    </script>

</body>
</html>
