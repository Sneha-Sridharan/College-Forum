<html>
	<body>
		<?php
			session_start();
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="collegeforum";
			$conn=new mysqli($servername,$username,$password,$dbname);
			if (!$conn)
			{
			die('Could not connect: ' . mysql_error());
			}

			if(isset($_POST['submit']))
			{
				$username=$_SESSION['username'];
				$old_pwd=$_POST['old_pwd'];
				$new_pwd=$_POST['new_pwd'];
				$confirm_pwd=$_POST['confirm_pwd'];
				$success="Password changed successfully";
				$error1="Invalid old password";
				$error2="Password reset failed";
				$sql1="select * from mainadmin where username='$username' and password='$old_pwd'";
				$result1=mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result1)===1)
				{
					if($new_pwd==$confirm_pwd)
					{
						$sql2="update mainadmin set password='$new_pwd' where username='$username'";
						$result2=mysqli_query($conn,$sql2);
						if($result2)
						{
							$_SESSION['reset_pwd_main_success']=$success;
							header('location:admin page.php');
						}
					}
					else
					{
						$_SESSION['reset_pwd_main_error2']=$error2;
						header('location:reset_pwd_main.php');
					}
				}
				else
				{
					$_SESSION['reset_pwd_main_error1']=$error1;
					header('location:reset_pwd_main.php');
				}
			}
			$conn->close();
		?>
	</body>
</html>