<?php
	session_start();
	if(isset($_SESSION['delete_club_error']))
	{	
		echo '<script type="text/javascript">alert("Please enter valid details");</script>';
		unset($_SESSION['delete_club_error']);
	}
	#if(isset($_SESSION['delete_club_error2']))
	#{	
		#echo '<script type="text/javascript">alert("Please enter a valid Club Name");</script>';
		#unset($_SESSION['delete_club_error2']);
	#}
?>

<html>
	<head>
		<title>Delete Club Form</title>
		<style>
			.column {
			  width: 40%;
			  padding: 60px;
			  margin: 90px 0px 0px 350px;
			  background-color:rgba(0,0,0,0.65);
			}
			input,textarea{
			  width: 100%;
			  padding: 10px;
			  margin: 5px 0 22px 0;
			  border: none;
			  background: #ffffff;
			  font-family:Times New Roman;
			  font-size:18px;
			}
			input[type="checkbox"]{
			width:3%;
			padding:0px;
			margin: 10px 0 5px 0;
			}
			input[type="file"]{
			padding:0px;
			background:none;
			border:none;
			margin: 10px 0 5px 0;
			}
			input[type="submit"]{
				border-radius: 30px;
				height:70px;
				border: 0;
				width:225px;
				font-family:Lucida Sans Unicode;
				background-color:white;
				border:3px solid powderblue;
				margin-left:160px;
				font-size:22px;
			}
			form{
			font-family:Lucida Sans Unicode;
			font-size:22px;
			}
			span{
			  font-size:20px;
			  color:red;
			}
			body {
				background-image: url("club7.jpg");
				background-color: #cccccc;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				background-attachment:fixed;
				margin:0;
				color:white;
			}
		</style>
	</head>
		<div class="column">
			<h1 style="text-align:center;font-family:Georgia;font-size:40px;">DELETE CLUB</h1>
			<form method="POST" action="delete_club_test1.php">
				
				<br>
				Club ID
				<input type="text" name="clubid" maxlength="4" required> 
				Club Name
				<input type="text" name="clubname" required>
				
				<input type="submit" name="submit" value="Delete">
			</form>
		</div>
		<br><br>
	</body>
</html>


		
