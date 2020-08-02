<!doctype html>
<html lang="en">

  <head>
    <title>Bus Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    
<?php
session_start();
echo "<div class=\"site-wrap\" id=\"home-section\">\n";
echo "      <div class=\"site-mobile-menu site-navbar-target\">\n";
echo "       <div class=\"site-mobile-menu-header\">\n";
echo "         <div class=\"site-mobile-menu-close mt-3\">\n";
echo "           <span class=\"icon-close2 js-menu-toggle\"></span>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "       <div class=\"site-mobile-menu-body\"></div>\n";
echo "     </div>\n";
echo "\n";
echo "      <header class=\"site-navbar site-navbar-target\" role=\"banner\">\n";
echo "        <div class=\"container\">\n";
echo "         <div class=\"row align-items-center position-relative\">\n";
echo "            <div class=\"col-3\">\n";
echo "             <div class=\"site-logo\">\n";
echo "               <a href=\"index.php\"><strong>Bus Booking</strong></a>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "            <div class=\"col-9  text-right\">\n";
echo "             \n";
echo "             <span class=\"d-inline-block d-lg-none\"><a href=\"#\" class=\" site-menu-toggle js-menu-toggle py-5 \"><span class=\"icon-menu h3 text-black\"></span></a></span>\n";
echo "              <nav class=\"site-navigation text-right ml-auto d-none d-lg-block\" role=\"navigation\">\n";
echo "               <ul class=\"site-menu main-menu js-clone-nav ml-auto \">\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"index.php\" class=\"nav-link\">Home</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"listing.php\" class=\"nav-link\">Bus Listing</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"signup.php\" class=\"nav-link\">Sign Up</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"customerfeedback.php\" class=\"nav-link\">Customer Feedback</a></li>\n";
echo "                 <li style=\"font-weight: bold;\" class=\"active\"><a href=\"contact.php\" class=\"nav-link\">Contact</a></li>\n";
if (!isset($_SESSION['s_username'])) {
echo "                  <form action=\"signin.php\" method=\"post\">";
echo "                  <input type=\"text\" placeholder=\"Username\" name=\"username\">";
echo "                  <input type=\"password\" placeholder=\"Password\" name=\"password\">";
echo "                  <button type=\"submit\" name=\"login\">Login</button>";
echo "                </form>";
}
echo "               </ul>\n";
if(isset($_SESSION['s_username'])){
echo "                 <li class=\"dropdown\">\n";
echo "                 <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> \n";
                        if(isset($_SESSION['s_username'])){
                          echo ucfirst($_SESSION['s_username']);
echo "						<b class=\"caret\"></b></a>\n";
echo "                      <ul class=\"dropdown-menu\">\n";
echo "                       <li>\n";
echo "                           <a href=\"profile.php\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>\n";
echo "                        </li>\n";
echo "                           <li class=\"divider\"></li>\n";
echo "                           <li>\n";
echo "                             <a href=\"logout.php\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>\n";
echo "                           </li>\n";
echo "                               </ul>\n";
echo "                           </li>\n";
}
}
echo "             </nav>\n";
echo "           </div>\n";
echo "            \n";
echo "         </div>\n";
echo "       </div>\n";
echo "      </header>\n";
echo "      \n";
echo "     <div class=\"hero inner-page\" style=\"background-image: url('images/bus_1_a.jpg');\">\n";
echo "       \n";
echo "       <div class=\"container\">\n";
echo "         <div class=\"row align-items-end \">\n";
echo "           <div class=\"col-lg-5\">\n";
echo "              <div class=\"intro\">\n";
echo "               <h1><strong>About</strong></h1>\n";
echo "               <div class=\"custom-breadcrumbs\"><a href=\"index.html\">Home</a> <span class=\"mx-2\">/</span> <strong>About</strong></div>\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "    \n";
echo "    <div class=\"site-section bg-light\" id=\"contact-section\">\n";
echo "     <div class=\"container\">\n";
echo "       <div class=\"row justify-content-center text-center\">\n";
echo "       <div class=\"col-7 text-center mb-5\">\n";
echo "         <h2>Contact Us Or Use This Form To Ask More Question</h2>\n";
echo "       </div>\n";
echo "     </div>\n";
if(isset($_POST['submitted'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phone'];
	$message = $_POST['message'];
	$phonelength = preg_match('/^[0-9]{10}+$/', $phonenumber);
	
	if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message'])){
		echo "<p align='middle'> Please fill in all the field.</p>";
	}else if((!ctype_alpha($fname)) || (!ctype_alpha($lname))){
		echo"<p align='middle'>Please make sure your name contain only alphabet.</p>";
	}else if(!is_numeric($phonenumber)){
		echo"<p align='middle'>Please make sure your phone number contain only number.</p>";
	}else if(!$phonelength){
		echo"<p align='middle'>Please make sure your phone number have correct length of digits.</p>";
	}else if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message']) && ctype_alpha($fname) && ctype_alpha($lname) && is_numeric($phonenumber) && 
	$phonelength) {
		echo"<p align='middle'>We will contact you soon.</p>";
	}
}else{
echo "       <div class=\"row\">\n";
echo "         <div class=\"col-lg-8 mb-5\" >\n";
echo "           <form action=\"contact.php\" method=\"post\">\n";
echo "             <div class=\"form-group row\">\n";
echo "               <div class=\"col-md-6 mb-4 mb-lg-0\">\n";
echo "                 <input type=\"text\" name=\"fname\" class=\"form-control\" placeholder=\"First name\">\n";
echo "               </div>\n";
echo "               <div class=\"col-md-6\">\n";
echo "                 <input type=\"text\" name=\"lname\" class=\"form-control\" placeholder=\"Last name\">\n";
echo "               </div>\n";
echo "             </div>\n";
echo "              <div class=\"form-group row\">\n";
echo "               <div class=\"col-md-12\">\n";
echo "                 <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Email address\">\n";
echo "               </div>\n";
echo "             </div>\n";
echo "		  \n";
echo "		  <div class=\"form-group row\">\n";
echo "               <div class=\"col-md-12\">\n";
echo "                 <input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Phone number\">\n";
echo "               </div>\n";
echo "             </div>\n";
echo "		  \n";
echo "		  \n";
echo "              <div class=\"form-group row\">\n";
echo "               <div class=\"col-md-12\">\n";
echo "                 <textarea name=\"message\" id=\"\" class=\"form-control\" placeholder=\"Write your message.\" cols=\"30\" rows=\"10\"></textarea>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "             <div class=\"form-group row\">\n";
echo "               <div class=\"col-md-6 mr-auto\">\n";
echo "                 <input type=\"submit\" class=\"btn btn-block btn-primary text-white py-3 px-5\" value=\"Send Message\">\n";
echo "                 <input type ='hidden' name ='submitted' value ='true'/>";
echo "               </div>\n";
echo "             </div>\n";
echo "           </form>\n";
echo "         </div>\n";
}
echo "         <div class=\"col-lg-4 ml-auto\">\n";
echo "           <div class=\"bg-white p-3 p-md-5\">\n";
echo "             <h3 class=\"text-black mb-4\">Contact Info</h3>\n";
echo "             <ul class=\"list-unstyled footer-link\">\n";
echo "               <li class=\"d-block mb-3\">\n";
echo "                 <span class=\"d-block text-black\">Address:</span>\n";
echo "                 <span>VO3-11-19, Designer Office (VO3), Lingkaran SV, Sunway Velocity, 55100 Kuala Lumpur.</span></li>\n";
echo "               <li class=\"d-block mb-3\"><span class=\"d-block text-black\">Phone:</span><span>+ 603 2027 4626</span></li>\n";
echo "               <li class=\"d-block mb-3\"><span class=\"d-block text-black\">Email:</span><span>busbooking@busbookingonline.com</span></li>\n";
echo "             </ul>\n";
echo "           </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "   </div>\n";
?>


      


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

