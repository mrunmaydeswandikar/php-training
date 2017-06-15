<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7 ie" lang="en" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie" lang="en" dir="ltr"><![endif]-->
<!--[if gt IE 8]> <html class="no-js gt-ie8 ie" lang="en" dir="ltr"><![endif]-->

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


<style>
    #vfn,#vln,#vphn,#vofc,#vpin,#vpwd,#vcpwd,#vmon,#vday,#vyear,#vage,#vradio,#vabt{color: #F32323}
    </style>

  <script>
    
   var dt = "";
    
    var flag;
    function validation()
    {flag = 1;
             

        validateName(document.forms["frm1"]["fname"].value);
        validateLastName(document.forms["frm1"]["lname"].value);
        validatePhone(document.forms["frm1"]["phone"].value);
        validateOffice(document.forms["frm1"]["ofc"].value);
        validatePassword(document.forms["frm1"]["pwd"].value);
        validateConfirmPassword(document.forms["frm1"]["pwd"].value,document.forms["frm1"]["cpwd"].value);
        validateDob();
        validateAge();
        validateGender();
        validateAbout(document.forms["frm1"]["abt"].value);
        validatePin(document.forms["frm1"]["pin"].value);
        validateID(document.forms["frm1"]["id"].value)
      
        validateEmail(document.forms["frm1"]["email"].value);
        

        //If everything is ok
        
        if(flag==1)
        {
            alert("All ok ! You may proceed.");
          
            }
        
        else
        {   
            
            alert("There are some errors ! Check your inputs");
            
        }
   
        
        
    }
    
    
    //Email validation
    function validateEmail(em)
    {
        
        //validateEmail(document.forms["frm1"]["email"].value);
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(em))
        {
            document.getElementById("vemail").innerHTML="Enter a valid email !";
            flag=0;
        }
        else
        {
           
            document.getElementById("vemail").innerHTML="";
        }
       
    }
    
   
    //Office validation 
    function validateID(id)
    {
        if(id=="")
        {
            document.getElementById("vid").innerHTML="Please enter id !";
            flag=0;
        }
        
       else if(isNaN(id))
        {
                document.getElementById("vid").innerHTML="Please enter only digits !";
                flag = 0;
        }
        else
        {
            document.getElementById("vid").innerHTML="";
        }
        
    }
    
    
    function validatePin(pin)
    {
         if(pin=="")
        {
            document.getElementById("vpin").innerHTML="Please enter pin !";
            flag=0;
        }
        else
        {
            document.getElementById("vpin").innerHTML="";
        }
    }
    



   //Name validation
    function validateName(nm)
    {
         if(nm=="")
        {
            document.getElementById("vfn").innerHTML="Please enter name !";
            flag=0;
        }
        else
        {
            document.getElementById("vfn").innerHTML="";
        }
    }
    
    
    //Last name validation
    function validateLastName(ln)
    {
        if(ln=="")
        {
            document.getElementById("vln").innerHTML="Please enter last name !";
            flag =0;
        }
        else
        {
            document.getElementById("vfn").innerHtml="";
        }
    }
    
    
    
    //Phone number validation
    function validatePhone(phn)
    {
         if(phn=="")
        {
            document.getElementById("vphn").innerHTML="Please enter phone !";
            flag=0;
        }
        
        else if(isNaN(phn)) 
        {
            document.getElementById("vphn").innerHTML= "Please enter only digits !";
            flag=0;
        }
        
        else if(phn.length != 10)
        {
            document.getElementById("vphn").innerHTML = "Phone number should be exactly 10 Digits !";
            flag=0;
        }
        else
        {
            document.getElementById("vphn").innerHTML="";
        }
        
    }
    
    
    
    
    
    //Office validation 
    function validateOffice(ofc)
    {
        if(ofc=="")
        {
            document.getElementById("vofc").innerHTML="Please enter office number !";
            flag=0;
        }
        
       else if(isNaN(ofc))
        {
                document.getElementById("vofc").innerHTML="Please enter only digits !";
        }
        else
        {
            document.getElementById("vofc").innerHTML="";
        }
        
    }
    
    
    
    
    //Password validation
    function validatePassword(pwd)
    {
        if(pwd=="")
        {
            document.getElementById("vpwd").innerHTML="Please enter password !";
            flag=0;
        }
        
        else if(pwd.length<8 || pwd.length>12)
        {
             document.getElementById("vpwd").innerHTML="Password length should be more than 8 and less than 12";
            flag=0;
        }
        else
        {
            document.getElementById("vpwd").innerHTML="";
        }
        
        
    }
    
    
    
    //Confirm Password validation
    function validateConfirmPassword(one,two)
    {
        
        if(two=="")
        {
            document.getElementById("vcpwd").innerHTML="Please confirm your password !";
            flag=0;
        }
        else if(one != two)
        {
            document.getElementById("vcpwd").innerHTML="Both passwords should match !";
            flag=0;
        }
         else
        {
            document.getElementById("vcpwd").innerHTML="";
        }
    }
    
    
    
    //validate dob
    function validateDob()
    {
        dt="";
       
        var mon= document.getElementById("mon").selectedIndex;
        var day = document.getElementById("day").selectedIndex;
        var year = document.getElementById("year").selectedIndex;
         
         //for month
         if(mon=="0")
         {
             document.getElementById("vmon").innerHTML="Select month";
             flag=0;
             
             
         }
         else{
            var m = document.getElementById("mon");
            dt = dt + m.options[m.selectedIndex].value;
            document.getElementById("vmon").innerHTML=" "; 
         }
         
         
         
         //for day
         if(day=="0")
         {
             document.getElementById("vday").innerHTML="Please select day";
             flag=0;
         }
         else{
              var m = document.getElementById("day");
             dt = dt+" "+m.options[m.selectedIndex].value;
            document.getElementById("vday").innerHTML="&nbsp"; 
         }
         
         
         //for year
         if(year=="0")
         {
             document.getElementById("vyear").innerHTML="Please select year";
             flag=0;
         }
         else{
            var m = document.getElementById("year");
             dt = dt+","+m.options[m.selectedIndex].value;
             alert(dt);
            document.getElementById("vyear").innerHTML=" "; 
         }
        
       
        
        
    }
    
    
    
    //validate age
    function validateAge()
    {
         var x = document.getElementById("year").selectedIndex;
         var y = document.getElementById("year").options;
         
         var a = document.getElementById("mon").selectedIndex;
         var b = document.getElementById("mon").options;
         
         
        if(year=="0")
         {
             document.getElementById("vage").innerHTML="Please select year";
             flag=0;
         }
        else{
          
         var tod= new Date();
        
            var m = y[x].text;
             var yr = Number(m);
            var age = tod.getFullYear()- yr;
        
            m = b[a].value;
            var mon = Number(m);
            var calmon;
            
            if(tod.getMonth()>mon)
            {
                calmon = tod.getMonth()-mon;
                calmon = calmon/10;
            }
            else
            {
                calmon = mon - tod.getMonth();
                calmon = calmon/10;
            }
            
            age = age + calmon;
         document.getElementById("age").value = age;
         alert(age);
          
         }
        
        
    }
    
    
    //Gender validation
     function validateGender()
    {
       
        if(document.getElementById("male").checked==false && document.getElementById("female").checked==false)
        {
           
          document.getElementById("vradio").innerHTML="Please select gender";
            flag=0;
            
        }
        else
        {
            document.getElementById("vradio").innerHTML="";
       
         }
        
        
        
    }
    

    
     //About ur self validation
    function validateAbout(abt)
    {
        if(abt=="")
        {
            document.getElementById("vabt").innerHTML="Please write something about you !";
            flag=0;
        }
        else
        {
            document.getElementById("vabt").innerHTML="";
        }
        
    }
    
    
