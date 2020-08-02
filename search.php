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
echo "               <a href=\"index.html\"><strong>BusBooking</strong></a>\n";
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
echo "     <div class=\"hero inner-page\" style=\"background-image: url('images/bus_1_a.jpg');\">\n";
echo "       \n";
echo "       <div class=\"container\">\n";
echo "         <div class=\"row align-items-end \">\n";
echo "           <div class=\"col-lg-5\">\n";
echo "              <div class=\"intro\">\n";
echo "               <h1><strong>Search</strong></h1>\n";
echo "               <div class=\"custom-breadcrumbs\"><a href=\"index.php\">Home</a> <span class=\"mx-2\">/</span> <strong>Search</strong></div>\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "    \n";
echo "    <div class=\"site-section bg-light\">\n";
echo "     <div class=\"container\">\n";
echo "       <div class=\"row\">\n";
echo "         <div class=\"col-lg-7\">\n";
echo "            \n";
echo "         </div>\n";
echo "       </div>\n";
?>
<div class="container">

        <div class="row">

<div class="col-md-8">

                <?php
$dbc = mysqli_connect('localhost', 'root', '', 'busbooking');

if (isset($_POST['submit']))
{
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];

    if ($source == "" || $destination == "")
    {
        echo "<h2>*Source And Destination Fields Are Mandatory To Fill</h2>";
    }
    else
    {

        //echo $date;
        $query = "SELECT * FROM busschedule WHERE bus_station LIKE '%$source%$destination%' AND book_date='$date'";

        $search_query = mysqli_query($dbc, $query);

        if (!$search_query)
        {
            die("Query Failed" . mysqli_error($dbc));
        }

        $count = mysqli_num_rows($search_query);
        if ($count == 0)
        {
            echo "<h1>NO RESULT</h1>";
        }
        else
        {

            while ($row = mysqli_fetch_assoc($search_query))
            {
                $book_title = $row['book_title'];
                $book_date = $row['book_date'];
                $book_image = $row['book_image'];
                $book_id = $row['book_id']
?>

                            <!-- First Blog Post -->
                            <h2>
                                <a href="buslisting.php?bus_id=<?php echo $book_id; ?>"><?php echo $book_title; ?></a>
                            </h2>
                            <p><span class="glyphicon glyphicon-time"></span> Bus on <?php echo $book_date; ?></p>
                            <hr>
                            <a href="buslisting.php.php?bus_id=<?php echo $book_id; ?>"><img class="img-responsive" src="images/<?php echo $book_image; ?>" alt=""></a>
                            <!-- <img class="img-responsive" src="images/<?php echo $book_image; ?>" alt=""> -->
                            <hr>
                            <a class="btn btn-primary" href="buslisting.php?bus_id=<?php echo $book_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                            <hr>
                        <?php
            }
        }
    }
} ?>


     

            </div>
			
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