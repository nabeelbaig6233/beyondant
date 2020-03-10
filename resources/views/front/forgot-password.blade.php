
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beyondant Login</title>
    <!--bootstrap css-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Globally css -->
    <link href="css/globally.css" rel="stylesheet" type="text/css">

    <!-- Fav icon -->
    <link href="images/favicon.png" rel="shortcut icon">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="css/login.css">

</head>
<body>

<!-- Loader -->
<div class="loader"><div class="loader_div"></div></div>

<!-- Login page -->
<div class="login_wrapper">
    <div class="container">
        <div class="col-md-12 pad-0">
            <div class="row login-box-12">
                <div class="col-lg-6 col-md-12 col-sm-12 px-0">
                    <div class="login_right">
                        <a href="index.html" class="logo_text">
                            <img alt="" class="img-fluid" src="images/logo2.png">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem Ipsum</p>
                        <a href="#" class="btn-outline">Read More</a>
                        <ul class="social-list clearfix">
                            <li><a href="javascript:void(0);" title="Instagram" class="link"> <img src="images/instagram-icon-3d.png"></a></li>
                            <li><a href="javascript:void(0);" title="Facebook" class="link"> <img src="images/facebook-icon-3d.png"></a></li>
                            <li><a href="javascript:void(0);" title="Twitter" class="link"> <img src="images/twitter-icon-3d.png"></a></li>
                            <li><a href="javascript:void(0);" title="Linkedin" class="link"> <img src="images/linkedin-icon-3d.png"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="login-inner-form">
                        <div class="details">
                            <h3>Recover <span>Your Password</span></h3>
                            <form action="" method="GET">
                                <div class="form-group">
                                    <input type="email" name="email" class="input-text" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-md btn-theme btn-block">Send Me Email</button>
                                </div>
                            </form>
                            <p class="m-t-20">Already a member?<a href="login.blade.php"> Login here</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /. Login page -->


<!-- latest jquery-->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>

<!-- Bootstrap js-->
<script src="js/bootstrap.js"></script>

<!-- Custom JS Script -->
<script type="text/javascript">
    $(window).load(function() {
        // Animate loader off screen
        $(".loader").fadeOut("slow");;
    });
</script>

</body>
</html>
