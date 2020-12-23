<?php
session_start();
if(isset($_SESSION['reset_pwd_stu_success']))
	{
		echo '<script type="text/javascript">alert("Password reset successfully");</script>';
		unset($_SESSION['update_event_error1']);
	}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <title>PSG Tech Forum</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
		<style>
		#navbarSupportedContent ul li a:hover {
            color: #6a0dad;
			transition:all 0.8s;}
		.dropdown-item:hover{
			color:white;
			background-color:#cccccc;
			transition:all 0.8s;
		}
		.footer{
			background: #444;
			height: 100px;
			color: #fff;
			text-align:center;
			font-size:18px;
			font-family:'Zilla Slab',serif;
		}
		#navbarSupportedContent ul li.active > a {
          background: transparent;
          color: #6a0dad;
		  transition:all 0.8s; }
		</style>
    </head>
    <body>

        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="https://ecampus.psgtech.ac.in/Images/PSG.png" alt=""></a>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="SU.php">Students' Union</a></li>
								<li class="nav-item"><a class="nav-link" href="HC.php">Hostel Council</a></li>
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
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<?php
									if(isset($_SESSION['username'])){
									echo "<a class='nav-link' href='Reg1.php'>Register</a>";
									}
									else{
									$_SESSION['regerror']=1;
									echo "<a class='nav-link' href='login4.php'>Register</a>";
									}
									?>
								</li>
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
							</ul>
						</div>
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="banner_content">
						<h2 style="font-family: 'Josefin Sans', sans-serif;text-align:center;color:white;">COLLEGE FORUM</h2><br><h3 style="font-family: 'Josefin Sans', sans-serif; font-size: 40px;color:white;">PSG COLLEGE OF TECHNOLOGY</h3>

					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Event Time Area =================-->
        
        <!--================Event Schedule Area =================-->
        <section class="event_schedule_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2 style="font-family: 'Josefin Sans', sans-serif;">Event Schedule</h2>
        			<p style="font-family:Zilla Slab, serif;">Upcoming Events for the next three days!</p>
        		</div>
        		<div class="event_schedule_inner">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Today</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tomorrow</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Day After Tomorrow</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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

                    $sql = "SELECT * FROM events WHERE date_event = CURDATE()";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result)>0)
                     {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result))
                       {
						echo '<div class="media">';
						echo '<div class="d-flex">';
						echo '<img src="data:image/jpeg;base64,'.base64_encode($row['poster'] ).' "style= "width:30%;height:30%;margin-right:40px;"/>';
						echo "<h3 style='font-family:Zilla Slab, serif;'>Event Name: " . $row["event_name"]. "<br>","Criteria: " . $row["criteria"]." years can participate", "<br>",  "Date: " .date("d.m.Y", strtotime($row['date_event'])). "<br>", "Time: ".$row["event_time"]. "<br>", "Venue: ".$row["venue"]. "<br>", "Additional Information: ".$row["message"]. "<br><br></h3>";
						echo '</div></div>';
						}
                    }
                       else
                      {
                        echo "<br><span style='font-size:20px;margin:20px;font-family:Zilla Slab, serif;'> No Events Today</span><br><br>";
                      }
                  ?>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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

                    $sql = "SELECT * FROM events WHERE date_event = CURDATE()+1";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result)>0)
                     {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result))
                       {
						echo '<div class="media">';
						echo '<div class="d-flex">';
						echo '<img src="data:image/jpeg;base64,'.base64_encode($row['poster'] ).' "style= "width:30%;height:30%;margin-right:40px;"/>';
						echo "<h3 style='font-family:Zilla Slab, serif;'>Event Name: " . $row["event_name"]. "<br>","Criteria: " . $row["criteria"]." years can participate", "<br>",  "Date: " .date("d.m.Y", strtotime($row['date_event'])). "<br>", "Time: ".$row["event_time"]. "<br>", "Venue: ".$row["venue"]. "<br>", "Additional Information: ".$row["message"]. "<br><br></h3>";
						echo '</div></div>';
						}
                    }
                       else
                      {
                        echo "<br><span style='font-size:20px;margin:20px;font-family:Zilla Slab, serif;'> No Events Today</span><br><br>";
                      }
                  ?>
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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

                    $sql = "SELECT * FROM events WHERE date_event = CURDATE()+2";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result)>0)
                     {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result))
                       {
						echo '<div class="media">';
						echo '<div class="d-flex">';
						echo '<img src="data:image/jpeg;base64,'.base64_encode($row['poster'] ).' "style= "width:30%;height:30%;margin-right:40px;"/>';
						echo "<h3 style='font-family:Zilla Slab, serif;'>Event Name: " . $row["event_name"]. "<br>","Criteria: " . $row["criteria"]." years can participate", "<br>",  "Date: " .date("d.m.Y", strtotime($row['date_event'])). "<br>", "Time: ".$row["event_time"]. "<br>", "Venue: ".$row["venue"]. "<br>", "Additional Information: ".$row["message"]. "<br><br></h3>";
						echo '</div></div>';
						}
                    }
                       else
                      {
                        echo "<br><span style='font-size:20px;margin:20px;font-family:Zilla Slab, serif;'> No Events Today</span><br><br>";
                      }
                  ?>
						</div>
					</div>
        		</div>
        	</div>
        </section>
		<section class="footer">
		<p>For more details, write to us at collegeforumpsgtech@gmail.com</p>
		<p>Copyright &#xA9; PSG College of Technology </p>
		</section>
        <!--================End Event Schedule Area =================-->
		<script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
    </body>
</html>
<?php
    unset($_SESSION['error']);
?>
