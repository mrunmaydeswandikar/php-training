<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7 ie" lang="en" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie" lang="en" dir="ltr"><![endif]-->
<!--[if gt IE 8]> <html class="no-js gt-ie8 ie" lang="en" dir="ltr"><![endif]-->


<?php

echo"<html>";
echo"<head>";
echo'<link href="css/default.css" rel="stylesheet" type="text/css" media="all">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all">
<!--<link href="css/small-resolution.css" rel="stylesheet" type="text/css" media="all">
<link href="css/medium-resolution.css" rel="stylesheet" type="text/css" media="all">
<link href="css/high-resolution.css" rel="stylesheet" type="text/css" media="all">';
echo'<script src="js/jquery.bxslider.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<link href="css/responsive.css" rel="stylesheet" />';
echo'</head><body>';
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico" />
<title>Vital Partners Leading Dating and Introduction Agency in Sydney &amp; Canberra</title>
<link href="css/default.css" rel="stylesheet" type="text/css" media="all">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all">
<!--<link href="css/small-resolution.css" rel="stylesheet" type="text/css" media="all">
<link href="css/medium-resolution.css" rel="stylesheet" type="text/css" media="all">
<link href="css/high-resolution.css" rel="stylesheet" type="text/css" media="all">-->

<!-- jQuery library (served from Google) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>

<!-- bxSlider CSS file -->
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<!-- Responsive -->
<link href="css/responsive.css" rel="stylesheet" />



</head>

<body>
<!--wrapper-starts-->
<div id="wrapper"> 
  
 <!--header-starts-->
  <header class="clearfix">

    <div class="container"><!--container Start-->

		<div class="Logo_Cont left"><!--Logo_Cont Start-->
                    	
           <a href="index.html"><img src="images/logo.png" alt=""  /></a>
        
        </div><!--Logo_Cont End-->
		
		<div class="Home_Cont_Right right"><!--Home_Cont_Right Start-->
                    	
            <div class="Home_Cont_Right_Top left"><!--Home_Cont_Right_Top Start-->
                 
				 <div class="Top_Search1 left">Call Us Today! (02) 9017 8413</div>
				 <div class="Top_Search2 right">
				 	<input  id="tags1" name="" type="text" onclick="this.value='';" onblur="validate_field('phone');"  value="Type desired Job Location" />
				 </div>
           
        	</div><!--Home_Cont_Right_Top End-->

			<div class="Home_Cont_Right_Bottom left"><!--Home_Cont_Right_Bottom Start-->
				<div class="toggle_menu"><a href="javascript:void(0)">Menu</a></div>
                 <div id= "topMenu">
                 	<ul>
                 		<li><a href="index.html">Home</a></li>
                 		<li><a href="blog_index.html">Dating Blog</a></li>
                 		<li><a href="who_we_help.html">Who We Help</a></li>
                 		<li><a href="why_vital.html">Why Vital</a></li>
                 		<li><a href="reviews.html">Reviews</a></li>
                 		<li><a href="contact_us.html">Contact Us</a></li>
                 	</ul>
                 </div>
           
        	</div><!--Home_Cont_Right_Bottom End-->
        
        </div><!--Home_Cont_Right End-->

	</div><!--container End-->

  </header>
  <!--header-ends-->

  <div class="section banner_section who_we_help">
  	<div class="container">
  		<h4>Manage Customer</h4>
  	</div>
  </div>

  <!-- Content Section Start-->
  <div class="section content_section">
	<div class="container">
		<div class="filable_form_container">
			<div class="mange_buttons">
				<ul>
					<li class="search_div">
				 <div class="Search">
				 	<input name="search" type="text" /> 
                                        <input type="text" id="search" onclick=""value="submit">
				 </div>
					</li>
                                        <li><a href="add.php">Create Customer</a></li>
					
				</ul>
			</div>
                    
                   <?php 
                    
                    $cn = mysql_connect("localhost","root","ac3r")or die(mysql_error());
            $db = mysql_select_db("emp_asgn3") or die(mysql_error);
            
            $string = "select * from emp";
            $result = mysql_query($string);
            
                
                    
			echo'<div class="table_container_block">';
				echo'<table>';
					echo'<thead>';
						echo'<tr>';
						echo'<th>';
							echo'<input type="checkbox" class="checkbox" id="checkbox_sample18" /> <label class="css-label mandatory_checkbox_fildes" for="checkbox_sample18"></label>';
						echo'</th>';
						echo'<th style="width:12%">Name <a href="#" class="sort_icon"><img src="images/sort.png"></a></th>';
						echo'<th>Email<a href="#" class="sort_icon"><img src="images/sort.png"></a></th>';
						echo'<th>Phone<a href="#" class="sort_icon"><img src="images/sort.png"></a></th>';
						echo'<th>Gender<a href="#" class="sort_icon"><img src="images/sort.png"></a></th>';
						echo'<th>Pincode<a href="#" class="sort_icon"><img src="images/sort.png"></a></th>';
						echo'<th>Action</th>';
						echo'</tr>';
					echo'</thead>';
					echo'<tbody>';
                                        while($r = mysql_fetch_array($result))
                                        {
                
						echo'<tr>';
							echo'<td>';
								echo'<input type="checkbox" class="checkbox" id="checkbox_sample19" /> <label class="css-label mandatory_checkbox_fildes" for="checkbox_sample19"></label>';
							echo'</td>';
							echo'<td>'.$r["fname"].'</td>';
                                                        echo'<td>'.$r["email"].'</td>';
                                                        echo'<td>'.$r["phone"].'</td>';
                                                        echo'<td>'.$r["gend"].'</td>';
                                                       echo'<td>'.$r["pin"].'</td>';
                                                        echo'<td>';
								echo'<div class="buttons">';
								  echo'<button class="btn btn_edit" onclick=location.href="edit.php">Edit</button>';
								  echo'<button class="btn btn_delete">Delete</button>';
								echo'</div>';								
							echo'</td>';
						echo'</tr>';
                                        }
						
					echo'</tbody>';
				echo'</table>';
			echo'</div>';
			
                    ?>
			<!-- <div class="pagination_listing">
				<ul>
					<li><a href="#">first</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Last</a></li>
				</ul>
			</div> -->

		</div>
	</div>		
  </div>
  <!-- Content Section End-->




