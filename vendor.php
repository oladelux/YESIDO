<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESIDO - Vendors</title>
    <meta name="description" content="We help organize and plan that special day of yours">
    <link rel="icon" type="image/png" href="images/FAVICON.png">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
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
            <a class="navbar-brand" href="#" style="padding-top: 0;padding-bottom: 0;">
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
                                        <img src="images/logo.png">
                                    </div>
                                </div>
                                <div class="modal-body text-center">
                                    <h2>
                                        Create your Account
                                    </h2>
                                    <p>
                                        Sign up with your email
                                    </p>
                                    <input type="text" placeholder="Enter your email" style="width: 50%;">
                                    <div style="margin-top: 2%;">
                                        <a href="Signup.php" > <button type="button" class="btn-primary" style="margin-top: 2%">Register</button></a>
                                    </div>
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
                <li><a href="login.html">LOGIN</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right main-menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">VENDORS</a></li>
                <li><a href="#">FEATURED COUPLE</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
            </ul>
        </div>
    </nav>

    <div class="vendor_header">
        <div id="vendor_overlay">
            <div class="vendor_content text-center">
                <h3>THE PROFESSIONAL'S HUB</h3>
                <p class="vendor_subtext">Search for Vendors</p>
                <ul class="list-inline">
                    <li>
                        <input type="search" name="vendor_search" class="vendor_form" placeholder="Enter Some Keywords">
                    </li>
                    <li>
                        <select name="vendor_state" class="vendor_form">
                            <option selected value="State">Select Vendor State</option>
                            <option value="Abia">Abia</option>
                            <option value="Adamawa">Adamawa</option>
                            <option value="Anambra">Anambra</option>
                            <option value="Akwa Ibom">Akwa Ibom</option>
                            <option value="Bauchi">Bauchi</option>
                            <option value="Bayelsa">Bayelsa</option>
                            <option value="Benue">Benue</option>
                            <option value="Borno">Borno</option>
                            <option value="Cross River">Cross River</option>
                            <option value="Delta">Delta</option>
                            <option value="Ebonyi">Ebonyi</option>
                            <option value="Enugu">Enugu</option>
                            <option value="Edo">Edo</option>
                            <option value="Ekiti">Ekiti</option>
                            <option value="Gombe">Gombe</option>
                            <option value="Imo">Imo</option>
                            <option value="Jigawa">Jigawa</option>
                            <option value="Kaduna">Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Katsina">Katsina</option>
                            <option value="Kebbi">Kebbi</option>
                            <option value="Kogi">Kogi</option>
                            <option value="Kwara">Kwara</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Nasarawa">Nasarawa</option>
                            <option value="Niger">Niger</option>
                            <option value="Ogun">Ogun</option>
                            <option value="Ondo">Ondo</option>
                            <option value="Osun">Osun</option>
                            <option value="Oyo">Oyo</option>
                            <option value="Plateau">Plateau</option>
                            <option value="Rivers">Rivers</option>
                            <option value="Sokoto">Sokoto</option>
                            <option value="Taraba">Taraba</option>
                            <option value="Yobe">Yobe</option>
                            <option value="Zamfara">Zamfara</option>
                        </select>
                    </li>
                    <li>
                        <input type="submit" class="my_btn vendor_btn" name="vendor_submit">
                    </li>
                </ul>

            </div>
        </div>
    </div>
    
    <div class="vender_search_options">
        <ul class="list-inline text-center vendor_sort">
            <li>
                Sort by: <select class="sort">
                            <option>Relevance</option>
                            <option>Popularity</option>
                        </select>
            </li>
            <li>
                Sort by Price: <select class="sort">
                                <option>&#8358;10,000 and below</option>
                                <option>&#8358;10,000 - &#8358;30,000</option>
                                <option>&#8358;30,000 - &#8358;60,000</option>
                                <option>&#8358;60,000 - &#8358;100,000</option>
                                <option>&#8358;100,000 and below</option>
                        </select>
            </li>
            <li>
                Sort by Rating: <select class="sort" style="color: #fc8e1e;">
                            <option>&#10025;&#10025;&#10025;&#10025;&#10025;</option>
                            <option>&#10025;&#10025;&#10025;&#10025;</option>
                            <option>&#10025;&#10025;&#10025;</option>
                            <option>&#10025;&#10025;</option>
                            <option>&#10025;</option>
                        </select>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 1</p>
                <p class="text-center"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;&#10025;&#10025;&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 2</p>
                <p class="text-center vendor_sub"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;&#10025;</span><span>&#10025;&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 3</p>
                <p class="text-center vendor_sub"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;&#10025;&#10025;</span><span>&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 4</p>
                <p class="text-center vendor_sub"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;&#10025;&#10025;&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 5</p>
                <p class="text-center vendor_sub"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;</span><span>&#10025;&#10025;&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 6</p>
                <p class="text-center vendor_sub"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;&#10025;</span><span>&#10025;&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 7</p>
                <p class="text-center vendor_sub"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;&#10025;&#10025;&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 8</p>
                <p class="text-center vendor_sub"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;&#10025;&#10025;&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 9</p>
                <p class="text-center vendor_sub"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;&#10025;&#10025;</span><span>&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 10</p>
                <p class="text-center vendor_sub"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;&#10025;&#10025;&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 11</p>
                <p class="text-center vendor_sub"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;&#10025;&#10025;&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            <div class="thumbnail col-lg-3">
                <img src="images/vendor_img.png">
                <p class="text-center vendor_name">Super Vendor 12</p>
                <p class="text-center vendor_sub"><span class="img-rounded"><img src="images/client_logo.png"></span>&nbsp; Ratings - <span style="color: #fc8e1e;">&#10025;&#10025;&#10025;&#10025;&#10025;</span></p>
                <p class="text-center">Ikeja, Lagos</p>
                
            </div>
            
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
    <script type="text/javascript" src="js/jquery easing.js"></script>
</body>
</html>