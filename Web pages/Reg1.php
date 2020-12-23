<?php
	session_start();
	if(isset($_SESSION['registration_success']))
	{
		echo '<script type="text/javascript">window.onload = function(){alert("Registration successful!");}</script>';
		unset($_SESSION['registration_success']);
	}
	if(isset($_SESSION['registration_error']))
	{	
		echo '<script type="text/javascript">window.onload = function(){alert("Please enter valid details");}</script>';
		unset($_SESSION['registration_error']);
	}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>REGISTRATION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
		<style>
	@import url('https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@600&display=swap');
		#navbarSupportedContent ul li a:hover {
            color: #6a0dad;
			transition:all 0.8s;}
		.dropdown-item:hover{
			color:white;
			background-color:#cccccc;
			transition:all 0.8s;
		}
		#navbarSupportedContent ul li.active > a {
          background: transparent;
          color: #6a0dad;
		  transition:all 0.8s; }
  /* The Modal (background) */
  table {
  	border: 0.2px solid black;
      border-collapse: collapse;
      background-color: #222;
      border-radius: 10px;
  	overflow: hidden;
  	width: 90%;
  	height: 70%;
      margin-left: 70px;
      position: relative;
    }
    tbody tr:hover {
  	background: #4e2e53;
  	color: #fff;
  	cursor: pointer;
  	transition: 0.6s;
    }
    table th{
  	text-align: center;
  	height: 40px;
      background: #292929;
      color: #fff;
      font-size: 24px;
      text-align: center;
  	cursor: pointer;
  	padding: 30px;
	font-family:'Zilla slab',serif;
    }
    table tr {
  	background: #111;
  	color: #aaa;
        height: 20px;
		font-family:'Zilla slab',serif;
    }
    table td{
  	  padding: 15px;
      text-align: center;
	  font-family:'Zilla slab',serif;
    }
  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}



.button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  </style>
  </head>
        <body style="background-image:url('home-banner1.jpg');background-size:cover;background-repeat:none">
		<header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="p_index.php">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="SU.php">Students' Union</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Hostel Council</a></li>
								<li class="nav-item"><a class="nav-link dropdown-toggle" href="#" id="associationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Associations</a>

<!-- your mega menu starts here! -->
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="associationDropdown">
								<!-- finally, using flex to create your layout -->
								 <div class="d-md-flex align-items-start justify-content-start">
								  
								  <div>
								   <a class="dropdown-item" href="csea.php">Computer Science &amp; Engineering Association</a>
								   <a class="dropdown-item" href="ecea.php">Electronics &amp; Communication Engineering Association</a>
								   <a class="dropdown-item" href="#">Automobile Engineering Association</a>
								   <a class="dropdown-item" href="ram.php">Ramanujan Association of Mathematics</a>
								   <a class="dropdown-item" href="fta.php">Fashion Technology Association</a>
								   <a class="dropdown-item" href="#">Aeronautical Association</a>
								   <a class="dropdown-item" href="#">Mechanical Engineering Association</a>
								  </div>
															   
								  <div>
								   <a class="dropdown-item" href="#">Electrical &amp; Electronics Engineering Association</a>
								   <a class="dropdown-item" href="#">Information Technology Association</a>
								   <a class="dropdown-item" href="#">Applied Science Association</a>
								   <a class="dropdown-item" href="#">Biomedical Engineering Association</a>
								   <a class="dropdown-item" href="#">Biotechnology Association</a>
								   <a class="dropdown-item" href="#">Civil Engineering Association</a>
								   <a class="dropdown-item" href="#">Instrumentation &amp; Control Systems Engineering Association</a>
								  </div>
																
								  <div>
								   <a class="dropdown-item" href="#">Mettalurgical Engineering Association</a>
								   <a class="dropdown-item" href="#">Computer Applications Association</a>
								   <a class="dropdown-item" href="#">Indian Institution of Industrial Engineering</a>
								   <a class="dropdown-item" href="#">Production Engineering Association</a>
								   <a class="dropdown-item" href="#">Robotics &amp; Automation Engineering Association</a>
								   <a class="dropdown-item" href="#">Sir C.V.Raman Physics Association</a>
								   <a class="dropdown-item" href="#">Textile Technology Engineering Association</a>
								   <a class="dropdown-item" href="#">The Institute of Electronics & Telecommunication Engineers</a>
								  </div>
								 </div>
								</div>
								</li>
								<li class="nav-item"><a class="nav-link dropdown-toggle" href="#" id="clubsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clubs</a>

