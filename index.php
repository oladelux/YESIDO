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
    <link rel="stylesheet" type="text/css" href="css/flipclock.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                                            <div id="error_fp"></div>
                                            <form action="Signup.php" method="post" role="form">
                                                <input type="email" id="email_fp" name="email" placeholder="Enter your email" style="width: 50%;"><br>
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else, or send you spam.</small>
                                                <div style="margin-top: 2%;">
                                                    <input type="submit" name="" class="my_btn btn-primary" style="margin-top: 2%">
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
                        <li><a href="#our_f">FEATURED COUPLE</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                    </ul>
                </div>
            </nav>

            <!--Homepage Slides(carousel)-->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"> </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"> </li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"> </li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"> </li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/slide1.jpg" alt="First slide" class="carousel_img"/>
                    </div>
                    <div class="item">
                        <img src="images/slide2.jpg" alt="Second slide" class="carousel_img"/>
                    </div>
                    <div class="item">
                        <img src="images/slide3.jpg" alt="Third slide" class="carousel_img"/>
                    </div>
                    <div class="item">
                        <img src="images/slide4.jpg" alt="Third slide" class="carousel_img"/>
                    </div>
                    <div class="item">
                        <img src="images/slide5.jpg" alt="Third slide" class="carousel_img"/>
                    </div>
                    <div class="carousel-caption">
                        <div class="overlay">
                            <h1>ANNOUNCE YOUR WEDDING IN STYLE</h1>
                            <p>This platform<span class="rotate" style="color:#70F1FF"> plans that perfect wedding, provides an e-Invite platform, allows you create your wish-list, provides easy location navigator, provides access to wedding vendors, and lots more</span></p>
                            <div>
                                <button class="my_btn  btn-lg" href="#modal-id" data-toggle="modal">GET STARTED</button>
                                <br><a href="login.php"><p>Already a member? <span style="color: #70F1FF"><strong>LOG IN</strong></span></p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--featured couple alert-->
            <div class="couple-alert text-center">
                <h4 class="alert-text">Our Featured Couple <span><img class="bounce" src="images/down-arrow.png"> </span></h4>
            </div>
            <div class="notice">
                <p>Get a chance to be the next couple featured on the website and be rewarded with an amazing wedding gift inclusive &nbsp; <button type="button" href="" style="margin-top: 0.5%;" class="my_btn btn-default">GET STARTED</button></p>
            </div>
            <!--core values-->
            <div class="core-values">
                <h2 class="text-center">Sign Up And Plan Your Wedding</h2>
                <ul class="text-center list-inline">
                    <li>
                        <img src="images/wedding-planning.png">
                        <p>WEDDING PLANNER</p>
                        <div class="core_lines"></div>
                        <p>Keep up with<br>your checklist</p>
                    </li>
                    <li>
                        <img src="images/invite.png">
                        <p>E - WEDDING CARD</p>
                        <div class="core_lines"></div>
                        <p>Create your <br> digital IV and share</p>
                    </li>
                    <li>
                        <img src="images/map-location.png">
                        <p>LOCATION NAVIGATOR</p>
                        <div class="core_lines"></div>
                        <p>Easy navigation<br>to your locations</p>
                    </li>
                    <li>
                        <img src="images/gifts.png">
                        <p>WEDDING GIFT</p>
                        <div class="core_lines"></div>
                        <p>Get that dream<br>wedding gift</p>
                    </li>
                    <li>
                        <img src="images/wedding-planning.png">
                        <p>HONEYMOON GETAWAYS</p>
                        <div class="core_lines"></div>
                        <p>Get ready to<br>have in the best places</p>
                    </li>
                </ul>
            </div>


            <div class="search text-center">
                <h2>FIND A COUPLE'S IV</h2>
                <p>Fill the fields below with the bride's and groom's names to find their IV</p>
                <div class="form-group search-box">
                    <ul class="list-inline">
                        <li>
                            <input type="text" class="form-control" placeholder="Groom's FirstName">
                        </li>
                        <li>
                            <img src="images/search_wed.png">
                        </li>
                        <li>
                            <input type="text" class="form-control" placeholder="Bride's FirstName">
                        </li>
                    </ul>
                </div>
                <button type="button" class="my_btn btn-lg" style="margin-bottom: 2%;margin-left: 50px;">FIND NOW</button>
            </div>

            <div id="our_f" class="featured">
                <div class="featured-img">
                    <img src="images/Featured.jpeg">
                </div>
                <div class="featured-text">
                    <p>
                        We don't read and write poetry because it's cute. We read and write poetry because we are members of the human race. And the human race is filled with passion. And medicine, law, business, engineering, these are noble pursuits and necessary to sustain life. But poetry, beauty, romance, love, these are what we stay alive for
                    </p>
                    <h3>
                        GETTING MARRIED IN
                    </h3>
                    <div class="clock"></div>
                    <p>You're invited</p>
                    <button type="button" class="my_btn btn-default text-center" style="margin-bottom: 2%;">GET MORE</button>
                </div>
            </div>

            <div class="vendors">
                <div class="text-center">
                    <h3 style="font-weight: 600">ALL IN ONE PLACE</h3>
                    <p>
                        We will help you enjoy the best day of your life, providing all necessary help to make that special day of yours great
                    </p>
                </div>
                <div>
                    <ul class="list-inline">
                        <li class="thumbnail  col-lg-4">
                            <img src="images/wediing%20IV.jpg">
                            <div>
                                <p class="text-center">WEDDING IV</p>
                            </div>
                        </li>
                        <li class="thumbnail col-lg-4">
                            <img src="images/halls.jpg">
                            <div>
                                <p class="text-center">HALLS</p>
                            </div>
                        </li>
                        <li class="thumbnail col-lg-4">
                            <img src="images/gift.jpg">
                            <div>
                                <p class="text-center">GIFT COLLECTION</p>
                            </div>
                        </li>
                        <li class="thumbnail col-lg-4">
                            <img src="images/mc.jpg">
                            <div>
                                <p class="text-center">DJ'S & MC'S</p>
                            </div>
                        </li>
                        <li class="thumbnail col-lg-4">
                            <img src="images/honeymoon.jpg">
                            <div>
                                <p class="text-center">HONEYMOON GETAWAYS</p>
                            </div>
                        </li>
                        <li class="thumbnail col-lg-4">
                            <img src="images/location.jpg">
                            <div>
                                <p class="text-center">LOCATION NAVIGATION</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

                <!--footer-->
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
    <script type="text/javascript" src="js/jquery.simple-text-rotator.js"></script>
    <script type="text/javascript" src="js/flipclock.js"></script>
    <script>
        $(document).ready(function(){
            $(".rotate").textrotator({
                animation: "fade",
                speed: 2000
            });
        });

        var clock;

        $(document).ready(function() {

            // Grab the current date
            var currentDate = new Date();

            // Set some date in the future. In this case, it's always Jan 1
            var futureDate  = new Date(currentDate.getFullYear() + 1, 1, 1);
            // Calculate the difference in seconds between the future and current date
            var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

            // Instantiate a coutdown FlipClock
            clock = $('.clock').FlipClock(diff, {
                clockFace: 'DailyCounter',
                countdown: true
            });
        });


        //notice
        $(document).ready(function() {
            $(".notice").delay(1000).slideToggle(500);
        });




        //validating signup modal form
        $('form').submit(function(e) {
          e.preventDefault();

          var error = "";

          if ($('#email_fp').val() === "") {
            error += "Your email field is empty<br>";
          }
          if (error !== "") {
            $('#error_fp').html('<div class="alert alert-danger" role="alert"><p><strong>There were some errors in your form:</strong></p>' + error + '</div>');
          } else {
            $('form').unbind('submit').submit();
          }

        });
    </script>
</body>
</html>