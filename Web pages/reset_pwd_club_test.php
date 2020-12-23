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
				$clubid=$_SESSION['username'];
				$old_pwd=$_POST['old_pwd'];
				$new_pwd=$_POST['new_pwd'];
				$confirm_pwd=$_POST['confirm_pwd'];
				$success="Password changed successfully";
				$error1="Invalid old password";
				$error2="Password reset failed";
				$sql1="select * from clubs where clubid='$clubid' and pwd='$old_pwd'";
				$result1=mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result1)===1)
				{
					if($new_pwd==$confirm_pwd)
					{
						$sql2="update clubs set pwd='$new_pwd' where clubid='$clubid'";
						$result2=mysqli_query($conn,$sql2);
						if($result2)
						{
							$_SESSION['reset_pwd_club_success']=$success;
							header('location:club-admin.php');
						}
					}
					else
					{
						$_SESSION['reset_pwd_club_error2']=$error2;
						header('location:reset_pwd_club.php');
					}
				}
				else
				{
					$_SESSION['reset_pwd_club_error1']=$error1;
					header('location:reset_pwd_club.php');
				}
			}
			$conn->close();
		?>
	</body>
</html>