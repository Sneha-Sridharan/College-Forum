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
				$rollno=$_SESSION['rollno'];
				$new_pwd=$_POST['new_pwd'];
				$confirm_pwd=$_POST['confirm_pwd'];
				$success="Password changed successfully";
				$error="Password reset failed";
				if($new_pwd==$confirm_pwd)
				{
					$sql="update students set password='$new_pwd' where rollno='$rollno'";
					$result=mysqli_query($conn,$sql);
					if($result)
					{
						$_SESSION['reset_pwd_stu_success']=$success;
						header('location:login1.php');
					}
				}
				else
				{
					$_SESSION['reset_pwd_stu_error']=$error;
					header('location:reset_pwd_stu.php');
				}
			}
			$conn->close();
		?>
	</body>
</html>