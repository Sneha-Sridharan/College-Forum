<?php
	session_start();
	if(isset($_SESSION['reset_pwd_main_error2']))
	{	
		echo '<script type="text/javascript">window.onload = function(){alert("The new password and confirm new password did not match! Please enter correctly");}</script>';
		unset($_SESSION['reset_pwd_main_error2']);
	}
	if(isset($_SESSION['reset_pwd_main_error1']))
	{	
		echo '<script type="text/javascript">window.onload = function(){alert("Old password is incorrect!");}</script>';
		unset($_SESSION['reset_pwd_main_error1']);
	}
?>
<html>
	<head>
		<title>Reset Password</title>
	</head>
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
	margin-left:630px;
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
      width: 100%;
	  height: 100%;
	  padding:1rem;
	  font-size: 20px;
	}
	fieldset{
		border: none;
    width:100%;
    height: 63%;
	}
      input, select{
        display:block;
        width: 100%;
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
        border: 3px solid #6a0dad;
        background: #e0e0e0;
        transition: .6s; 
        outline:none;
      }
    input[type="submit"]{
		border-radius: 10px;
		height:60px;
		border: 0;
		margin-left:120px;
		margin-right: 90px;
		width:225px;
		font-family:'Zilla slab',serif;
		background-color:#6a0dad;
		color:white;
		font-size:22px;
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4), 0 6px 20px 0 rgba(0,0,0,0.38);
	}
	input[type="submit"]:hover{
		border: #9932cc;
		background-color: #9932cc;
		cursor: pointer;
		transition: 0.6s;
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
	<div class="logo">
		<img src="pink_user.png" style="width:150px; height: 150px;align:center">
	</div>
	<a href="admin page.php" style="border-bottom: 3px solid #6a0dad">Home - <?php $name=$_SESSION['username'];
	echo $name;?></a>
	<a href="add_club.php">Add Club/Association</a>
	<a href="delete_club1.php">Delete Club/Association</a>
	<a href="#" data-toggle='tooltip' data-placement='bottom' title='Click on a club/association to update it'>Update Club/Association</a>
	<a href="#" class="active">Reset Password</a>
	<a href="logout.php">Log out</a>
</div>
<div class="column right">
	<h1 style="text-align:center;font-size:40px;">   RESET PASSWORD   </h1>
	<form class="reg-form" method="POST" action="reset_pwd_main_test.php" enctype="multipart/form-data">
	<fieldset style="background:rgba(30,30,30,0.8)"> 
    Enter old password
	<input type="password" name="old_pwd" required><br>
	<h5 style="color:#6a0dad;font-size:20px;"><b>Note: </b>Enter atleast 8 characters</h5>
	Enter new password
	<input type="password" name="new_pwd" required><br>
	Confirm password
	<input type="password" name="confirm_pwd" required><br>
	<input type="submit" name="submit" value="SUBMIT">
    </fieldset>
	</form>
</div>
</body>
</html>	