<?php
   session_start();

   $pdo = new PDO('mysql:host=localhost;dbname=yesido;charset=UTF8', 'root', '' );

   if (isset($_SESSION['user_session']) ) {
       $do = $pdo->prepare("SELECT * FROM createiv WHERE id=:id");
       $do->bindparam(':id',$_SESSION['user_session']);
       $do->execute();
       $row = $do->fetch(PDO::FETCH_ASSOC);

       $user = NULL;
       if (count($row) > 0) {
           $user = $row;
       }
   }

?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Put in your wedding details</title>
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/getivdetails.css">
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
		<script type="text/javascript" src="dist/sweetalert.min.js"></script>
	</head>
	<body>

	<nav class="line">
	  <span class="logo"></span>
	</nav>
	
<?php

	require 'vendor/autoload.php';

	$pdo = new PDO('mysql:host=localhost;dbname=yesido;charset=UTF8', 'root', '' );

	$gump = new GUMP();

	$_POST = $gump->sanitize($_POST);

	if(isset($_POST['iv'])){
	    $is_valid = GUMP::is_valid($_POST, array(
	        'groom_text' => 'required|alpha',
	        'bride_text' => 'required|alpha',
	        'cbm' => 'required|alpha',
	        'bride_m' => 'required|alpha',
	        'bm' => 'required|alpha_numeric',
	        'groom_m' => 'required',
	        'phone' => 'required',
	        'time' => 'required',
	        'reception' => 'required',
	        'hotel' => 'required',
	        'hotel_notice' => 'required',
	        'gift' => 'required',
	    ));

		    // $groom_text = $_POST['groom_text'];
		    // $bride_text = $_POST['bride_text'];
		    // $cbm = $_POST['cbm'];
		    // $bride_m = $_POST['bride_m'];

	    error_reporting( ~E_NOTICE );
		    $imgFile1 = $_FILES['user_image1']['name'];
		    $tmp_dir1 = $_FILES['user_image1']['tmp_name'];
		    $imgSize1 = $_FILES['user_image1']['size'];

		    $imgFile2 = $_FILES['user_image2']['name'];
		    $tmp_dir2 = $_FILES['user_image2']['tmp_name'];
		    $imgSize2 = $_FILES['user_image2']['size'];

		    $imgFile3 = $_FILES['user_image3']['name'];
		    $tmp_dir3 = $_FILES['user_image3']['tmp_name'];
		    $imgSize3 = $_FILES['user_image3']['size'];

		    $imgFile4 = $_FILES['user_image4']['name'];
		    $tmp_dir4 = $_FILES['user_image4']['tmp_name'];
		    $imgSize4 = $_FILES['user_image4']['size'];

		    $imgFile5 = $_FILES['user_image5']['name'];
		    $tmp_dir5 = $_FILES['user_image5']['tmp_name'];
		    $imgSize5 = $_FILES['user_image5']['size'];

		    if(empty($imgFile1 && $imgFile2 && $imgFile3 && $imgFile4 && $imgFile5)){

		    	$errMSG = "Please Select Image File.";
		    }
		    else 
		    {

			    $upload_dir = 'user_images/';

			    $imgExt1 = strtolower(pathinfo($imgFile1,PATHINFO_EXTENSION)); // get image extension
			    $imgExt2 = strtolower(pathinfo($imgFile2,PATHINFO_EXTENSION)); // get image extension
			    $imgExt3 = strtolower(pathinfo($imgFile3,PATHINFO_EXTENSION)); // get image extension
			    $imgExt4 = strtolower(pathinfo($imgFile4,PATHINFO_EXTENSION)); // get image extension
			    $imgExt5 = strtolower(pathinfo($imgFile5,PATHINFO_EXTENSION)); // get image extension

			    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			    // rename uploading image
				$userpic1 = rand(1000,1000000).".".$imgExt1;
				// rename uploading image
				$userpic2 = rand(1000,1000000).".".$imgExt2;
				// rename uploading image
				$userpic3 = rand(1000,1000000).".".$imgExt3;
				// rename uploading image
				$userpic4 = rand(1000,1000000).".".$imgExt4;
				// rename uploading image
				$userpic5 = rand(1000,1000000).".".$imgExt5;

				if(in_array($imgExt1 && $imgExt2 && $imgExt3 && $imgExt4 && $imgExt5, $valid_extensions)){			
					// Check file size '5MB'
					if($imgSize1 && $imgSize2 && $imgSize3 && $imgSize4 && $imgSize5 < 5000000)	{
						move_uploaded_file($tmp_dir1 && $tmp_dir2 && $tmp_dir3 && $tmp_dir4 && $tmp_dir5,$upload_dir.$userpic1 && $upload_dir.$userpic2 && $upload_dir.$userpic3 && $upload_dir.$userpic4 && $upload_dir.$userpic5);
					}
					else{
						$errMSG = "Sorry, your file is too large.";
					}
				}
				else{
					$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
				}
			}

			if(!isset($errMSG)) {

			
			
			$query_string = "INSERT INTO createiv (`id`,`user_id`,`groom_text`, `bride_text`, `cbm`, `bride_m`, `bm`, `groom_m`, `phone`, `time`,`reception`, `hotel`, `hotel_notice`, `gift`, `user_image1`, `user_image2`, `user_image3`, `user_image4`, `user_image5`)VALUES(NULL, '$_SESSION[user_session]', '$_POST[groom_text]','$_POST[bride_text]', '$_POST[cbm]', '$_POST[bride_m]', '$_POST[bm]', '$_POST[groom_m]', '$_POST[phone]', '$_POST[time]', '$_POST[reception]', '$_POST[hotel]', '$_POST[hotel_notice]', '$_POST[gift]', '$_FILES[user_image1]', '$_FILES[user_image2]', '$_FILES[user_image3]', '$_FILES[user_image4]', '$_FILES[user_image5]')";
			
			$run = $pdo->query($query_string);

			if($is_valid === true) {

			    echo "<script type='text/javascript'>

			     sweetAlert (\"Your E-IV is ready\", \"Wishing you a happy married life in advance!!!\", \"success\");
			            function Redirect() {
			   window.location=\"http://localhost/UndI/create_iv.php\";
			}
			setTimeout('Redirect()', 3000);
			          </script>";

			}
			else {
			    
			    print_r($is_valid);
			}
		}
	}

?>
	
	<div class="container">
		<a href="dashboard.php"><button class="my_btn btn-lg">Go back to your Dashboard</button></a>
		<legend class="text-center">You are few minutes away from creating your IV</legend>
	    	
    		<div class="stepwizard">
    		    <div class="stepwizard-row setup-panel">
    		        <div class="stepwizard-step">
    		            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
    		            <p>Bride's Information</p>
    		        </div>
    		        <div class="stepwizard-step">
    		            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
    		            <p>Groom's Information</p>
    		        </div>
    		        <div class="stepwizard-step">
    		            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
    		            <p>Wedding Information</p>
    		        </div>
    		        <div class="stepwizard-step">
    		            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
    		            <p>Pre-Wedding Photos</p>
    		        </div>
    		    </div>
    		</div>
    		<form role="form" method="post" enctype="multipart/form-data">
    		    <div class="row setup-content" id="step-1">
    		        <div class="col-xs-12">
    		            <div class="col-md-12">
    		                <h3> Bride's Information</h3>
							<div class="form-group">
								<label>Upload Bride's Image</label>
    		                	<input class="input-group" type="file" name="user_image1" accept="image/*" />
    		                </div>
    		                <div class="form-group">
                				<label>What do you have to say about the Bride?</label>
                    			<textarea id="about_bride" name="bride_text" class="form-control" required="required" placeholder="About Bride"></textarea>
    		                </div>
    		                <div class="form-group">
                				<label>Name of Chief Bride's Maid</label>
                				<input id="name" name="cbm" type="text" class="form-control" required="required" placeholder="input here...">
    		                </div>
    		                <div class="form-group">
                				<label>List the Bride's Maid here</label>
                				<textarea id="bride_m" name="bride_m" class="form-control" required placeholder="Bride's Maids"></textarea>
    		                </div>

    		                
    		                
    		                <button class="my_btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
    		            </div>
    		        </div>
    		    </div>
    		    <div class="row setup-content" id="step-2">
    		        <div class="col-xs-12">
    		            <div class="col-md-12">
    		                <h3> Groom's Information</h3>
								<div class="form-group">
									<label>Upload Groom's Image</label>
	    		                	<input class="input-group" type="file" name="user_image2" accept="image/*" />
	    		                </div>
        		                <div class="form-group">
        				            <label>What do you have to say about the Groom?</label>
        			    			<textarea id="about_groom" name="groom_text" class="form-control" required placeholder="About Groom"></textarea>
        		                </div>
        		                <div class="form-group">
        				            <label>Name of Chief BestMan</label>
        				            <input id="name" name="bm" type="text" class="form-control" required placeholder="Best Man">
        		                </div>
                                <div class="form-group">
                		            <label>List the Groom's Men here</label>
                		            <textarea id="groom_m" name="groom_m" class="form-control" required placeholder="Groom's Men"></textarea>
                                </div>
    		                <button class="my_btn btn-primary nextBtn btn-lg pull-right" type="button" name="iv" >Next</button>
    		            </div>
    		        </div>
    		    </div>
    		    <div class="row setup-content" id="step-3">
    		        <div class="col-xs-12">
    		            <div class="col-md-12">
    		                <h3> Wedding Information</h3>
    		                <div class="form-group">
    			                <label>Contact phone number</label>
    			                <input id="name" name="phone" type="tel" class="form-control" required placeholder="">
    		                </div>

    		                <div class="form-group">
    			                <label>Time of Wedding</label>
    			                <input id="time" name="time" type="time" class="form-control" required placeholder="">
    		                </div>
    		                
    		                
    		                <div class="form-group">
    			                <label>Reception Address</label>
    			                <textarea id="rec_lcn" name="reception" class="form-control" required placeholder=""></textarea>
    			            </div>

    		                <div class="form-group">
    			                <label>Hotel Address(If available*)</label>
    			                <textarea id="hotel" name="hotel" class="form-control" required placeholder="Hotel Address"></textarea>
    			            </div>

    		                <div class="form-group">
    			                <label>Hotel Special Information(If available*)</label>
    			                <textarea id="hotel_notice" name="hotel_notice" class="form-control" required placeholder="Do yo have any info concerning the Hotel. e.g Special rate?"></textarea>
    			            </div>

    		                <div class="form-group">
    			                <label>List your preferred gifts(If available*)</label>
    			                <textarea id="gift" name="gift" class="form-control" required placeholder="Seperate with comma"></textarea>
    			            </div>
    		                
    		                <button class="my_btn btn-primary nextBtn btn-lg pull-right" type="button" name="iv" >Next</button>

    		            </div>
    		        </div>
    		    </div>
    		    <div class="row setup-content" id="step-4">
    		        <div class="col-xs-12">
    		            <div class="col-md-12">
    		                <h3> Pre - Wedding Pictures</h3>
    		                
    		                <div class="form-group">
								<label>First Image</label>
    		                	<input class="input-group" type="file" name="user_image3" accept="image/*" />
    		                </div>

    		                <div class="form-group">
								<label>Second Image</label>
    		                	<input class="input-group" type="file" name="user_image4" accept="image/*" />
    		                </div>

    		                <div class="form-group">
								<label>Third Image</label>
    		                	<input class="input-group" type="file" name="user_image5" accept="image/*" />
    		                </div>

    		                
    		                <button class="my_btn btn-success btn-lg pull-right" type="submit" name="iv">CREATE IV</button>
    		            </div>
    		        </div>
    		    </div>
    		</form>
	    
	</div>
</div>


	<script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>
    	

    	$(document).ready(function () {

    	    var navListItems = $('div.setup-panel div a'),
    	            allWells = $('.setup-content'),
    	            allNextBtn = $('.nextBtn');

    	    allWells.hide();

    	    navListItems.click(function (e) {
    	        e.preventDefault();
    	        var $target = $($(this).attr('href')),
    	                $item = $(this);

    	        if (!$item.hasClass('disabled')) {
    	            navListItems.removeClass('btn-primary').addClass('btn-default');
    	            $item.addClass('btn-primary');
    	            allWells.hide();
    	            $target.show();
    	            $target.find('input:eq(0)').focus();
    	        }
    	    });

    	    allNextBtn.click(function(){
    	        var curStep = $(this).closest(".setup-content"),
    	            curStepBtn = curStep.attr("id"),
    	            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
    	            curInputs = curStep.find("input[type='text'],input[type='url']"),
    	            isValid = true;

    	        $(".form-group").removeClass("has-error");
    	        for(var i=0; i<curInputs.length; i++){
    	            if (!curInputs[i].validity.valid){
    	                isValid = false;
    	                $(curInputs[i]).closest(".form-group").addClass("has-error");
    	            }
    	        }

    	        if (isValid)
    	            nextStepWizard.removeAttr('disabled').trigger('click');
    	    });

    	    $('div.setup-panel div a.btn-primary').trigger('click');
    	});

    </script>

	</body>
</html>