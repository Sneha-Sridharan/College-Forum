<?php
	session_start();
	if(isset($_SESSION['delete_event_error']))
	{	
		echo '<script type="text/javascript">alert("Invalid Club ID or Event name");</script>';
		unset($_SESSION['delete_event_error']);
	}
?>

<html>
	<head>
		<title>Delete Event Form</title>
		<style>
			.column {
			  width: 40%;
			  padding: 60px;
			  margin: 90px 0px 0px 350px;
			  background-color:rgba(220,220,220,0.65);
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
		</style>
	</head>
	<body style="background-image:url('home-banner.jpg');background-size:cover;background-repeat:none">
		<div class="column">
			<h1 style="text-align:center;font-family:Georgia;font-size:40px;">DELETE EVENT</h1>
			<form method="POST" action="delete_event_test.php">
				
				<br>
				Club ID
				<input type="text" name="clubid" required> 
				Event Name
				<input type="text" name="eventname" style="text-transform:uppercase" required>
				
				<input type="submit" name="submit" value="Delete">
			</form>
		</div>
	</body>
</html>
