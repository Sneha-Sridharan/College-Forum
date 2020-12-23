<?php
	session_start();
	if(isset($_SESSION['recruitment_club_success']))
	{
		echo '<script type="text/javascript">window.onload = function(){alert("The recruitment details have been added successfully!");}</script>';
		unset($_SESSION['recruitment_club_success']);
	}
	if(isset($_SESSION['delete_event_success']))
	{
		echo '<script type="text/javascript">window.onload = function(){alert("The event has been deleted successfully!");}</script>';
		unset($_SESSION['delete_event_success']);
	}
	if(isset($_SESSION['add_event_success']))
	{
		echo '<script type="text/javascript">window.onload = function(){alert("The event has been added successfully!");}</script>';
		unset($_SESSION['add_event_success']);
	}
	if(isset($_SESSION['update_event_success']))
	{
		echo '<script type="text/javascript">window.onload = function(){alert("The event has been updated successfully!");}</script>';
		unset($_SESSION['update_event_success']);
	}
	if(isset($_SESSION['update_event_error2']))
	{
		echo '<script type="text/javascript">window.onload = function(){alert("Please enter valid details");}</script>';
		unset($_SESSION['update_event_error2']);
	}
	if(isset($_SESSION['reset_pwd_club_success']))
	{	
		echo '<script type="text/javascript">window.onload = function(){alert("Password has been changed successfully!");}</script>';
		unset($_SESSION['reset_pwd_club_success']);
	}
	if(isset($_SESSION['mail_success']))
	{	
		echo '<script type="text/javascript">window.onload = function(){alert("Mail sent successfully!");}</script>';
		unset($_SESSION['mail_success']);
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Club Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="css" src="style.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@600&display=swap');
.column {
float:left;
}
.vertical-menu {
  width: 280px;
  min-height: 100%;
  background: #1d1919;
  position: fixed;
  font-size: 21px;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.8s;
}
.right {
margin-left:400px;

}
body {
	background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('club6.jpg');
	background-color: #cccccc;
	background-repeat: no-repeat;
	background-size: cover;
	color: white;
	margin:0;
	font-family: 'Zilla Slab', serif;
}

.vertical-menu a {
	top: 100px;
	padding: 15px 20px;
      display: block;
      color: rgba(255, 255, 255, 0.8);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.vertical-menu a:hover {
	color: #6a0dad;
	transition: all 0.8s;
}

.vertical-menu a.active {
  border-bottom: 3px solid #6a0dad;
  background: transparent;
	color: #6a0dad;
}
h1 {text-align: center;}
span
{
	font-size:30px;
	color:white;
}
a {
	text-decoration:none;
}
.logo {
	padding: 40px 40px;
	display: inline-block;
	left:40px;
	width: 80px;
	text-align: center;
	height: 120px;
	margin: auto auto; }
.logo span {
	  display: block; }
	  #cols {
  float: left;
  font-size: 20px;
  column-width:450px;
  column-gap: 40px;
  padding: 0 10px;
}


/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  height:330px;
  text-align: center;
  color:white;
  background-color: rgba(40,40,40,0.8);
  margin-right:50px;
}
.card:hover {
  box-shadow: 8px 8px 8px 0 rgba(50,50,50,0.5);
  padding: 16px;
  cursor: pointer;
  text-align: center;
  color: #000;
  transition:0.6s;
  background-color: #8b008b;
}
hr{
	
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}
</style>
</head>
<body>


<div class="column vertical-menu">
<div class="logo"><img src="pink_user.png" style="width:150px; height: 150px;align:center"></div>
<a href="#" class="active" style="border-bottom: 3px solid #6a0dad">Home - <?php $name=$_SESSION['username'];
echo $name;?></a>
  <a href="add_event.php">Add Event</a>
  <a href="delete_event.php">Delete Event</a>
  <a href="#">Update Event</a>
  <a href="recruitment_club.php">Add Recruitment</a>
  <a href="compose_mail.php">Compose mail</a>
  <a href="reset_pwd_club">Reset Password</a>
  <a href="partlist.php">Check Participant List</a>
  <a href="logout.php">Log out</a>
</div>
<div class="column right">
<h1 style="font-size:40px; text-align:center">YOUR EVENTS</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegeforum";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn)
{
  die("Connection failed: ".mysql_error());
}
$var=$_SESSION['username'];
$sql = "SELECT * FROM events WHERE clubid='$var' AND date_event>=CURDATE() ORDER BY date_event";
$result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0) {
	while($row = $result->fetch_assoc()) {
	$name=$row['event_name'];
    echo "<br><a href='update_event.php?id=$name' data-toggle='tooltip' data-placement='bottom' title='Click to update event'><div class='card'>";
	echo '<img src="data:image/jpg;base64,'.base64_encode($row['poster']).'" style="float:left;margin-right:20px;width:28%;height:100%"/>';
	echo "<span>Event Name: ".$row['event_name']."<span><br>";
	echo "<span>Criteria: ".$row['criteria']." Years<span><br>";
	echo "<span>Date: ".date("d.m.Y", strtotime($row['date_event']))."<span><br>";
	echo "<span>Time: ".$row['event_time']."<span><br>";
	echo "<span>Venue: ".$row['venue']."<span><br>";
	if($row['message']!='') {
	echo "<span>Message: ".$row['message']."<span><br><br>"; }
		echo "<a id='reg' href='regpart.php?id=$name' style='color:blue;font-size:24px'>View Registered Participants</a>";
	echo "</div></a><br>";
  }
	
  }
  else {
	echo "No Events Added";
  }
?>
</body>
</html>