<div class="section clearfix section-colored7"><!--section start--> 
    	
	<div class="container"><!--container Start-->
		
		<div class="Download_Cont_Top_Left left"><!--Download_Cont_Top Start-->
			<img src="images/icon5.png" alt=""> <h1 style="display:inline;">FREE: Men Are From Mars</h1> <a href="#">Download Now</a>

		</div><!--Download_Cont_Top End-->	
		
	</div><!--container End-->

</div><!--section End-->




 <!--footer-starts-->
  <footer class="footer_wrapper">

    <div class="container"><!--container Start-->
		
		<div class="Footer_Cont_Top clearfix"><!--Footer_Cont_Top Start-->

			<span class="left"><img src="images/foot_logo.png" alt=""></span>
			<p class="right">Shortcut your search to happiness right now. 
Live a life without regrets and take action today!</p>
		</div><!--Footer_Cont_Top End-->
		
		<div class="Footer_Cont_Top2 clearfix"><!--Footer_Cont_Top2 Start-->

			<h1>Call Us Today! (02) 9017 8413</h1>
			 <a href="#">Book an Appointment <img src="images/icon7.png" alt=""></a>
 			 <a href="#">Contact a Consultant <img src="images/icon6.png" alt=""></a>
		</div><!--Footer_Cont_Top2 End-->
		
		<div class="Footer_Cont_Top3 clearfix"><!--Footer_Cont_Top3 Start-->
			
			<div class="Foot_Link1"><!--Foot_Link1 Start-->

				<h1>CONTACT INFO</h1>

				<div class="Foot_Link2"><!--Foot_Link2 Start-->
					 
				  <span>4/220 George St, Sydney NSW 2000</span>
				  <p>Phone: (02) 9017 8413</p>
				  <p>Email: <a href="mailto:info@syd.vitalpartners.com.au" target="_blank">info@syd.vitalpartners.com.au</a></p>

				</div><!--Foot_Link2 End-->

				<div class="Foot_Link2"><!--Foot_Link2 Start-->
					 
				  <span>Canberra City Act 2600 </span>
				  <p>Phone: (02) 9017 8426</p>
				  <p>Email: <a href="mailto:can@syd.vitalpartners.com.au" target="_blank">can@syd.vitalpartners.com.au</a></p>

				</div><!--Foot_Link2 End-->

			</div><!--Foot_Link1 End-->

			<div class="Foot_Link1"><!--Foot_Link2 Start-->
				<h1>RECENT POSTS</h1>

				<div class="Foot_Link3"><!--Foot_Link3 Start-->
					<ul>
						<li><a href="#">How to Recover After a Bad Date</a></li>
                        <li><a href="#">Review | Vital Partners Review</a></li>
                        <li><a href="#">Review | Vital Partners Review</a></li>
                        <li><a href="#">Review | Vital Partners Derek and Julie</a></li>
                        <li><a href="#">7 Rules for a Happy Relationship | Vital Partners Dating Sydney</a></li>
					</ul>
				</div><!--Foot_Link3 End-->

			</div><!--Foot_Link1 End-->

			<div class="Foot_Link1"><!--Foot_Link2 Start-->
				<h1>RECENT TWEETS</h1>

				<div class="Foot_Link4"><!--Foot_Link4 Start-->
					<ul>
						<li class="left">
							<p>Are you being vulnerable to find love? via offline dating agency Sydney Canberra Vital Partners </p> 
			             <div class="Page_Link left"><a  href="#">http://t.co/hGCgHEU6If</a></div>
						 <div class="Page_Link right"> 1 week ago</div>
					    </li>
                      <li class="left">
							<p>Are you being vulnerable to find love? via offline dating agency Sydney Canberra Vital Partners </p> 
			             <div class="Page_Link left"><a  href="#">http://t.co/hGCgHEU6If</a></div>
						 <div class="Page_Link right"> 2 week ago</div>
					    </li>
					</ul>
				</div><!--Foot_Link4 End-->

			</div><!--Foot_Link2 End-->

		
		</div><!--Footer_Cont_Top3 End-->
	
	</div><!--container End-->

    <div class="section clearfix section-colored9"><!--section section-colored9 start--> 
            
        <div class="container"><!--container Start-->
            
          <div class="Foot_Link5 left"><!--Foot_Link5 Start-->
				&copy; VitalPartners.com.au
		  </div><!--Foot_Link5 End-->

			<div class="Foot_Link6 left"><!--Foot_Link5 Start-->
				<a href="contact_us.html">Contact</a> |  <a href="terms_of_use.html">Terms of Use</a> |   <a href="privacy_policy.html">Privacy Policy</a> |  <a href="disclaimer.html">Disclaimer</a>
            </div><!--Foot_Link6 End-->


			<div class="Foot_Link7 right"><!--Foot_Link7 Start-->
				<span>FOLLOW US:</span>

				<ul class="social_media">
					<li><a href="#" class="fb">facebook</a></li>
					<li><a href="#" class="twitter">Twitter</a></li>
					<li><a href="#" class="linkedin">LinkedIn</a></li>
					<li><a href="#" class="you_tube">You Tube</a></li>
					<li><a href="#" class="gplus">googl plus</a></li>
				</ul>


				<!-- <p><a href="#"><img src="images/icon10.png" alt=""></a></p>
                <p><a href="#"><img src="images/icon11.png" alt=""></a></p>
                <p><a href="#"><img src="images/icon12.png" alt=""></a></p>
                <p><a href="#"><img src="images/icon13.png" alt=""></a></p>
                <p><a href="#"><img src="images/icon14.png" alt=""></a></p> -->
			</div><!--Foot_Link7 End-->
            
      </div><!--container End-->
    
    </div><!--section section-colored9 End--> 
	 
    <div class="section section-colored10"><!--section section-colored9 start--> 
            
        <div class="container"><!--container Start-->
			<div class="Foot_Link8 "><!--Foot_Link8 Start-->
			<a href="#">Who Designed This Site?</a> <a href="#">Who  Built This Site?</a>
			</div><!--Foot_Link8 End-->
		</div><!--container End-->
    
    </div><!--section section-colored9 End--> 
  </footer>
  <!--footer-ends--> 

  <!-- Sticky Contact Number Start
  <div class="fixed_contact_number">
  	<div class="container">
  		<div class="contact_number">
  			<span>Call Us Today! (02) 9017 8413</span>
  			<a href="contact_us.html">Conatct Us</a>
  		</div>  		
  	</div>
  </div>
   Sticky Contact Number End-->

</div>
<script type="text/javascript">
	$(document).ready(function(){
	  $('.bxslider').bxSlider();
	});
</script>
<!--wrapper-starts-->

<script type="text/javascript" src="js/jquery.js"></script>	
<script type="text/javascript">
	$(document).ready(function(){
		$('.select').each(function(){
		  var title = $(this).attr('title');
		  if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
		  $(this).css({'z-index':10,'opacity':0,'-khtml-appearance':'none'}).after('<span class="select">' + title + '</span>').change(function(){
			val = $('option:selected',this).text();
			$(this).next().text(val);
		  })
		});
	});
</script>
</body>
</html>