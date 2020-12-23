<?php
	session_start();
	if(isset($_SESSION['forgot_pwd_stu_error']))
	{	
		echo '<script type="text/javascript">window.onload = function(){alert("Invalid Details");}</script>';
		unset($_SESSION['forgot_pwd_stu_error']);
	}
?>
<!DOCTYPEhtml>
<html>
<head>
<title>Forgot Password</title>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- main css -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<style>
.column {
  width: 60%;
  padding: 60px;
  margin: 100px 0px 0px 300px;
  background-color:rgba(220,220,220,0.65);
  color:black;
}
a {
color:#6a0dad;}
input{
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  border: none;
  background: #ffffff;
  font-family:Lucida sans unicode;
  font-size:18px;
}
input[type="submit"]{
    border-radius: 10px;
    height:70px;
    border: 0;
    width:225px;
    font-family:'Zilla slab',serif;
    background-color:#6a0dad;
	color:white;
    margin-left:250px;
    font-size:22px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.38);
}
input[type="submit"]:hover{
    border: #9932cc;
    background-color: #9932cc;
    cursor: pointer;
    transition: 0.6s;
  }
form{
font-family:'Zilla slab',serif;
font-size:20px;
}
input, select{
        display:block;
        width: 80%;
        height: 40px;
        border:1px solid #979797;
        padding: 5px 1px;
        font-size:16px;
        border-radius:10px;
        outline:none;
      }
      textarea{
        height: 150px;
        width:70%;
        border:1px solid #979797;
        padding: 2px 1px;
        font-size:16px;
        border-radius:10px;
      }
      input:focus, textarea:focus, select:focus{
        border: 2px solid #6a0dad;
        background: #e0e0e0;
        transition: .6s; 
        outline:none;
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
<body style="background-image:url('home-banner1.jpg');background-size:cover;background-repeat:none">
<header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="p_index.php">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="SU.html">Students' Union</a></li>
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
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<?php
									if(isset($_SESSION['username'])){
									echo "<a class='nav-link' href='radiohub.php'>Register</a>";
									}
									else{
									echo "<a class='nav-link' href='login4.php'>Register</a>";
									}
									?>
								</li>
								<?php
									if(isset($_SESSION['username'])){
									$name=$_SESSION['username'];
									echo "<a class='nav-link' href='logout.php'>$name - Logout</a>";
									}
									else{
									echo "<li class='nav-item active'><a class='nav-link dropdown-toggle' href='#' id='loginDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Login</a>
										<div class='dropdown-menu dropdown-menu-right' aria-labelledby='loginDropdown'>
										<!-- finally, using flex to create your layout -->
										<div class='d-md-flex justify-content-start'>
										<div>
										<a class='dropdown-item active' href='login1.php'>Student Login</a>
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

	<div class="column">
		<h1 style="text-align:center;font-family:'Zilla slab',serif;font-size:40px;font-weight:strong;">FORGOT PASSWORD?</h1>
		<form method="POST" action="forgot_pwd_stu_test.php">
			Username<br>
			<input type="text" name="rollno" autocomplete="off" required><br>
			<h3 style="color:#6a0dad;font-family:'Zilla slab',serif;">Answer the following questions to verify it is you:</h3><br> 
			When is your mother's birthday? (in DD/MM/YYYY)<br>
			<input type="date" name="q1" autocomplete="off" required><br><br>
			What were the last four digits of your childhood telephone number?<br> 
			<input type="text" name="q2" autocomplete="off" maxlength="4" required><br><br>
			What was the name of your favourite elementary school teacher?<br>
			<input type="text" name="q3" autocomplete="off" required><br><br>

			<input type="submit" name="submit" value="SUBMIT">
		</form>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
</html>