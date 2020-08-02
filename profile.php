<!doctype html>
<html lang="en">
<style>
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}
</style>
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
<?php $dbc = mysqli_connect('localhost', 'root', '', 'busbooking');?>
<div class="container" style="width: 50%;">
                              
        <h2 style="margin-left: 40%;">Profile</h2>
        <br><br><br><br>
        <div class="tab">
            <button class="tablinks" style="width: 33%" onclick="openCity(event, 'Personel Details')">Personal Details</button>
            <button class="tablinks" style="width: 33%" onclick="openCity(event, 'Tickets Booked')">Tickets Booked</button>
            <button class="tablinks" style="width: 33%"  onclick="openCity(event, 'Edit Details')">Edit Details</button>
        </div>


        <div id="Personel Details" class="tabcontent">
          <h3>Details</h3>
           <!-- <?php echo $_SESSION['s_id'];?> -->
          <br>
          <?php
          $curr_user_id = $_SESSION['s_id'];
          
          $query = "SELECT * FROM users where id = $curr_user_id";

          $select_user = mysqli_query($dbc, $query);

          while ($row = mysqli_fetch_assoc($select_user)) {
            $Username = $row['Username'];
            $First_name = $row['First_name'];
            $Last_name = $row['Last_name'];
            $Email = $row['Email'];
            $Phone_no = $row['Phone_no'];
            ?>

            <table class="table table-striped" style="width: 50%">
              <tbody>
                <tr>
                  <td><b>Username:</b> </td>
                  <td><?php echo $Username; ?></td>
                </tr>
                <tr>
                  <td><b>FirstName:</b> </td>
                  <td><?php echo ucfirst($First_name); ?></td>
                </tr>
                <tr>
                  <td><b>Lastname: </b></td>
                  <td><?php echo ucfirst($Last_name); ?></td>
                </tr>
                <tr>
                  <td><b>Email: </b></td>
                  <td><?php echo $Email ; ?></td>
                </tr>
                <tr>
                  <td><b>Phone No: </b></td>
                  <td><?php echo $Phone_no; ?></td>
                </tr>
              </tbody>
            </table>

          <?php } ?>
        </div>
		
		

        <div id="Tickets Booked" class="tabcontent">
          <h3>Tickets Booked</h3>
          <br>

          <h3><b>Past Bookings:</b></h3>
          <?php

          $query = "SELECT * FROM orders INNER JOIN busschedule ON orders.bus_id = busschedule.book_id where orders.id = $curr_user_id";

          $select_user_orders = mysqli_query($dbc, $query);

          while ($row = mysqli_fetch_assoc($select_user_orders)) {
            $Username = $row['Username'];
            $user_age = $row['user_age'];
            $source = $row['source'];
            $destination = $row['destination'];
            $date = $row['date'];
            $order_id = $row['order_id'];
            $bus_id = $row['bus_id'];
            $booktime = $row['book_time'];

            
            if (date("Y-m-d") > $booktime) {
              
            
            ?>
            <br>
            <table class="table table-striped" style="width: 50%">
              <tbody>
                <tr>
                  <td><b>Passenger Name:</b> </td>
                  <td><?php echo $Username; ?></td>
                </tr>
                <tr>
                  <td><b>Passenger Age:</b> </td>
                  <td><?php echo $user_age; ?></td>
                </tr>
                <tr>
                  <td><b>Source: </b></td>
                  <td><?php echo ucfirst($source); ?></td>
                </tr>
                <tr>
                  <td><b>Destination: </b></td>
                  <td><?php echo ucfirst($destination); ?></td>
                </tr>
                <tr>
                  <td><b>Date Of Booking: </b></td>
                  <td><?php echo $date; ?></td> 
                <br><br><br>
              </tbody>
            </table>

          <?php } } ?>
		  
		  <br><br><br>

          
            
		  
		  </div>

        <div id="Edit Details" class="tabcontent">
          <h3>Edit Details</h3>
          <br>
          <?php
            

            $curr_user_id = $_SESSION['s_id'];
            $query = "SELECT * FROM users WHERE id = $curr_user_id ";
            $select_users = mysqli_query($dbc,$query);

            while($row = mysqli_fetch_assoc($select_users)) {
                $Username = $row['Username'];
				$Password = $row['Password'];
                $First_name = $row['First_name'];
                $Last_name = $row['Last_name'];
                $Email = $row['Email'];
                $Phone_no = $row['Phone_no'];
            }

            if (isset($_POST['update-user'])) {
                $Username = $_POST['Username'];
				$Password = $_POST['Password'];
                $First_name = $_POST['First_name'];
                $Last_name = $_POST['Last_name'];
                $Email = $_POST['Email'];
                $Phone_no = $_POST['Phone_no'];


              

              $query = "UPDATE users SET Username='{$Username}', Password='{$Password}', First_name='{$First_name}', Last_name='{$Last_name}', Phone_no='{$Phone_no}', Email='{$Email}' WHERE id=$curr_user_id";
              
              
              
              $update_bus = mysqli_query($dbc,$query);

              if (!$update_bus) {
                die("Query Failed" . mysqli_error($dbc));
              }
       
            }

            ?>
			
			<form action="" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label for="Username">Username</label>
                <input value="<?php echo $Username; ?>" type="text" class="form-control" name="Username">
              </div>

              <div class="form-group">
                <label for="First_name">Firstname</label>
                <input value="<?php echo $First_name; ?>" type="text" class="form-control" name="First_name">
              </div>

              <div class="form-group">
                <label for="Last_name">Lastname</label>
                <input value="<?php echo $Last_name; ?>" type="text" class="form-control" name="Last_name">
              </div>

              <div class="form-group">
                <label for="Email">Email</label>
                <input value="<?php echo $Email; ?>" type="email" class="form-control" name="Email">
              </div>

              <div class="form-group">
                <label for="Phone_No">PhoneNo</label>
                <input value="<?php echo $Phone_no; ?>" type="tel" pattern="[0-9]*" class="form-control" name="Phone_no" >
              </div>

              <div class="form-group">
                <label for="Password">Password</label>
                <input value="<?php echo $Password; ?>" id="myInput" type="password" class="form-control" name="Password">
              </div>

              <div class="form-group">
                <input type="checkbox" onclick="myFunction()">Show Password
              </div>

              

              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="update-user" value="Update">
              </div>
            </form>


        </div>

    </div>
        <hr>
		
		<script>

    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }


    function openCity(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    </script>