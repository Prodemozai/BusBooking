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
echo "               <a href=\"index.html\"><strong>BusBooking</strong></a>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "            <div class=\"col-9  text-right\">\n";
echo "             \n";
echo "             <span class=\"d-inline-block d-lg-none\"><a href=\"#\" class=\" site-menu-toggle js-menu-toggle py-5 \"><span class=\"icon-menu h3 text-black\"></span></a></span>\n";
echo "              <nav class=\"site-navigation text-right ml-auto d-none d-lg-block\" role=\"navigation\">\n";
echo "               <ul class=\"site-menu main-menu js-clone-nav ml-auto \">\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"index.php\" class=\"nav-link\">Home</a></li>\n";
echo "                 <li style=\"font-weight: bold;\" class=\"active\"><a href=\"listing.php\" class=\"nav-link\">Bus Listing</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"signup.php\" class=\"nav-link\">Sign Up</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"customerfeedback.php\" class=\"nav-link\">Customer Feedback</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"contact.php\" class=\"nav-link\">Contact</a></li>\n";
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
echo "     <div class=\"hero inner-page\" style=\"background-image: url('images/bus_background1.jpg');\">\n";
echo "       \n";
echo "       <div class=\"container\">\n";
echo "         <div class=\"row align-items-end \">\n";
echo "           <div class=\"col-lg-5\">\n";
echo "              <div class=\"intro\">\n";
echo "               <h1><strong>Listings</strong></h1>\n";
echo "               <div class=\"custom-breadcrumbs\"><a href=\"index.html\"><strong>Home</strong></a> <span class=\"mx-2\">/</span> <strong>Listings</strong></div>\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo " \n";
echo "\n";
echo "      \n";
echo "    <div class=\"site-section bg-light\">\n";
echo "     <div class=\"container\">\n";
echo "       <div class=\"row\">\n";
echo "         <div class=\"col-lg-7\">\n";
echo "           <h2 class=\"section-heading\"><strong>Bus Listings</strong></h2>\n";
echo "  <p class=\"mb-5\">Browse through the bus schedule, check tickets availability and ticket price \n";
echo "with our mobile apps and our mobile-friendly website.</p>    \n";
echo "         </div>\n";
echo "       </div>\n";                
echo "       \n";
echo "        <div class=\"row\">\n";
echo "         <div class=\"col-md-6 col-lg-4 mb-4\">\n";
echo "            <div class=\"listing d-block  align-items-stretch\">\n";
echo "             <div class=\"listing-img h-100 mr-4\">\n";
echo "               <img src=\"images/bus_1.jpg\" style=\"width:300px;height:150px;\" alt=\"Image\" class=\"img-fluid\">\n";
echo "             </div>\n";
echo "             <div class=\"listing-contents h-100\">\n";
echo "               <h3>Single-decker bus</h3>\n";
echo "               <div class=\"rent-price\">\n";
echo "                 <strong>RM30</strong><span class=\"mx-1\">/</span>destination\n";
echo "               </div>\n";
echo "               <div class=\"d-block d-md-flex mb-3 border-bottom pb-3\">\n";
echo "                 \n";
echo "			  <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">starting time:</span>\n";
echo "                   <span class=\"number\">12:00pm</span>\n";
echo "                 </div>     \n";
echo "                 <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">Passenger:</span>\n";
echo "                   <span class=\"number\">30</span>				\n";
echo "                 </div>\n";
echo "			 \n";
echo "               </div>\n";
echo "			<div>Destination:<strong> Johor -- Selangor</strong></div>\n";
echo "			</br>\n";
echo "			<p><font size=\"3\" color=\"black\">340.8km</font></p>\n";
echo "          <p><font size=\"3\" color=\"black\">Date: 3-8-2020</font></p>		\n";
echo "		\n";
echo "               <div>\n";
echo "                 <p><a href=\"buslisting.php?bus_id=1\" class=\"btn btn-primary btn-sm\">Book Now</a></p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "          <div class=\"col-md-6 col-lg-4 mb-4\">\n";
echo "            <div class=\"listing d-block  align-items-stretch\">\n";
echo "             <div class=\"listing-img h-100 mr-4\">\n";
echo "               <img src=\"images/bus_2.jpg\" style=\"width:300px;height:150px;\" alt=\"Image\" class=\"img-fluid\">\n";
echo "             </div>\n";
echo "            <div class=\"listing-contents h-100\">\n";
echo "               <h3>Double-decker bus</h3>\n";
echo "               <div class=\"rent-price\">\n";
echo "                 <strong>RM25</strong><span class=\"mx-1\">/</span>destination\n";
echo "               </div>\n";
echo "               <div class=\"d-block d-md-flex mb-3 border-bottom pb-3\">\n";
echo "                 \n";
echo "			  <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">starting time:</span>\n";
echo "                   <span class=\"number\">1:00pm</span>\n";
echo "                 </div>     \n";
echo "                 <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">Passenger:</span>\n";
echo "                   <span class=\"number\">20</span>				\n";
echo "                 </div>\n";
echo "			 \n";
echo "               </div>\n";
echo "			<div>Destination:<strong> Kuala Lumpur -- Selangor</strong></div>\n";
echo "			</br>\n";
echo "			<p><font size=\"3\" color=\"black\">25.2km</font></p>		\n";
echo "          <p><font size=\"3\" color=\"black\">Date: 2-8-2020</font></p>		\n";
echo "               <div>\n";
echo "                 <p><a href=\"buslisting.php?bus_id=2\" class=\"btn btn-primary btn-sm\">Book Now</a></p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "         </div>\n";
echo "   \n";
echo "         <div class=\"col-md-6 col-lg-4 mb-4\">\n";
echo "            <div class=\"listing d-block  align-items-stretch\">\n";
echo "             <div class=\"listing-img h-100 mr-4\">\n";
echo "               <img src=\"images/bus_3.jpg\" style=\"width:300px;height:150px;\" alt=\"Image\" class=\"img-fluid\">\n";
echo "             </div>\n";
echo "            <div class=\"listing-contents h-100\">\n";
echo "               <h3>Single-decker bus</h3>\n";
echo "               <div class=\"rent-price\">\n";
echo "                 <strong>RM110</strong><span class=\"mx-1\">/</span>destination\n";
echo "               </div>\n";
echo "               <div class=\"d-block d-md-flex mb-3 border-bottom pb-3\">\n";
echo "                 \n";
echo "			  <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">starting time:</span>\n";
echo "                   <span class=\"number\">1:00pm</span>\n";
echo "                 </div>     \n";
echo "                 <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">Passenger:</span>\n";
echo "                   <span class=\"number\">25</span>				\n";
echo "                 </div>\n";
echo "			 \n";
echo "               </div>\n";
echo "			<div>Destination:<strong> Johor -- Pulau Pinang</strong></div>\n";
echo "			</br>\n";
echo "			<p><font size=\"3\" color=\"black\">690.1km</font></p>		\n";
echo "          <p><font size=\"3\" color=\"black\">Date: 5-8-2020</font></p>		\n";
echo "               <div>\n";
echo "                 <p><a href=\"buslisting.php?bus_id=3\" class=\"btn btn-primary btn-sm\">Book Now</a></p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "          <div class=\"col-md-6 col-lg-4 mb-4\">\n";
echo "            <div class=\"listing d-block  align-items-stretch\">\n";
echo "             <div class=\"listing-img h-100 mr-4\">\n";
echo "               <img src=\"images/bus_4.jpg\" style=\"width:300px;height:150px;\" alt=\"Image\" class=\"img-fluid\">\n";
echo "             </div>\n";
echo "            <div class=\"listing-contents h-100\">\n";
echo "               <h3>Single-decker bus</h3>\n";
echo "               <div class=\"rent-price\">\n";
echo "                 <strong>RM40</strong><span class=\"mx-1\">/</span>destination\n";
echo "               </div>\n";
echo "               <div class=\"d-block d-md-flex mb-3 border-bottom pb-3\">\n";
echo "                 \n";
echo "			  <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">starting time:</span>\n";
echo "                   <span class=\"number\">10:00am</span>\n";
echo "                 </div>     \n";
echo "                 <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">Passenger:</span>\n";
echo "                   <span class=\"number\">30</span>				\n";
echo "                 </div>\n";
echo "			 \n";
echo "               </div>\n";
echo "			<div>Destination:<strong> Negeri Sembilan -- Perak</strong></div>\n";
echo "			</br>\n";
echo "			<p><font size=\"3\" color=\"black\">270.4km</font></p>		\n";
echo "          <p><font size=\"3\" color=\"black\">Date: 8-8-2020</font></p>		\n";
echo "               <div>\n";
echo "                 <p><a href=\"buslisting.php?bus_id=4\" class=\"btn btn-primary btn-sm\">Book Now</a></p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "          <div class=\"col-md-6 col-lg-4 mb-4\">\n";
echo "            <div class=\"listing d-block  align-items-stretch\">\n";
echo "             <div class=\"listing-img h-100 mr-4\">\n";
echo "               <img src=\"images/bus_5.jpg\" style=\"width:300px;height:150px;\" alt=\"Image\" class=\"img-fluid\">\n";
echo "             </div>\n";
echo "            <div class=\"listing-contents h-100\">\n";
echo "               <h3>Single-decker bus</h3>\n";
echo "               <div class=\"rent-price\">\n";
echo "                 <strong>RM20</strong><span class=\"mx-1\">/</span>destination\n";
echo "               </div>\n";
echo "               <div class=\"d-block d-md-flex mb-3 border-bottom pb-3\">\n";
echo "                 \n";
echo "			  <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">starting time:</span>\n";
echo "                   <span class=\"number\">2:00pm</span>\n";
echo "                 </div>     \n";
echo "                 <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">Passenger:</span>\n";
echo "                   <span class=\"number\">40</span>				\n";
echo "                 </div>\n";
echo "			 \n";
echo "               </div>\n";
echo "			<div>Destination:<strong> Pulau Pinang -- Kedah</strong></div>\n";
echo "			</br>\n";
echo "			<p><font size=\"3\" color=\"black\">113.7km</font></p>		\n";
echo "          <p><font size=\"3\" color=\"black\">Date: 12-8-2020</font></p>		\n";
echo "               <div>\n";
echo "                 <p><a href=\"buslisting.php?bus_id=5\" class=\"btn btn-primary btn-sm\">Book Now</a></p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "         \n";
echo "          <div class=\"col-md-6 col-lg-4 mb-4\">\n";
echo "            <div class=\"listing d-block  align-items-stretch\">\n";
echo "             <div class=\"listing-img h-100 mr-4\">\n";
echo "               <img src=\"images/bus_6.jpg\" style=\"width:300px;height:150px;\" alt=\"Image\" class=\"img-fluid\">\n";
echo "             </div>\n";
echo "            <div class=\"listing-contents h-100\">\n";
echo "               <h3>Single-decker bus</h3>\n";
echo "               <div class=\"rent-price\">\n";
echo "                 <strong>RM50</strong><span class=\"mx-1\">/</span>destination\n";
echo "               </div>\n";
echo "               <div class=\"d-block d-md-flex mb-3 border-bottom pb-3\">\n";
echo "                 \n";
echo "			  <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">starting time:</span>\n";
echo "                   <span class=\"number\">8:00am</span>\n";
echo "                 </div>     \n";
echo "                 <div class=\"listing-feature pr-4\">\n";
echo "                   <span class=\"caption\">Passenger:</span>\n";
echo "                   <span class=\"number\">20</span>				\n";
echo "                 </div>\n";
echo "			 \n";
echo "               </div>\n";
echo "			<div>Destination:<strong> Negeri sembilan -- Johor</strong></div>\n";
echo "			</br>\n";
echo "			<p><font size=\"3\" color=\"black\">270.4km</font></p>		\n";
echo "          <p><font size=\"3\" color=\"black\">Date: 12-8-2020</font></p>		\n";
echo "               <div>\n";
echo "                 <p><a href=\"buslisting.php?bus_id=6\" class=\"btn btn-primary btn-sm\">Book Now</a></p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "        </div>\n";
echo "      \n";
echo "     </div>\n";
echo "   </div>\n";
echo "    \n";
echo "    <div class=\"site-section bg-primary py-5\">\n";
echo "     <div class=\"container\">\n";
echo "       <div class=\"row align-items-center\">\n";
echo "         <div class=\"col-lg-7 mb-4 mb-md-0\">\n";
echo "           <h2 class=\"mb-0 text-white\">What are you waiting for?</h2>\n";
echo "           <p class=\"mb-0 opa-7\">BusBooking offers the largest selection of bus tickets online booking at the best prices in Malaysia. 
                                          With over 10,000 bus departures per day across the states of Malaysia.We are proud to offer a vast selection 
										  of online bus tickets and bus service booking options, taking you to all of your favourite destinations.</p>\n";
echo "         </div>\n";
echo "         <div class=\"col-lg-5 text-md-right\">\n";
echo "           <a href=\"listing.php\" class=\"btn btn-primary btn-white\">Book a bus now</a>\n";
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

