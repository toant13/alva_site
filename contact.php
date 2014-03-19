<!doctype html>
<html lang="en">
<head>
	<title>Alva | Contact Us</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	 <meta name="keywords" content="orange county machine shop, orange county 5 axis machining, 5 axis machine shop" />
    <meta name="description" content="ALVA Manufacturing is a critical component CNC manufacturer that specializes in 3, 4, and 5-Axis complex machining for the Aerospace, Medical and Automotive industries. Contact our Orange County machine shop located in Southern California." />
    <meta name="google-site-verification" content="OVzK9_ZwKI3vEsz2SZl05V4YR-E42Zk6JQFVmVBMYf0" />
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-1553442-14', 'alvamanufacturing.com');
      ga('send', 'pageview');
    
    </script>


	<link rel="stylesheet" href="css/foundation.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>


<style type="text/css">
<!--
body,td,th {font-family: Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 12px; 	color: #333;}
body {margin-left:0px;}
.maindiv{ width:690px; margin:0 auto;}
.textbox{ padding:2px 4px; width:200px !important;}
-->
</style>
</head>
<body>
	
	<div class="static-background">
		<img alt="" src="upload/bg-static.jpg">
	</div>
	<!-- Container -->
	<div class="container">
		<div class="row">
			<!-- Header -->
			<header class="three column">
				<div class="inner-header">
					<div id="logo">
						<div>
							<a href="index.html"><img alt="" src="images/logo.png"></a>
						</div>
					</div>
					<section class="menu">
						<nav>
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="aboutus.html">About Us</a></li>
                                
                                <li><a href="capabilities.html">Capabilities</a></li>
								<li><a href="samplework.html">Sample Work</a></li>
                                <li><a href="quality.html">Downloads & News</a></li>
								<li><a href="employment.html">Employment</a></li>
								<li><a href="contact.php">Contact</a></li>
                                
							</ul>
						</nav>
					</section>
					<section class="header-end"> 
						
						
					</section>
				</div>
                <div><center><img src="./images/alva-logo-small.png"></center></div>
			</header>
			<!-- End Header -->

			<!-- Content -->
			<div id="content" class="nine column">

				<div class="head-title">
					<h1>Contact</h1>
					<div class="head-description">
						<p>Contact us for a quick quote or more information regarding our services.</p>
					</div>
				</div>

				<!-- Inner Content -->
				<div class="inner-content">

					<div id="outer-map">
						<div id="map"></div>
					</div>

					<div id="contact" class="row">
						<div class="six column">
							<h1>Submit RFQ - Contact Us</h1>
							<div class="maindiv">
<div><?php
if ($_SERVER['REQUEST_METHOD']=="POST"){

   // Set the "To" email address
   $to="tam.nguyen@alvamfg.com,thuy.nguyen@alvamfg.com";

	//Subject of the mail
   $subject="ALVA Website";

   // Get the sender's name and email address plug them a variable to be used later
   $from = stripslashes($_POST['name'])."<".stripslashes($_POST['email']).">";
	
	// Check for empty fields
   if(empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['message']))
	{
		$errors .= "\n Error: all fields are required";
	}
	
	// Get all the values from input
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$fname = $_POST['fname'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$fax = $_POST['fax'];

	// Check the email address
	if (!eregi(	"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_address))
	{
		$errors .= "\n Error: Invalid email address";
	}

   // Now Generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   // Now Store the file information to a variables for easier access
   $tmp_name = $_FILES['filename']['tmp_name'];
   $type = $_FILES['filename']['type'];
   $file_name = $_FILES['filename']['name'];
   $size = $_FILES['filename']['size'];

   // Now here we setting up the message of the mail
   $message = "\n\n First_Name: $fname \n\n Email: $email_address \n\n Subject: $subject \n\nMessage: \n\n $message \n\n Company: $company \n\n Street_Address: $address\n\n Phone: $phone \n\n Fax: $fax \n\nAttachment: $file_name";

   // Check if the upload succeded, the file will exist
   if (file_exists($tmp_name)){

      // Check to make sure that it is an uploaded file and not a system file
      if(is_uploaded_file($tmp_name)){

         // Now Open the file for a binary read
         $file = fopen($tmp_name,'rb');

         // Now read the file content into a variable
         $data = fread($file,filesize($tmp_name));

         // close the file
         fclose($file);

         // Now we need to encode it and split it into acceptable length lines
         $data = chunk_split(base64_encode($data));
     }

      // Now we'll build the message headers
      $headers = "From: $from\r\n" .
         "MIME-Version: 1.0\r\n" .
         "Content-Type: multipart/mixed;\r\n" .
         " boundary=\"{$mime_boundary}\"";

      // Next, we'll build the message body note that we insert two dashes in front of the  MIME boundary when we use it
      $message = "This is a multi-part message in MIME format.\n\n" .
         "--{$mime_boundary}\n" .
         "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
         "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";

      // Now we'll insert a boundary to indicate we're starting the attachment we have to specify the content type, file name, and disposition as an attachment, then add the file content and set another boundary to indicate that the end of the file has been reached
      $message .= "--{$mime_boundary}\n" .
         "Content-Type: {$type};\n" .
         " name=\"{$file_name}\"\n" .
         //"Content-Disposition: attachment;\n" .
         //" filename=\"{$fileatt_name}\"\n" .
         "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n" .
         "--{$mime_boundary}--\n";

      // Thats all.. Now we need to send this mail... :)
      if (@mail($to, $subject, $message, $headers))
	  {
         ?>
         <div><center><h1>Mail Sent successfully !!</h1></center></div>
         <?php
	  }else
	  {
         ?>
         <div><center>
           <h1>Error !! Unable to send Mail..</h1></center></div>
         <?php
	  }
   }
}
?></div>
<div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" style="width: 500px">
<div>
  <p>Name:<label for="fname"></label><br>
<input id="fname" name="fname" type="text" />
  </p>
   
  <p>Email:<label for="email"></label><br>
<input id="email" name="email" type="text" />
  </p>
      <p>Company Name:<label for="company"></label><br>
<input id="company" name="company" type="text" />
  </p>
  <p>
  Attach Your File:
    <label for="tele"></label><br>
    <input id="tele" name="filename" type="file" />
  </p>
  <p>Subject:<label for="subject"></label><br>
<input id="subject" name="subject" type="text" />
  </p>
  <p>Message:
    <label for="message"><br></label>
    <textarea cols="71" rows="5" name="message"></textarea>
  </p>
  <p>Address:<label for="address"></label><br>
<input id="address" name="address" type="text" />
  </p>
 
  <p>Phone:<label for="phone"></label><br>
<input id="phone" name="phone" type="text" />
  </p>
  <p>Fax:<label for="fax"></label><br>
<input id="fax" name="fax" type="text" />
  </p>
</div>
<input class="formbtn" type="submit" value="Send Message" />
</form>
</div>
</div>

						</div>
						<!--hide
						<div class="six column">
							<h1>Contact info</h1>
                            <p><img src="./upload/aboutuspic-wide.jpg"></p>
							<p>Thank you for your interest in contacting us. Please fill out this form completely. Our customer service team will get back to you as soon as possible.</p>
							<!--HIDE
                            <div>
								<p><img alt="" src="images/contact1.png">admin@alvamfg.com</p>
								<p><img alt="" src="images/contact2.png">(714) 237-0925</p>
								<p><img alt="" src="images/contact3.png">http://www.alvamanufacturing.com</p>
							</div>
                            -->
                            <!--HIDE
						</div> -->
					</div>
				</div>
				<!-- End Inner Content -->

				<footer class="row">

					<div class="four column twitter-widget">
						<div class="back-title">
							<h2>Sample Work</h2>
						</div>
						<div class="flicker-images">
							<a href="samplework.html">
								<img alt="" src="upload/twit-widget1.jpg">
							</a>
							<a href="samplework.html">
								<img alt="" src="upload/twit-widget2.jpg">
							</a>
							<a href="samplework.html">
								<img alt="" src="upload/twit-widget3.jpg">
							</a>
							<a href="samplework.html">
								<img alt="" src="upload/twit-widget4.jpg">
							</a>
							<a href="samplework.html">
								<img alt="" src="upload/twit-widget5.jpg">
							</a>
							<a href="samplework.html">
								<img alt="" src="upload/twit-widget6.jpg">
							</a>
					
							
						</div>
					</div>

					<div class="four column twiter">
						<div class="back-title">
							<h2>SHOP HOURS</h2>
						</div>
						<div>
								<p><img alt="" src="images/serv-icon1.png">
								Monday - Friday <br>
								<span>7:00AM - 11:30PM </span>
							</p>
						</div>
						<div>
								<p><img alt="" src="images/serv-icon1.png">
								Saturday & Sunday <br>
								<span>8:00AM - 4:30PM </span>
							</p>
						</div>
                        <br>
                        <br>
						<div>
								<p><img alt="" src="images/serv-icon4.png">
								Contact us for a quick quote or more information regarding our services. We work with a wide variety of materials and our products exceed the industry standards such as MIL, RoHS and ANSI
							</p>
						</div>

					</div>

					<div class="four column contact-info">
						<div class="back-title">
							<h2>Contact info</h2>
						</div>
						<p><img alt="" src="images/phone.png"><span>(714) 237-0925</span></p>
						<p><img alt="" src="images/mail.png"><span><a href="mailto:admin@alvamfg.com">admin@alvamfg.com</a></span></p>
						<p><img alt="" src="images/print.png"><span>(714) 616-5427</span></p>
						<p><img alt="" src="images/addres.png"><span>2907 East La Palma Ave. <br>
						Anaheim, CA 92806 USA</span></p>
					</div>

					<article class="end-footer twelve column">
						<p>© Copyright 2013-14 Alva Manufacturing</p>
					</article>

				</footer>

			</div>
			<!-- End content -->
		</div>
	</div>
	<!-- End Container -->

</body>
</html>