</script>

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
				 <div class="Top_Search2 right"><input  id="tags1" name="" type="text" onclick="this.value='';" onblur="validate_field('phone');"  value="Type desired Job Location" /></div>
           
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
  		<h4>Create Customer</h4>
  	</div>
  </div>

  <!-- Content Section Start-->
  <div class="section content_section">
	<div class="container">
            
            
            <form id="frm1" method="POST" action="edit_emp.php">
		<div class="filable_form_container">
			<div class="form_container_block">
				<ul>
					<li class="fileds">
                                            <div class="name_fileds">
							<label>ID</label><?php echo $_POST["fname"];?>
                                                        <input id="id" name="id" type="text" /><p id="vid"></p> 
						</div>
                                            
						<div class="name_fileds">
							<label>First Name</label><?php echo $_POST["fname"];?>
                                                        <input id="fname" name="fname" type="text" /><p id="vfn"></p> 
						</div>
						<div class="name_fileds">
							<label>Last Name</label>
							<input id="lname" name="lname" type="text" /><p id="vln"></p> 
						</div>
					</li>
					<li class="fileds">
						<div class="phone_fileds">
							<label>Phone No</label>
							<input id="phone" name="phone" type="text" /><p id="vphn"></p> 
						</div>
						<div class="phone_fileds">
							<label>Office No</label>
							<input id="ofc" name="ofc" type="text" /> <p id="vofc"></p> 
						</div>
					</li>					
					<li class="fileds">
						<div class="email_fileds">
							<label>Email</label>
							<input id="email" name="email" type="text" /> <p id="vemail"></p> 
						</div>
						<div class="gender_fileds">
							<label>Gender</label>
							<ul>
								<li><input id="male"type="radio" name="gend" class="radio" value="m"name="radio" /><label class="radio-label" for="male">Male</label></li>
								<li><input id="female" type="radio" name="gend" class="radio" value="f" name="radio" /><label class="radio-label" for="female">Female</label></li>
							</ul>
                                                        <p id="vradio"></p> 
						</div>						

					</li>

					<li class="fileds">
						<div class="pass_fileds">
							<label>Password</label>
							<input id="pwd" name="pwd" type="text" /><p id="vpwd"></p>  
						</div>						
						<div class="pass_fileds">
							<label>Confirm Password</label>
							<input id="cpwd" name="cpwd" type="text" /><<p id="vcpwd"></p> 
						</div>

					</li>
					<li class="fileds">
						<div class="dob_fileds selectbox">
							<label>My birthdate is</label>

							<ul>
								<li>
									<select id="mon" name="mon" class="select month">
                                                                            <option value="select">Select</option>
										<option value="1">Jan</option>
										<option value="2">Feb</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">Aug</option>
										<option value="9">Sep</option>
										<option value="10">Oct</option>
										<option value="11">Nov</option>
										<option value="12">Dec</option>
									</select><p id="vmon"></p> 
								</li>
								<li>
									<select id="day" name="day" class="select day">
                                                                            <option value="select">Select</option>
										<option value="1">01</option>
										<option value="2">02</option>
										<option value="3">03</option>
										<option value="4">04</option>
										<option value="5">05</option>
										<option value="6">06</option>
										<option value="7">07</option>
										<option value="8">08</option>
										<option value="9">09</option>
										<option value="10">10</option>

										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>

										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select><p id="vday"></p> 
								</li>

								<li>
									<select id="year" name="year" class="select year">
										<option value="select">Select</option>
                                                                                        <option value="1980">1980</option>
                                                                                        <option value="1981">1981</option>
                                                                                        <option value="1982">1982</option>
                                                                                        <option value="1983">1983</option>
                                                                                        <option value="1984">1984</option>
                                                                                        <option value="1985">1985</option>
                                                                                        <option value="1986">1986</option>
                                                                                        <option value="1987">1987</option>
                                                                                        <option value="1988">1988</option>
                                                                                        <option value="1989">1989</option>
                                                                                        <option value="1990">1990</option>
                                                                                        <option value="1991">1991</option>
                                                                                        <option value="1992">1992</option>
                                                                                        <option value="1993">1993</option>
                                                                                        <option value="1994">1994</option>
                                                                                        <option value="1995">1995</option>
                                                                                        <option value="1996">1996</option>
                                                                                        <option value="1997">1997</option>
                                                                                        <option value="1998">1998</option>
                                                                                        <option value="1999">1999</option>
                                                                                        <option value="2000">2000</option>
                                                                                        <option value="2001">2001</option>
                                                                                        <option value="2002">2002</option>
                                                                                        <option value="2003">2003</option>
                                                                                        <option value="2004">2004</option>
                                                                                        <option value="2005">2005</option>
                                                                                        <option value="2006">2006</option>
									</select>
                                                                        <p id="vyear"></p> 
								</li>
							</ul>
						</div>						
						<div class="age_fileds">
							<label>Age</label>
							<input id="age"name="age" type="text" /> <p id="vage"></p> 
						</div>

					</li>
					<li>
						<div class="pincode_fileds">
							<label>Pincode</label>
							<input id="pin" name="pin" type="text" /> <p id="vpin"></p> 
						</div>

						<div class="about_you_fileds">
						<label>About you</label>
						<textarea  id="abt" name="abt"></textarea>
                                                <p id="vabt"></p> 
						</div>						
					</li>
				</ul>
				<div class="next_btn_block">
					<div class="next_btn">
                                                 
                                            <input type="submit" value="Next">Next<span><img src="images/small_triangle.png" alt="small_triangle"> </span></a>
                                                 <a href="" onclick="validation();return false">Validate<span><img src="images/small_triangle.png" alt="small_triangle"> </span></a>
                                        </div>
				</div>
			</div>
		</div>
                
            </form>
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