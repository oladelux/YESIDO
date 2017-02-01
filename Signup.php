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
    <link rel="stylesheet" type="text/css" href="css/signup.css">
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
                                    <input type="text" placeholder="Enter your email" style="width: 50%;">
                                    <div style="margin-top: 2%;">
                                        <a href="Signup.php" > <button type="button" class="my_btn btn-primary" style="margin-top: 2%">Register</button></a>
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

    <div>
        <div class="main_page">
            <div id="overlay">
                <div class="content">
                    <h3 class="text-center">LET'S TURN YOUR WEDDING VISION INTO A REALITY</h3>

                </div>
            </div>
        </div>

        <form action="" method="post" role="form" data-toggle="validator">
            <div class="heading">
                <div class="sub-head">
                    Fill the form below
                </div>
            </div>
            <div class="form-group">

                <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
                <label for="groom-firstname">Groom's Firstname</label>
                <div class="input-group">
                    <span class="input-group-addon" id="addon1"><i class="fa fa-male" aria-hidden="true"></i> </span>
                    <input type="text" class="form-control floatLabel has-feedback" name="groom_fname" id="" placeholder="" aria-describedby="addon1" data-error="Bruh, that email address is invalid" required>
                    <div class="help-block with-errors"></div>

                </div>

                <label for="groom-lastname">Groom's Lastname</label>
                <div class="input-group">
                    <span class="input-group-addon" id="addon1"><i class="fa fa-male" aria-hidden="true"></i></span>
                    <input type="text" class="form-control floatLabel" name="groom_lname" id="" placeholder="" aria-describedby="addon1">
                </div>

                <label for="bride-firstname">Bride's Firstname</label>
                <div class="input-group">
                    <span class="input-group-addon" id="addon1"><i class="fa fa-female" aria-hidden="true"></i></span>
                    <input type="text" class="form-control floatLabel" name="bride_fname" id="" placeholder="" aria-describedby="addon1">
                </div>

                <label for="bride-lastname">Bride's Lastname</label>
                <div class="input-group">
                    <span class="input-group-addon" id="addon1"><i class="fa fa-female" aria-hidden="true"></i></span>
                    <input type="text" class="form-control floatLabel" name="bride_lname" id="" placeholder="" aria-describedby="addon1">
                </div>

                <label for="Username">Username</label>
                <div class="input-group">
                    <span class="input-group-addon" id="addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control floatLabel" name="username" id="" placeholder="" aria-describedby="addon1">
                </div>

                <label for="Password">Password</label>
                <div class="input-group">
                    <span class="input-group-addon" id="addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                    <input type="password" class="form-control floatLabel" name="password" id="" placeholder="" aria-describedby="addon1">
                </div>

                <label for="confirm Password">confirm Password</label>
                <div class="input-group">
                    <span class="input-group-addon" id="addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                    <input type="password" class="form-control floatLabel" name="confirm_pass" id="" placeholder="" aria-describedby="addon1">
                </div>

                <label for="Wedding Date">Wedding Date</label>
                <div class="input-group">
                    <span class="input-group-addon" id="addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    <input type="date" class="form-control floatLabel" name="date" id="" placeholder="" aria-describedby="addon1">
                </div>


                <label for="">Do you have a location for your wedding yet?</label><br>
                <input id="no" type="checkbox" name="location_nil" class="mycheckbox" value="no" /> No
                <input id="yes" type="checkbox" name="location_nay" class="mycheckbox" value="yes" /> Yes
                <div class="yes">
                    <label for="address">Hall/Event Address</label>
                    <input type="text" class="form-control" name="address" id="" placeholder="e.g 10 Alara Street, sabo">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" id="" placeholder="e.g Yaba">
                    <label style="margin-top: 10px;">State:</label>
                    <select name="state" style="color: #080808;">
                        <option selected value="State">State</option>
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
                        <option value="Lagos">LAGOS</option>
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
                </div>
            </div>
            <input type="submit" name="reg" type="submit" class="my_btn btn-primary btn-lg">
        </form>



    <?php
        require 'vendor/autoload.php';

        $gump = new GUMP();

        $_POST = $gump->sanitize($_POST);

        if(isset($_POST['reg'])){
            $is_valid = GUMP::is_valid($_POST, array(
                'groom_fname' => 'required|alpha',
                'groom_lname' => 'required|alpha',
                'bride_fname' => 'required|alpha',
                'bride_lname' => 'required|alpha',
                'username' => 'required|alpha_numeric',
                'password' => 'required|max_len,100|min_len,3',
                'confirm_pass' => 'required|max_len,100|min_len,3',
                // 'address' => ' street_address'
            ));

            $pdo = new PDO('mysql:host=localhost;dbname=yesido;charset=UTF8', 'root', '' );
            
            $query_string = "INSERT INTO users (`email`, `groom_fname`, `groom_lname`, `bride_fname`, `bride_lname`, `username`, `password`, `confirm_pass`,`date`, `address`, `city`, `state`)VALUES('$_POST[email]','$_POST[groom_fname]', '$_POST[groom_lname]', '$_POST[bride_fname]', '$_POST[bride_lname]', '$_POST[username]', '$_POST[password]', '$_POST[confirm_pass]', '$_POST[date]', '$_POST[address]', '$_POST[city]', '$_POST[state]')";
            
            $run = $pdo->query($query_string);

            

            if($is_valid === true) {

                echo "<script type='text/javascript'>

                 sweetAlert (\"You've successfully registered!\", \"Wishing you a happy married life in advance!!!\", \"success\");
                        function Redirect() {
               window.location=\"http://localhost/UndI/dashboard.php\";
            }
            setTimeout('Redirect()', 3000);
                      </script>";

            }
            else {
                
                print_r($is_valid);
            }

            $gump->filter_rules(array(
                'username' => 'trim|sanitize_string',
                'password' => 'trim',
                'groom_fname' => 'trim',
                'groom_lname' => 'trim',
                'bride_fname' => 'trim',
                'bride_lname' => 'trim'
            ));

            $validated_data = $gump->run($_POST);


    //    if($validated_data === false) {
    //        echo $gump->get_readable_errors(true);
    //    } else {
    //        // validation successful
    //    }
        }
    ?>

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

<script>
    $('.mycheckbox').click(function() {
        $(this).siblings('input:checkbox').prop('checked', false);
    });

    $('#yes').on('click', function(){
        $('.yes').toggle();
    });
    $('#no').click(function() {
        $('.yes').hide();
    });



</script>
</body>
</html>