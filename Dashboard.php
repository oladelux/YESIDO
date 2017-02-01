<?php 
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=yesido;charset=UTF8', 'root', '' );
    
    if (isset($_SESSION['user_session']) ) {
        $do = $pdo->prepare("SELECT * FROM users WHERE id=:id");
        $do->bindparam(':id',$_SESSION['user_session']);
        $do->execute();
        $row = $do->fetch(PDO::FETCH_ASSOC);

        $user = NULL;
        if (count($row) > 0) {
            $user = $row;
        }
    }
?>
<?php if (!empty($user) ): ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard - <?= $user['username']; ?></title>
        <meta name="description" content="We help organize and plan that special day of yours">
        <link rel="icon" type="image/png" href="images/FAVICON.png">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    </head>
    
    <body>
        <div class="container-fluid">
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
                    <ul class="nav navbar-nav navbar-right main-menu">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="">VENDORS</a></li>
                        <li><a href="#">FEATURED COUPLE</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                    </ul>
                </div>
            </nav>

            <section class="container-fluid" style="background:#efefe9;">

                <div class="container-fluid">
                    <div class="row">
                        <div class="main">
                            <div class="main-inner">
                                <ul class="nav nav-tabs" id="userboard">
                                    <div class="line"></div>
                                    <li class="active">
                                        <a href="#dashboard" data-toggle="tab" title="Dashboard">
                                          <span class="small_circle one">
                                              <i class="fa fa-home"></i>
                                          </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#iv" data-toggle="tab" title="Wedding Website">
                                            <span class="small_circle two">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#favourites" data-toggle="tab" title="Favourite Vendors">
                                             <span class="small_circle three">
                                                  <i class="fa fa-heart"></i>
                                             </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#activities" data-toggle="tab" title="Activities">
                                             <span class="small_circle four">
                                                  <i class="fa fa-signal"></i>
                                             </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#settings" data-toggle="tab" title="Account Settings">
                                            <span class="small_circle five">
                                              <i class="fa fa-user"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#help" data-toggle="tab" title="Help">
                                            <span class="small_circle six">
                                                <i class="fa fa-info"></i>
                                            </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="dashboard">
                                    <div class="container-fluid welcome">
                                    <div class="container">
                                        <ul class="list-inline">
                                            <li class="dash_header">
                                                <div class="str_circle">
                                                    <p class="initials"><span><?= substr($user['groom_fname'],0,1); ?><span><img src="images/rings.png"></span><?= substr($user['bride_fname'],0,1); ?></p>
                                                </div>
                                            </li>
                                            <li>
                                                <p class="welcome_msg">
                                                    Hi, <?= $user['username']; ?>!
                                                    
                                                </p>
                                                <p style="font-size: 15px"><?= date("jS F, Y", strtotime($user['date'])); ?> <span><img src="images/datecalendar.png"></span></p>
                                            </li>
                                            <li class="dropdown">
                                                <span class="caret dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></span>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#settings">Profile</a></li>
                                                    <li><a href="assets/useraccount/logout.php">Logout</a></li>
                                                  </ul>
                                            </li>
                                            <li style="float: right;margin-top: 15px;">
                                                <div id="wedding_countdown"></div>
                                                <p id="count_text">TO A BLISSFULL WEDDING</p>
                                            </li>
                                            <!-- <li>
                                                <a href="assets/useraccount/logout.php"><button type="button" class="btn btn-default pull-right">Logout</button></a>
                                            </li> -->
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="content container-fluid">
                                        <h3 class="text-center">WEATHER FORECAST FOR THE DAY</h3>
                                        <div class="container welcome2">
                                            <div id="weather"></div>
                                        </div>
                                    </div>
                                    <h3 class="text-center">FIND VENDORS</h3>
                                    <div class="container-fluid ">
                                        <div class="container welcome">
                                            <form action="" method="POST" role="form" class="vend_form">
                                                <div class="row">
                                                    <div class="form-group col-lg-10">
                                                        <ul class="list-inline">
                                                            <li>
                                                                <select class="vend">
                                                                    <option>Vendor Categories</option>
                                                                    <option>DJ's</option>
                                                                    <option>MC's</option>
                                                                    <option>Photographer's</option>
                                                                    <option>Wedding Halls</option>
                                                                    <option>Wedding Planners</option>
                                                                    <option>Cateerer's</option>
                                                                    <option>Hairstylist</option>
                                                                    <option>Videographers</option>
                                                                    <option>Gifts Shop</option>
                                                                    <option>Wedding Dresses</option>
                                                                    <option>Wedding Jewelries</option>
                                                                </select>
                                                            </li>
                                                            <li>
                                                                <input type="search" name="" id="input" class="form-control vend_search" value="" placeholder="Enter city name e.g Ikeja" required="required" title="">
                                                            </li>
                                                        </ul>
                                                    </div>
                                            
                                                
                                                    <div class="col-lg-1 vend_btn">
                                                        <button type="submit" class="my_btn b_tn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 wedding_notice welcome">
                                                    <p>No gift provided yet</p>
                                                </div>

                                                <div class="col-lg-6 iv_notice welcome" id="nt">
                                                    <p>Have you created your wedding IV yet?</p>
                                                        <p>
                                                            <button class="my_btn" id="iv_yes">YES</button>
                                                            <button class="my_btn" id="iv_no">NO</button>
                                                        </p>
                                                </div>
                                                <div class="col-lg-6 iv_notice welcome" id="share_it">
                                                    <p>Share your link</p>
                                                    <p>
                                                        <input type="text" name="link_share" />
                                                        <button class="my_btn btn-sm">Share</button>
                                                        <button class="my_btn btn-sm" id="back">Back</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="iv">
                                    <div class="text-center">
                                        <a href="getivdetails.php"><button class="my_btn btn-lg">CLICK HERE TO CREATE YOUR E-INVITE</button></a>
                                    </div>
                                    <div class="text-center" style="margin-top: 20px;">
                                        <a href="create_iv.php"><button class="my_btn btn-lg">VIEW YOUR E-INVITE PAGE</button></a>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="favourites">
                                    <div class="container text-center">
                                        <p class="dash_text">You have not favourited any venders, click the button below to checkout available vendors</p>
                                        <a href="vendor.php"><button class="my_btn btn-lg">GET STARTED</button>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="activities">
                                    <div class="container text-center">
                                        <p class="dash_text">Your activities will be shown here</p>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="settings">

                                    <div class="container">
                                        <form action="" method="post" role="form">
                                            <div class="">
                                                <div class="text-center">
                                                   <h3>UPDATE ACCOUNT</h3>
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="col-lg-6">

                                                    <label for="groom-firstname">Email</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                                         <input type="text" class="form-control floatLabel" readonly name="email" value="<?= $user['email']; ?>" id="" placeholder="" aria-describedby="addon1">
                                                    </div>
                                                    <label for="groom-firstname">Groom's Firstname</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><i class="fa fa-male" aria-hidden="true"></i> </span>
                                                        <input type="text" class="form-control floatLabel" name="groom_fname" id="" value="<?= $user['groom_fname']; ?>" placeholder="" aria-describedby="addon1">
                                                    </div>

                                                    <label for="groom-lastname">Groom's Lastname</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><i class="fa fa-male" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control floatLabel" name="groom_lname" id="" value="<?= $user['groom_lname']; ?>" placeholder="" aria-describedby="addon1">
                                                    </div>

                                                    <label for="bride-firstname">Bride's Firstname</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><i class="fa fa-female" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control floatLabel" name="bride_fname" id="" value="<?= $user['bride_fname']; ?>" placeholder="" aria-describedby="addon1">
                                                    </div>

                                                    <label for="bride-lastname">Bride's Lastname</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><i class="fa fa-female" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control floatLabel" name="bride_lname" id="" value="<?= $user['bride_lname']; ?>" placeholder="" aria-describedby="addon1">
                                                    </div>
                                                    <label for="Username">Username</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control floatLabel" name="username" value="<?= $user['username']; ?>" id="" placeholder="" aria-describedby="addon1">
                                                    </div>
                                                </div>

                                                

                                                <div class="col-lg-6">
                                                    <label for="Password">Password</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control floatLabel" name="password" value="<?= $user['password']; ?>" id="" placeholder="" aria-describedby="addon1">
                                                    </div>

                                                    <label for="confirm Password">confirm Password</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control floatLabel" name="confirm_pass" value="<?= $user['confirm_pass']; ?>" id="" placeholder="" aria-describedby="addon1">
                                                    </div>

                                                    <label for="Wedding Date">Wedding Date</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        <input type="date" class="form-control floatLabel" name="date" value="<?= $user['date']; ?>" id="" placeholder="" aria-describedby="addon1">
                                                    </div>

                                                    <div class="yes">
                                                        <label for="address">Hall/Event Address</label>
                                                        <input type="text" class="form-control" value="<?= $user['address']; ?>" name="address" id="">
                                                        <label for="city">City</label>
                                                        <input type="text" class="form-control" name="city" id="" value="<?= $user['city']; ?>">
                                                        <label style="margin-top: 10px;">State:</label>
                                                        <select name="state" style="color: #080808;">
                                                            <option selected value="<?= $user['state']; ?>"></option>
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
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" name="reg" value="Update Account" class="my_btn btn-lg" style="float: right;">
                                        </form>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="help">

                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

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
        <script type="text/javascript" src="js/dashboard.js"></script>
        <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDMOp1QYOePCL4zsxFKkNCM3mF7WarQl0&callback=initMap"></script> -->
        <script type="text/javascript" src="js/jquery.countdown.js"></script>
        <script type="text/javascript" src="js/jquery.simpleWeather.min.js"></script>
        <script>
              $('#wedding_countdown').countdown('<?= $user['date']; ?>', function(event) {
                var $this = $(this).html(event.strftime(''

                    + '<span class="ct">%d</span> days '
                    + '<span class="ct">%H</span> hrs '
                    + '<span class="ct">%M</span> mins '
                    + '<span class="ct">%S</span> secs'));
              });


              // weather forecast
              $(document).ready(function() {
                $.simpleWeather({
                  location: '<?= substr($user['state'],0); ?>, NG',
                  woeid: '',
                  unit: 'f',
                  success: function(weather) {
                    html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
                    html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
                    html += '<li class="currently">'+weather.currently+'</li>';
                    html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';
                
                    $("#weather").html(html);
                  },
                  error: function(error) {
                    $("#weather").html('<p>'+error+'</p>');
                  }
                });
              });

              $(function(){

                  $('#iv_no').click(function(e){
                    e.preventDefault();
                      $('#userboard a[href="#iv"]').tab('show');
                  })

              })
              $(function(){

                  $('#iv_yes').click(function(e){
                  $(this).hide();
                  $("#nt").hide();
                  $("#share_it").show();
                  })

              })

              $(function(){

                  $('#back').click(function(e){
                  $(this).show();
                  $("#share_it").hide();
                  $("#nt").show();
                  })

              })
        </script>
    </body>
<?php else: header('location:login.php')?>
    

<?php endif; ?>
</html>