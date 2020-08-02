<!doctype html>
<html lang="en">

  <head>
    <title>BusBooking</title>
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
echo "               <a href=\"index.html\"><strong>CarRental</strong></a>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "            <div class=\"col-9  text-right\">\n";
echo "             \n";
echo "             <span class=\"d-inline-block d-lg-none\"><a href=\"#\" class=\" site-menu-toggle js-menu-toggle py-5 \"><span class=\"icon-menu h3 text-black\"></span></a></span>\n";
echo "              <nav class=\"site-navigation text-right ml-auto d-none d-lg-block\" role=\"navigation\">\n";
echo "               <ul class=\"site-menu main-menu js-clone-nav ml-auto \">\n";
echo "                 <li style=\"font-weight: bold;\" class=\"active\"><a href=\"index.php\" class=\"nav-link\">Home</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"listing.php\" class=\"nav-link\">Bus Listing</a></li>\n";
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
echo "     <div class=\"hero\" style=\"background-image: url('images/bus.jpg');\">\n";
echo "       \n";
echo "       <div class=\"container\">\n";
echo "         <div class=\"row align-items-center justify-content-center\">\n";
echo "           <div class=\"col-lg-10\">\n";
echo "              <div class=\"row mb-5\">\n";
echo "               <div class=\"col-lg-7 intro\">\n";
echo "                 <h1><strong>Book a Bus</strong> with just a few steps.</h1>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "             \n";
echo "             <form action=\"search.php\" class=\"trip-form\"  method=\"post\">\n";
echo "               \n";
echo "               <div class=\"row align-items-center\">\n";
echo "                 \n";
echo "                 <div class=\"mb-3 mb-md-0 col-md-3\">\n";
echo "                   <input type=\"text\" id=\"source\" name=\"source\" value=\"Source\" placeholder=\"source\"/>\n";
echo "                 </div>\n";
echo "			  <div class=\"mb-3 mb-md-0 col-md-3\">\n";
echo "                   <input type=\"text\" id=\"destination\" name=\"destination\" value=\"Destination\" placeholder=\"destination\"/>\n";
echo "                 </div>\n";
echo "                 <div class=\"mb-3 mb-md-0 col-md-3\">\n";
echo "                   <div class=\"form-control-wrap\">\n";
echo "                   <input type=\"date\" style=\"margin-top: 10px;\" min=date('Y-m-d'); max=date('Y-m-d', strtotime(date('Y-m-d'). ' + 29 days')); name=\"date\" class=\"form-control\" id=\"date\" placeholder=\"dd/mm/yyyy\"/>";
echo "\n";
echo "                     <span class=\"icon icon-date_range\"></span>\n";
echo "                    </div>\n";
echo "                 </div>\n";
echo "               \n";
echo "			  </br></br>\n";
echo "                 <div class=\"mb-3 mb-md-0 col-md-3\">\n";
echo "                   <input type=\"submit\" name=\"submit\" value=\"Search Now\" class=\"btn btn-primary btn-block py-3\">\n";
echo "                 </div>\n";
echo "               </div>\n";
echo "               \n";
echo "             </form>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo " \n";
echo "\n";
echo "     <div class=\"site-section\">\n";
echo "       <div class=\"container\">\n";
echo "         <h2 class=\"section-heading\"><strong>How it works?</strong></h2>\n";
echo "         <p class=\"mb-5\">Easy steps to get you started</p>    \n";
echo "          <div class=\"row mb-5\">\n";
echo "           <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "             <div class=\"step\">\n";
echo "               <span>1</span>\n";
echo "               <div class=\"step-inner\">\n";
echo "                 <span class=\"number text-primary\">01.</span>\n";
echo "                 <h3>Select The Type of Bus</h3>\n";
echo "                 <p>You can choose from \"Coach,Double-decker,Single-decker\".</p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "           <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "             <div class=\"step\">\n";
echo "               <span>2</span>\n";
echo "               <div class=\"step-inner\">\n";
echo "                 <span class=\"number text-primary\">02.</span>\n";
echo "                 <h3>Fill up form</h3>\n";
echo "                 <p>Choose your destination and your date.</p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "           <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "             <div class=\"step\">\n";
echo "               <span>3</span>\n";
echo "               <div class=\"step-inner\">\n";
echo "                 <span class=\"number text-primary\">03.</span>\n";
echo "                 <h3>Payment</h3>\n";
echo "                 <p>Make your payment and you can be on your way.</p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "     \n";
echo " \n";
echo "    <div class=\"site-section bg-light\">\n";
echo "     <div class=\"container\">\n";
echo "       <div class=\"row\">\n";
echo "         <div class=\"col-lg-7\">\n";
echo "           <h2 class=\"section-heading\"><strong>Customer Feedback</strong></h2> \n";
echo "         </div>\n";
echo "       </div>\n";
echo "       <div class=\"row\">\n";
echo "         <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "           <div class=\"customer-feedback\">\n";
echo "             <blockquote class=\"mb-4\">\n";
echo "               <p>\"The Coach Bus is the best bus I have ever seated. Time flies when im on the bus.\"</p>\n";
echo "             </blockquote>\n";
echo "             <div class=\"d-flex v-card align-items-center\">\n";
echo "               <img src=\"images/person_1.jpg\" alt=\"Image\" class=\"img-fluid mr-3\">\n";
echo "               <div class=\"author-name\">\n";
echo "                 <span class=\"d-block\">Mike Fisher</span>\n";
echo "                 <span>Passenger</span>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "         </div>\n";
echo "         <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "           <div class=\"customer-feedback\">\n";
echo "             <blockquote class=\"mb-4\">\n";
echo "               <p>\"The double-decker bus gives me a new height to see the road. Its fun and interesting\"</p>\n";
echo "             </blockquote>\n";
echo "             <div class=\"d-flex v-card align-items-center\">\n";
echo "               <img src=\"images/person_2.jpg\" alt=\"Image\" class=\"img-fluid mr-3\">\n";
echo "               <div class=\"author-name\">\n";
echo "                 <span class=\"d-block\">Gwen Stacey</span>\n";
echo "                 <span>Traveler</span>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "         </div>\n";
echo "         <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "           <div class=\"customer-feedback\">\n";
echo "             <blockquote class=\"mb-4\">\n";
echo "               <p>\"Single-decker bus is comfortable enough for me for the price that i have to pay.Recommended!!!\"</p>\n";
echo "             </blockquote>\n";
echo "             <div class=\"d-flex v-card align-items-center\">\n";
echo "               <img src=\"images/person_3.jpg\" alt=\"Image\" class=\"img-fluid mr-3\">\n";
echo "               <div class=\"author-name\">\n";
echo "                 <span class=\"d-block\">Marg Helgenberger</span>\n";
echo "                 <span >Passenger</span>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "   </div>\n";
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
echo "      \n";
echo "     \n";
echo "    </div>\n";
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

