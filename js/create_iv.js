	$('.open-buttton1').click(function(){
	
		if($('.open-buttton1').hasClass('closed')){
			$(this).parent('.settings-panel1').stop().animate({left:225},400);
			$(this).removeClass('closed').addClass('opened');
		} else {
			$(this).parent('.settings-panel1').stop().animate({left:0},400);
			$(this).removeClass('opened').addClass('closed');
		}
	});
	
	// });
	
	$('.settings-panel1 .bg_patterns ul li').click(function(){
		var thisBGimg = $(this).css('background-image');
		$('body').css('background-image', thisBGimg);
	});

	// Card Pattern changes  Patterns and Background Colour 
		
	jQuery('.settings-panel1 .card_patterns ul li').click(function(){
		var thisBGcol = jQuery(this).css('background-color');
		var thisBGimg = jQuery(this).css('background-image');
		jQuery('.card-pattern').css('background-image', thisBGimg);
		jQuery('.card-pattern').css('background-color', thisBGcol);
	});
	
	$(".c_patterns li").click(function () {
		var myClass = $(this).attr("class");

		if(myClass === 'default'){

			$('#color').attr('href','css/default.css');
			$("#logo").attr("src","images/logo.png");
		}

		else if(myClass === 'c1'){
			$('#color').attr('href','css/colors/color_1.css');
			$("#logo").attr("src","images/c1.png");
		}
		else if(myClass === 'c2'){
			$('#color').attr('href','../css/colors/color_2.css');
			$("#logo").attr("src","images/c2.png");
		}
		else if(myClass === 'c3'){
			$('#color').attr('href','css/colors/color.css');
			$("#logo").attr("src","images/c3.png");
		} 
	});


//Slides Formation

jQuery(document).ready(function($){ 
"use strict";        
				// on  click logo	ul.list li
				$('ul.arrowunderline li,.menu > .item > .item_content >h2,.logo').hover(
				)
	
	
	// on  click navigation	
.click(function(){
				var jQuerythis = jQuery(this);
				var name = this.className;
				jQuery('#wrapper').animate({marginTop:-900}, 500,function(){ // upside slide animation 
				var jQuerythis = $(this);
	
	switch (name)
		{
		case 'home':
		$('#home').show();
		$('#gift,#wedding,#features,#portfolio,#contact').hide();
		break;
		
		case 'logo':
		$('#home').show();
		$('#gift,#wedding,#features,#portfolio,#contact').hide();
		break;

		case 'wedding':	 
		$('#wedding').show();
		$('#home,#features,#gift,#portfolio,#contact').hide();
		break;

		case 'portfolio':
		$('#portfolio').show();
		$('#home,#wedding,#features,#gift,#contact').hide();
		break;
		
		case 'gift':	 
		$('#gift').show();
		$('#home,#wedding,#portfolio,#features,#contact').hide();
		break;

		case 'contact':
		$('#contact').show();
		$('#home,#wedding,#features,#gift,#portfolio').hide();
		break;
		
	} // end switch 
				
			jQuerythis.animate({marginTop:50}, 500);  // Downside slide animation 
			jQuerythis.animate({marginTop:28}, 500); //  slight animation 
			jQuerythis.animate({marginTop:50}, 500); // reset to normal
	
				})	 

			});

});

//File Upload