<!-- your mega menu starts here! -->
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="clubsDropdown">
								<!-- finally, using flex to create your layout -->
								 <div class="d-md-flex align-items-start justify-content-start">
								  
								  <div>
								   <a class="dropdown-item" href="radiohub.php">Radio Hub</a>
								   <a class="dropdown-item" href="glf.php">Global Leaders Forum</a>
								   <a class="dropdown-item" href="bridge.php">The Bridge</a>
								   <a class="dropdown-item" href="astroclub.php">Astronomy Club</a>
								   <a class="dropdown-item" href="els.php">English Literary Society</a>
								   <a class="dropdown-item" href="#">Artificial Intelligence and Robotics Club</a>
								   <a class="dropdown-item" href="#">Animal Welfare Club</a>
								   <a class="dropdown-item" href="#">Youth Red Cross Society</a>
								  </div>
															   
								  <div>
								   <a class="dropdown-item" href="#">Association of Serious Quizzers</a>
								   <a class="dropdown-item" href="#">Book Readers Club</a>
								   <a class="dropdown-item" href="#">CAP and Nature Club</a>
								   <a class="dropdown-item" href="#">Dramatix Club</a>
								   <a class="dropdown-item" href="#">Entrepreneurs Club</a>
								   <a class="dropdown-item" href="#">Fine Arts Club</a>
								   <a class="dropdown-item" href="#">Higher Education Forum</a>
								   <a class="dropdown-item" href="#">Youth Outreach Club</a>
								  </div>
																
								  <div>
								   <a class="dropdown-item" href="#">Industry Interaction Forum</a>
								   <a class="dropdown-item" href="#">Martial Arts Club</a>
								   <a class="dropdown-item" href="#">Pathshala Club</a>
								   <a class="dropdown-item" href="#">Rotaract Club</a>
								   <a class="dropdown-item" href="#">Student Research Council</a>
								   <a class="dropdown-item" href="#">Tek Music</a>
								   <a class="dropdown-item" href="#">Tamil Mandram</a>
								   <a class="dropdown-item" href="#">Women Development Cell</a>
								  </div>
								 </div>
								</div>
								</li>
									<?php
									if(isset($_SESSION['username'])){
									echo "<li class='nav-item active'><a class='nav-link active' href='Reg1.php'>Register</a></li>";
									}
									else{
									$_SESSION['regerror']=1;
									echo "<li class='nav-item active'><a class='nav-link active' href='login4.php'>Register</a></li>";
									}
									?>
								   <?php
									if(isset($_SESSION['username'])){
									$name=$_SESSION['username'];
									echo "<li class='nav-item'><a class='nav-link' href='logout.php'>$name - Logout</a></li>";
									}
									else{
									echo "<li class='nav-item'><a class='nav-link dropdown-toggle' href='#' id='loginDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Login</a>
										<div class='dropdown-menu dropdown-menu-right' aria-labelledby='loginDropdown'>
										<!-- finally, using flex to create your layout -->
										<div class='d-md-flex justify-content-start'>
										<div>
										<a class='dropdown-item' href='login1.php'>Student Login</a>
										<a class='dropdown-item' href='login2.php'>Club/Association Admin Login</a>
										<a class='dropdown-item' href='login3.php'>Main Admin Login</a>
										</div>
										</div>
										</div>
									</li>";
									}
									?>
								</div>
							   </div>
							  </div>
							</ul>
						</div>
					</div>
            	</nav>
            </div>
        </header>
        <h1 style="text-align:center;font-family:'Zilla slab',serif;color:white;margin-top:120px;">EVENT REGISTRATION</h1><br><br>
        <table>
          <thead>
            <tr>
              <th>Event Name</th>
              <th>Date</th>
              <th>Time</th>
              <th>Venue</th>
              </tr>
          </thead>
          <tbody>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "collegeforum";
              // Create connection
              $conn = mysqli_connect($servername, $username, $password, $dbname);
              // Check connection
              if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }

              $sql = "select * from events where date_event>=CURDATE() ORDER BY date_event";
              $result = $conn->query($sql);
              if (mysqli_num_rows($result)>0)
               {
                // output data of each row
                while($row = mysqli_fetch_assoc($result))
                 {
                   $event=$row['event_name'];
                   echo "<tr class='clickable-row' data-href='registration.php?event=$event'>";
				   echo "<td>".$row['event_name']."</td>";
                   echo "<td>".date("d.m.Y", strtotime($row['date_event']))."</td>";
                   echo "<td>".$row['event_time']."</td>";
                   echo "<td>".$row['venue']."</td>";
                   echo "</tr>";
                 }
				}
               $conn->close();
              ?>

          </tbody>
        </table>
    <!------------JAVASCRIPT------------>
		<script src="js/jquery-3.2.1.min.js"></script><script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/stellar.js"></script>
		<script>jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});</script>
    </body>
</html>
