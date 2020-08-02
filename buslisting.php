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
echo "       </div>\n";
echo "     </div>\n";
?>
<?php
$dbc = mysqli_connect('localhost', 'root', '', 'busbooking');
if (isset($_GET['bus_id']))
{
    $selected_bus = $_GET['bus_id'];
}

$query = "SELECT *  FROM  busschedule WHERE book_id = $selected_bus ";

$select_all_bus_query = mysqli_query($dbc, $query);

while ($row = mysqli_fetch_assoc($select_all_bus_query))
{
    $book_id = $row['book_id'];
    $book_title = $row['book_title'];
    $book_date = $row['book_date'];
    $book_image = $row['book_image'];
    $book_time = $row['book_time'];
    $available_seats = $row['available_seats'];
    $max_seats = $row['max_seats'];
    $bus_station = $row['bus_station'];
    $bus_station_time = $row['bus_station_time'];
    $bus_stations = explode(" ", $bus_station);
    $bus_times = explode(" ", $bus_station_time);

?>
					  
					    <h2>
                        <a href="buslisting.php?bus_id=<?php echo $book_id; ?>"><?php echo $book_title; ?></a>
                        </h2>
                        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $book_date; ?></p>
                        <hr>
                        <img class="img-responsive" src="images/<?php echo $book_image; ?>" alt="">

                        <hr>
                        
                        <div class="jumbotron jumb">
                            <h2><b>Seat Matrix:</b></h2>
                            <h5>Max:         <?php echo $max_seats ?></h5>
                            <h5>Available:   <?php echo $available_seats ?></h5>
							
							<h2><b>Stations Covered:</b></h2>
                            <table class="table table-striped" style="width: 100%; margin-top:-20px;">
                              <thead>
                                  <th><u>Station</u></th>
                                  <th><u>Time</u> </th>
                              </thead>
                              <tbody>
                                <?php
    for ($i = 0;$i < sizeof($bus_stations);$i++)
    { ?>
                                        <tr>
                                          <td><?php echo $bus_stations[$i]; ?></td>
                                          <td><?php echo $bus_times[$i]; ?></td>
                                        </tr> <?php
    }

?>
                                <br>
                              </tbody>
                            </table>
				        </div>
						
						
						<?php
    if (isset($_SESSION['s_id']))
    {
        # code...
        
?>
						
						<div class="jumbotron">
                            <div class="container-fluid">
                                <h2>Enter Details:</h2>

                                <form action="" method="post" class="form-horizontal">

                                    <select name="passenger_count" style="margin-bottom: 15px;margin-top: 15px;">
                                        <option value="0">Ticket Count</option>
                                        <?php
        for ($i = 1;$i <= $available_seats;$i++)
        { ?>
                                                <option value="<?php echo $i ?>"><?php echo $i ?></option> <?php
        }

?>
                                    </select>
                                    <button class="btn-xs btn-primary" style="margin-left: 5px;">GO</button>

                                </form>
								
								<form action="buslisting.php?bus_id=<?php echo $selected_bus ?>&count=<?php echo $_POST['passenger_count'] ?>" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Source:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="email" placeholder="Source" name="source">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Destination:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="email" placeholder="Destination" name="destination">
                                        </div>
                                    </div>

                                <?php
        if (isset($_POST['passenger_count']))
        {
            $count = $_POST['passenger_count'];
            //echo "<h1>$count</h1>";
            for ($i = 0;$i < $count;$i++)
            {

?>
                                        <h6><?php echo "Passenger ";
                echo $i + 1; ?></h6>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="email">Name:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="email" placeholder="Name" name="name<?php echo "$i" ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="email">Age:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="email" placeholder="Age" name="age<?php echo "$i" ?>">
                                            </div>
                                        </div>
                                        <?php
            }

        }

?>
								
								<button class="btn btn-primary" name="book" style="margin-left: 40%; margin-top: 15px;">Book Tickets</button>

                                </form>

                                <?php
        if (isset($_POST['book']))
        {
   
            if (isset($_GET['count']))
            {
                $count = $_GET['count'];
            }
            $source = $_POST['source'];
            $destination = $_POST['destination'];
            $cost = 0;

            

            $arr = array();
            $arr1 = array();
            for ($i = 0;$i < $count;$i++)
            {
  
                $name_query = 'name' . $i;
                $age_query = 'age' . $i;
                array_push($arr, $_POST[$name_query]);
                array_push($arr1, $_POST[$age_query]);
            }
            for ($i = 0;$i < $count;$i++)
            {

                $curr_name = $arr[$i];
                $curr_age = $arr1[$i];
                $user_id = $_SESSION['s_id'];

                $query = "INSERT INTO orders(bus_id, id, Username, user_age, source, destination, date) VALUES($selected_bus, $user_id , '$curr_name', '$curr_age', '$source', '$destination', now())";

                $query_seat_update = "UPDATE busschedule SET available_seats = $available_seats - $count WHERE book_id = $book_id";

    
                $update_seats_available = mysqli_query($dbc, $query_seat_update);
                $booking_query = mysqli_query($dbc, $query);
                if (!$booking_query)
                {
                    die("Query Failed" . mysqli_error($dbc));
                }
            }
            
        }

?>
                            </div>
							</div>
                        <?php
    } ?>

                        <hr>
						<?php
} ?>


					
					
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
                      