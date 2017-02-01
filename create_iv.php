<?php 
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=yesido;charset=UTF8', 'root', '' );
     
    if (isset($_SESSION['user_session']) ) {
          $do = $pdo->prepare("SELECT * FROM users as us, createiv as cr WHERE us.id=user_id");
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
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Create Your IV - YESIDO</title>
		<meta name="description" content="Create your e -IV here">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/colors/color_1.css" id="color">
		<link rel="stylesheet" type="text/css" href="css/default.css">
	</head>
	<body>
		
		<div id="preloader">
		  <div id="spinner_container">
		    <img id="spinner" src="images/iv_img/loading.gif" alt="" />
		  </div>
		</div>

		<div class="settings-panel1">
			<span class="open-buttton1 closed" title="change background color"><br/><br/></span>
			
			<h5>Backgrounds</h5>
			<div  class="bg_patterns">
				<ul class="patterns">
					<li></li>
					<li class="bgs1" title="Card1"></li>
					<li class="bgs2" title="Card2"></li>
					<li class="bgs3" title="Card3"></li>
					<li class="bgs4" title="Card4"></li>
					<li class="bgs33" title="Remove"><img src="images/iv_img/remove.png" width="37" height="37" border=0 alt="" ></li>
				</ul>
			</div>
			
			<div  class="bg_patterns">
			<h5>PNG Transparent Patterns</h5>
			<h6>Background Color:</h6> <input  class="color {pickerPosition:'left'}" value="2bafb4" size="5" >
				<ul class="patterns">
					<li></li>
					<li class="img_bgs1" title="Heartine fly"><img src="images/iv_img/01.jpg" width="37" height="37" border=0 alt="" ></li>
					<li class="img_bgs2" title="scarlet"><img src="images/iv_img/02.jpg" width="37" height="37" border=0 alt="" ></li>
					<li class="img_bgs3" title="Gift with fly"><img src="images/iv_img/03.jpg" width="37" height="37" border=0 alt="" ></li>
					<li class="default" title="Remove"><img src="images/iv_img/remove.png" width="37" height="37" border=0 alt="" ></li>
				</ul>
			</div>
		
			
			<div  class="colour_patterns">
				<h5>Pre Defined Color</h5>
				<ul class="c_patterns"><li> </li>
					<li  class="c1" title="Tonys Pink" ></li>
					<li  class="c2" title="Eggplant" ></li>
					<li  class="c3" title="Strikemaster" ></li>
					<li  class="default" title="Reset">Reset</li>
				</ul>
			</div>

		</div>
		<div id="wrapper">
			<div class="clr" id="top-head">
				<!--// Navigation //-->
				<div class="menu_nav">
					<div id="nav-wrap" class="nav-wrap">
						<ul class="arrowunderline" id="nav">
							<li class="home" id="selected">Home</li>
							<li class="wedding">Wedding</li>
							<li class="portfolio">Wedding Album</li>
							<li class="gift">Gifts</li>
							<li class="contact">Contact / RSVP</li>	
						</ul>
					</div>
				</div>
				<!--// Navigation End //-->
				<div class="border_pat"></div>
			</div>
			<div class="green_bg">
				<div class="container1">
					<div class="logo_sec">
						<div class="clr" style="margin-top: 35px; font-size: 20px;"><small>Were Getting Married  -  <?= date("jS F, Y", strtotime($user['date'])); ?></small></div>
						<div class="clr">
						<div class="middle_heart"></div>
						<p class="groom"><a href="#home" title="<?= $user['groom_fname']; ?> <?= $user['groom_lname']; ?>"> <?= $user['groom_fname']; ?> <?= $user['groom_lname']; ?> </a></p>
						<span></span>
						<p><span class="bride"><a href="#home" title="<?= $user['bride_fname']; ?> <?= $user['bride_lname']; ?>"> <?= $user['bride_fname']; ?> <?= $user['bride_lname']; ?> </a></span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div id="content">
					<div class="card-pattern">
						<!-- Home -->
						<div id="home" class="sub_page">
							<div class="card_content">
								<div class="card_left">
									<div class="clr">
			                            <div>
											<ul class="card_image">
												<li>
													<div class="first_card">
														<img src="images/iv_img/card_image1.png" alt="" width="344" height="289"/>
													</div>
													<div class="imageContainer" title="groom's image">
													    
													    <?= $user['user_image2']; ?>
													</div>
												</li>
											</ul>
										</div>
		                          
		                            </div>
									<div class="card_heading">About <?= $user['groom_fname']; ?> <?= $user['groom_lname']; ?></div>
									<div class="clr">
										<p>
											<?= $user['groom_text']; ?>
										</p>
									</div>
								</div>
								<div class="card_middle"><div class="card_circle"><a href="#">+</a></div></div>
								<div class="card_right">
									<div>
										<ul class="card_image">
											<li>
												<div class="second_card">
													<a href="#"><img src="images/iv_img/card_image2.png" alt=""/></a>
												</div>
												<div class="imageContainer2" title="Select groom's image">
												    
												    <?= $user['user_image1']; ?>
												</div>
											</li>
										</ul>
									</div>
									<div class="card_heading">About <?= $user['bride_fname']; ?> <?= $user['bride_lname']; ?></div>
									<div class="clr">
										<p>
											<?= $user['bride_text']; ?>
										</p>
									</div>
								</div>
								<div class="clr"></div>
								<div class="dot_line">
									<div class="lines_dot">
										<div class="heart">&nbsp;</div>
									</div>
								</div>
								<div class="center" id="venue">
									<div class="date"><?= date("jS F, Y", strtotime($user['date'])); ?></div>
									<div class="time"><span>09.00</span> AM</div>
									<div class="location"><?= $user['address']; ?> <?= $user['city']; ?> <?= $user['state']; ?><a href="#">GET DIRECTIONS</a></div>
								</div>
							</div>
							<div class="clr"></div>
						</div>
						<!-- //Home -->
					
						<!-- Wedding -->
						<div id="wedding" class="sub_page">
							<div class="card_content">
								<!-- <div class="heading">wedding</div>
								<div class="clr">
									<h6>The ceremony and reception will held at <?= $user['reception']; ?></h6>
								</div> -->
								<div class="clr hline">&nbsp;</div>
								<div class="wedding">
									<ul class="list">
										<li>
											<span class="head">Ceremony & Reception Location</span><br /><br />
											<?= $user['reception']; ?><br>
											<?= $user['phone']; ?><br /><br />
											
											<a href="<?= $user['phone']; ?>">Get Directions</a>
										</li>
										<li>
											<span class="head">The Wedding Party</span><br /><br />
											<span class="green_txt">Chief BridesMaid:</span><br />
											<?= $user['cbm']; ?><br /><br />
											<span class="green_txt">Bridesmaids:</span><br />
											<?= $user['bride_m']; ?><br /><br />
											<span class="green_txt">Best Man:</span><br />
											<?= $user['bm']; ?><br /><br />
		                                    <span class="green_txt">Grooms Men:</span><br />
											<?= $user['groom_m']; ?><br /><br />
										
										</li>
										<li>
											<span class="head">Hotel Accommodations</span><br /><br />
											You can book hotel accomodation here<br /><br>
											<?= $user['hotel']; ?><br /><br>
											<?= $user['hotel_notice']; ?><br />
											<a href="#">Get Directions</a><br />
										</li>
									</ul>
								</div>
							</div>
							<div class="clr"></div>
						</div>
						<!-- //Wedding -->
						
							<!-- Portfolio -->
						<div id="portfolio" class="sub_page">
							<div class="card_content">
									<div class="heading">Our Wedding Album</div>
								<div class="clr">
									<h6>Celebrate with us as we start this new journey</h6>
								</div>
								<div class="row">
									<div class="thumbnail col-lg-4">
										<?= $user['user_image3']; ?>
									</div>
									<div class="thumbnail col-lg-4">
										<?= $user['user_image4']; ?>
									</div>
									<div class="thumbnail col-lg-4">
										<?= $user['user_image5']; ?>
									</div>
									
								</div>			
							</div>
							<div class="clr"></div>
						</div>
						<!-- //Portfolio -->	
					
						<!-- Gift -->
						<div id="gift" class="sub_page">
							<div class="card_content">
									<div class="heading">Gifts Registry</div>
								<div class="clr">
									<h6>Below are the gifts we would love to get from you</h6>
									<br>
									<p><?= $user['gift']; ?></p>
								</div>	
								<div class="clr hline">&nbsp;</div>
											
							</div>
						</div> 
						<!-- //Gift -->	
					
					
					
					<!-- contact -->
						<div id="contact" class="sub_page">
							<div class="card_content">
									<div class="heading">Contact / RSVP</div>
								<div class="clr">
									<h6>If you have any questions or just want to get in touch with us,
									<span>feel free to do so by going through this page or contact <?= $user['phone']; ?></span></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		//<?php
		// function curPageURL() {
		//  $pageURL = 'http';
		//  if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		//  $pageURL .= "://";
		//  if ($_SERVER["SERVER_PORT"] != "80") {
		//   $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		//  } else {
		//   $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		//  }
		//  return $pageURL;
		// }
		?>

		<?php
		  // echo curPageURL();
		?>



		
		<script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/create_iv.js"></script>
        <script type="text/javascript" src="js/jscolor.js"></script>
        <script>
        	$(document).ready(function($){
        	"use strict";
        		  jQuery('#preloader').fadeOut(2000, function() {
        			jQuery('body').css('overflow','visible');
        			jQuery(this).remove();
        		  });
        	});
        </script>
	</body>
	<?php else: header('location:login.php')?>
	    

	<?php endif; ?>
</html>