<?php
	session_start();
?>
<html>
	<head>
		<title>Update Club Form</title>
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
				  font-size: 24px;
				  -webkit-transition: all 0.3s;
				  -o-transition: all 0.3s;
				  transition: all 0.8s;
				}
				.right {
				margin-left:320px;
				}
				body {
					background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('purple1.jpg');
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
						width: 55%;
						height: 30px;
						border:1px solid #979797;
						font-family:Lucida sans unicode;
						padding: 5px 1px;
						font-size:16px;
						border-radius:10px;
						outline:none;
					  }
					  textarea{
						height: 150px;
						width:70%;
						border:1px solid #979797;
						font-family:Lucida sans unicode;
						padding: 2px 1px;
						font-size:16px;
						border-radius:10px;
					  }
					  input:focus, textarea:focus, select:focus{
						border: 3px solid #6a0dad;
						background: #e0e0e0;
						transition: .6s; 
						outline:none;
					  }
					  #submitbtn{
				  border-color: #6a0dad;
				  font-family: 'Zilla Slab', serif;
				  background:#6a0dad;
				  padding:.5rem;
				  color: #ffffff;
				  margin:1rem 0;
				  height: 50px;
				  align-content: center;
				  margin-left: 40%;
				  margin-bottom: 15px;
				  width:120px;
				  font-size: 20px;
				  text-transform: uppercase;
				  cursor:pointer;
				  border-radius: 10px;
				  transition:1s background-color ease;
				}
				  #submitbtn:hover{
					border: #9932cc;
					background-color: #9932cc;
				  }
				  input[type=checkbox], input[type=radio] {
					zoom:0.5;
					bottom: 2px;
				}
				input[type=radio] {
					bottom: 2px;
				}
				.form{display:flex; flex-direction:column;}
				.chk{display:inline-block;
				padding: 10px;}
				</style>
					</head>
					<body>
					<div class="column vertical-menu">
				<div class="logo"><img src="pink_user.png" style="width:150px; height: 150px;align:center"></div>
				  <a href="admin page.php" class="active" style="border-bottom:3px solid #6a0dad;">Home - <?php $name=$_SESSION['username'];
				echo $name;?></a>
				  <a href="add_club.php">Add Club/Association</a>
				  <a href="delete_club1.php">Delete Club/Association</a>
				  <a href="#" class="active" data-toggle='tooltip' data-placement='bottom' title='Click on a club/association to update it'>Update Club/Association</a>
				  <a href="reset_pwd_main.php">Reset Password</a>
				  <a href="logout.php">Log out</a>
				</div>
				<div class="column right">
			<h1 style="text-align:center;font-size:40px;">UPDATE CLUB DETAILS</h1>
			<form class="reg-form" method="POST" action="update_club_test.php?id=<?php echo $_GET['id']?>">
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
			$cid=$_GET['id'];
			$sql = "SELECT name,secretary1,secretary2,faculty_advisor,contact,clubinfo FROM clubs WHERE clubid='$cid'";
			$result = mysqli_query($conn, $sql);
			$row = $result->fetch_assoc();
			?>
			<fieldset style="background:rgba(30,30,30,0.8)">
				Name
				<input type="text" name="clubname" value="<?php echo $row['name']?>" required><br>
				Secretary 1
				<input type="text" name="secretary1" value="<?php echo $row['secretary1']?>" required><br>
				Secretary 2
				<input type="text" name="secretary2" value="<?php echo $row['secretary2']?>" required><br>
				Faculty Advisor
				<input type="text" name="facultyadvisor" value="<?php echo $row['faculty_advisor']?>" required><br>
				Contact Number
				<input type="tel" name="contact" value="<?php echo $row['contact']?>" pattern="[0-9]{10}" required><br>
				Description<br>
				<textarea name="message" rows="10" cols="206"><?php echo $row['clubinfo']?></textarea><br>
				<br>
				<input id="submitbtn" type="submit" name="submit" value="Submit"><br>
				</fieldset>
			</form>
		</div>
	</body>
</html>
