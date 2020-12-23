<?php
session_start();
?>
<!DOCTYPEhtml>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Computer Science and Engineering Association</title>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="vendors/linericon/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
<link rel="stylesheet" href="vendors/animate-css/animate.css">
<!-- main css -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<style>
.column {
  padding:40px;
  width: 92%;
  margin: 150px 20px 60px 20px;
  background-color:rgba(250,250,250,0.8);
  color:black;
}
p{
  font-size:20px;
  text-align:justify;
  font-family:'Zilla slab',serif;
}
h2{
   text-align:left;
   font-size:25px;
   font-family:'Zilla slab',serif;
}
hr{
	margin-left:0px;width:5%;height:2px;color:#6a0dad;background-color:#6a0dad;
}
pre{
	font-size:20px;font-family:'Zilla slab',serif;
	}
a {
	color:#6a0dad;
}
#navbarSupportedContent ul li a:hover {
    color: #6a0dad; 
	transition: all 0.8s;}
.dropdown-item:hover{
	color:white;
	background-color:#cccccc;
	transition: all 0.8s;
}
.dropdown-item.active {
	background-color:#cccccc;
	color: #6a0dad;
	transition: all 0.8s;
}
#navbarSupportedContent ul li.active > a {
	background: transparent;
	color: #6a0dad;
	transition: all 0.8s;	}
</style>
</head>
<body style="background-image:url('home-banner1.jpg');background-attachment:fixed;background-size:100% 100%;background-repeat:none;">
	<header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="p_index.php">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="SU.php">Students' Union</a></li>
								<li class="nav-item"><a class="nav-link" href="HC.php">Hostel Council</a></li>
								<li class="nav-item active"><a class="nav-link dropdown-toggle" href="#" id="associationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Associations</a>

<!-- your mega menu starts here! -->
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="associationDropdown">
								<!-- finally, using flex to create your layout -->
								 <div class="d-md-flex align-items-start justify-content-start">
								  
								  <div>
								   <a class="dropdown-item active" href="csea.php">Computer Science &amp; Engineering Association</a>
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
<h1 style="font-family:'Zilla slab',serif;font-size:40px;text-align:center;margin-top:200px;color:white">COMPUTER SCIENCE AND ENGINEERING ASSOCIATION</h1><br>
<div class="column">
<h2>DESCRIPTION</h2>
<hr>
<p>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="collegeforum";
$conn=new mysqli($servername,$username,$password,$dbname);
if (!$conn)
{
die('Could not connect: ' . mysql_error());
}
$sql="SELECT clubinfo FROM clubs WHERE clubid='CSEA'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
echo $row["clubinfo"];
?>
</p>
<img src="csea.jpg" style="margin-left:100px;" alt="csea" width="30%" height="50%"><br><br>
<h2>RECENT EVENTS</h2>
<hr>
<?php
$sql = "SELECT poster FROM events WHERE clubid='CSEA' AND date_event>=CURDATE() ORDER BY date_event";
$result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0) {
	while($row = $result->fetch_assoc()) {
	echo '<img src="data:image/jpg;base64,'.base64_encode($row['poster']).'" style="float:left;margin-right:50px;width:20%;height:60%"/>';
  }	
  }
  else {
	echo "<pre>No Events Added</pre>";
  }
 ?>
 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br>
<h2>FACULTY ADVISOR:</h2>
<hr>
<p>
<?php
$sql="SELECT faculty_advisor FROM clubs WHERE clubid='CSEA'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
echo $row["faculty_advisor"];
?>
</p>
<h2>SECRETARIES:</h2>
<hr>
<p>
<?php
$sql = "SELECT secretary1,secretary2 FROM clubs WHERE clubid='CSEA'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row["secretary1"];
?>
</p>
<p>
<?php
echo $row["secretary2"];
?></p>
<h2>CONTACT DETAILS:</h2>
<hr>
<p>
<?php
$sql="SELECT contact FROM clubs WHERE clubid='CSEA'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
echo $row["contact"];
?>
</p>
<?php
$sql="SELECT recr_link,message FROM events WHERE clubid='CSEA'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
if($row['recr_link']!=NULL) {
	echo '<h2>RECRUITMENT LINK AND DETAILS:</h2>';
	echo '<hr><pre>';
	echo $row["message"]."<br><br>";
	$var=$row['recr_link'];
	echo "<a href='$var'>$var</a>";
	echo '</pre>';
}
?>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope-min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="vendors/flipclock/timer.js"></script>
<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.js"></script>
<script src="js/mail-script.js"></script>
</body>
</html>