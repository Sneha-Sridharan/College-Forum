<?php
	session_start();
	
?>
<!DOCTYLE html>
<html>
<head>
	<title>Add Participant Details</title>
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
	margin-left:320px;
	}
	body {
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('club6.jpg');
		background-size: cover;
		background-position: center;
		background-attachment: scroll;
		height: 100%;
		margin:0;
		color: white;
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
		  .reg-form-title {
		  display: block;
		  line-height: 1.2;
		  padding-bottom: 10px;
		}
    label{
      font-size: 20px;
      color: #fff;
      padding:1px 1px;
    }
    .reg-form{
      width: 93%;
	  height: 100%;
	  padding:1rem;
	  font-size: 20px;
	}
	fieldset{
		border: none;
	}
      input, select{
        display:block;
        width: 60%;
        height: 40px;
        border:1px solid #979797;
        padding: 5px 1px;
        font-size:16px;
        border-radius:10px;
        outline:none;
		font-family:Lucida sans unicode;
      }
      textarea{
        height: 150px;
        width:70%;
        border:1px solid #979797;
        padding: 2px 1px;
        font-size:16px;
        border-radius:10px;
		font-family:Lucida sans unicode;
      }
      input:focus, textarea:focus, select:focus{
        border: 2px solid #6a0dad;
        background: #e0e0e0;
        transition: .6s; 
        outline:none;
      }
	  #submitbtn{
		border-color: #6a0dad;
		background:#6a0dad;
		padding:.5rem;
		color: #ffffff;
		margin:1rem 0;
		align-content: center;
		margin-left: 40%;
		margin-bottom: 15px;
		width:120px;
		height:50px;
		font-size: 20px;
		text-transform: uppercase;
		cursor:pointer;
		border-radius: 10px;
		transition:1s background-color ease;
		font-family:'Zilla slab',serif;
	}
	#submitbtn:hover{
		border: #9932cc;
		background-color: #9932cc;
	}
	input[type=checkbox], input[type=radio] {
		zoom:0.5;
		bottom: 2px;
	}
	.form{display:flex; flex-direction:column;}
	.chk{
		display:inline-block;
		padding: 10px;
	}
	</style>
	</head>
	<body>
	<div class="column vertical-menu">
	<div class="logo"><img src="pink_user.png" style="width:150px; height: 150px;align:center"></div>
	<a href="club-admin.php" style="border-bottom: 3px solid #6a0dad">Home - <?php $name=$_SESSION['username'];
	echo $name;?></a>
	  <a href="add_event.php">Add Event</a>
	  <a href="delete_event.php">Delete Event</a>
	  <a href="#">Update Event</a>
	  <a href="recruitment_club.php">Add Recruitment</a>
	  <a href="compose_mail.php">Compose mail</a>
	  <a href="partlist.php" class="active">Check Participant List</a>
	  <a href="reset_pwd_club.php">Reset Password</a>
	  <a href="logout.php">Log out</a>
	</div>
	<div class="column right">
			<h1 style="text-align:center;font-size:40px;">ADD PARTICIPANTS</h1>
			<form class="reg-form" method="POST" action="add_participants_test.php?event=<?php echo $_GET['event']?>" enctype="multipart/form-data">
			<fieldset style="background:rgba(30,30,30,0.8)">
				Roll Number
				<input type="text" name="rollno" required><br>
				Name/Team Name
				<input type="text" name="name" required><br>
				Email
				<input type="email" name="email" required><br>
				Phone
				<input type="tel" name="phone" pattern="[0-9]{10}" required><br>
				Status<br>
				<div class="chk"> <label>	<input type="radio" name="status" value="Participant" checked>Participant</label></div>
				<div class="chk"> <label>	<input type="radio" name="status" value="Winner">Winner</label></div>
				<div class="chk"> <label>	<input type="radio" name="status" value="Runner Up">Runner Up</label></div>
				<div class="chk"> <label>	<input type="radio" name="status" style="float:left"><input type="text" name="stat"></label></div>
				<br>
				<input id="submitbtn" type="submit" name="submit" value="Submit">
              </fieldset>
			</form>
		</div>
	</body>
</html>
