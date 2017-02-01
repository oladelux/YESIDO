<?php
    session_start();
    if (isset($_SESSION['user_session'])) {
        header('location:dashboard.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESIDO - Nigeria's First Wedding Planner</title>
    <meta name="description" content="We help organize and plan that special day of yours">
    <link rel="icon" type="image/png" href="images/FAVICON.png">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <script type="text/javascript" src="dist/sweetalert.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <!--Top header-->
    <div id="sticky_topbar"></div>
    <nav class="topbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="padding-top: 0;padding-bottom: 0;">
                <img alt="Brand" src="images/yesido_logo.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right sl">
                <li>
                    <button class="my_btn btn-sm" data-toggle="modal" href="#modal-id" style="margin-top: 10px;">SIGNUP</button>
                    <div class="modal fade" id="modal-id">
                        <div class="modal-dialog" style="width: 30%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <div class="modal-title text-center">
                                        <img src="images/yesido_logo.png">
                                    </div>
                                </div>
                                <div class="modal-body text-center">
                                    <h2>
                                        Create your Account
                                    </h2>
                                    <p>
                                        Sign up with your email
                                    </p>
                                    <form action="Signup.php" method="post" role="form">
                                        <input type="text" placeholder="Enter your email" style="width: 50%;">
                                        <div style="margin-top: 2%;">
                                            <button type="submit" class="btn btn-primary" style="margin-top: 2%">Register</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="text-center" style="margin-top: 5%">
                                    <p>
                                        Or via Social Media
                                    </p>
                                </div>
                                <div class="text-center">
                                    <img src="images/signup%20fb.png"> <img src="images/signup%20google-plus.png">
                                </div>
                                <div class="text-center">
                                    <p>Already a member? <span style="color: #70F1FF"><strong>LOG IN</strong></span></p>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right main-menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="vendor.php">VENDORS</a></li>
                <li><a href="index.php">FEATURED COUPLE</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
            </ul>
        </div>
    </nav>

    <div class="row" style="margin-top:100px; margin-bottom:100px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form action="assets/useraccount/userlog.php" role="" method="post">
                <fieldset>
                    <h2 class="text-center">Please Sign In</h2>
                    <hr class="colorgraph">
                    <div class="form-group">
                        <input type="text" name="username" id="" class="form-control input-lg" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="" class="form-control input-lg" placeholder="Password">
                    </div>
				<span class="button-checkbox">
					<button type="button" class="btn-sm" data-color="info">Remember Me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<a href="" class="btn btn-link pull-right">Forgot Password?</a>
				</span>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" name="loginSubmit" class=" my_btn btn-lg btn-success btn-block" value="Sign In">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div id="vendors">
                <p class="heading7">VENDORS</p>
                <ul class="list-inline">
                    <li>DJ's</li>
                    <li>MC's</li>
                    <li>Wedding Cakes</li>
                    <li>Wedding Gifts</li>
                    <li>Wedding Planners</li>
                    <li>Wedding Jewelries</li>
                    <li>Wedding Dresses</li>
                    <li>Hairstylist</li>
                    <li>Videographers</li>
                    <li>Caterers</li>
                    <li>Photographers</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft ">
                    <div class="logofooter"> <img src="images/yesido_logo.png"> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    <p><i class="fa fa-map-pin"></i> 10 Alara Street, Yaba. Lagos State. Nigeria</p>
                    <p><i class="fa fa-phone"></i> Phone (Nigeria) : +2348109948198</p>
                    <p><i class="fa fa-envelope"></i> E-mail : oladele@switch.ng</p>
                </div>
                <div class="col-md-2 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">GENERAL LINKS</h6>
                    <ul class="footer-ul">
                        <li><a href="#"> Vendors</a></li>
                        <li><a href="#"> Privacy Policy</a></li>
                        <li><a href="#"> Terms & Conditions</a></li>
                        <li><a href="#"> Featured Couple</a></li>
                        <li><a href="#"> Frequently Ask Questions</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">CONNECT WITH US</h6>
                    <ul class="list-inline footer-ul">
                        <li><a href="#"> <img src="images/facebook.png"> </a></li>
                        <li><a href="#"> <img src="images/twitter.png"> </a></li>
                        <li><a href="#"> <img src="images/google-plus.png"> </a></li>
                        <li><a href="#"> <img src="images/instagram.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer start from here-->

    <div class="copyright">
        <div class="container">
            <div class="col-md-6">
                <p>© 2017 - All Rights with YESIDO</p>
            </div>
            <div class="col-md-6">
                <ul class="bottom_ul">
                    <li><a href="#">YesIdo.ng</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Faq's</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Site Map</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/stickybar.js"></script>
<script>
    $(function(){
        $('.button-checkbox').each(function(){
            var $widget = $(this),
                    $button = $widget.find('button'),
                    $checkbox = $widget.find('input:checkbox'),
                    color = $button.data('color'),
                    settings = {
                        on: {
                            icon: 'glyphicon glyphicon-check'
                        },
                        off: {
                            icon: 'glyphicon glyphicon-unchecked'
                        }
                    };

            $button.on('click', function () {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
                $checkbox.triggerHandler('change');
                updateDisplay();
            });

            $checkbox.on('change', function () {
                updateDisplay();
            });

            function updateDisplay() {
                var isChecked = $checkbox.is(':checked');
                // Set the button's state
                $button.data('state', (isChecked) ? "on" : "off");

                // Set the button's icon
                $button.find('.state-icon')
                        .removeClass()
                        .addClass('state-icon ' + settings[$button.data('state')].icon);

                // Update the button's color
                if (isChecked) {
                    $button
                            .removeClass('btn-default')
                            .addClass('btn-' + color + ' active');
                }
                else
                {
                    $button
                            .removeClass('btn-' + color + ' active')
                            .addClass('btn-default');
                }
            }
            function init() {
                updateDisplay();
                // Inject the icon if applicable
                if ($button.find('.state-icon').length == 0) {
                    $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
                }
            }
            init();
        });
    });
</script>
</body>
</html>