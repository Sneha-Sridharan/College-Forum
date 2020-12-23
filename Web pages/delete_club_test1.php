<html>
	<head>
		<style>
			span{
				color:white;
				font-size:22px;
			}
		</style>
	</head>
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
				$clubid=$_POST['clubid'];
				$clubname=$_POST['clubname'];
				$sql1="select * from clubs where clubid='$clubid'";
				$success="The club has been deleted!";
				$error="Invalid clubid!";
				$result=mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result)===1)
				{	
					$sql2="delete from clubs where clubid='$clubid'";
					if(mysqli_query($conn,$sql2))
					{
						$_SESSION['delete_success']=$success;
						header('location:admin page.php');
					}
					else
					{
						$_SESSION['delete_error']=$error;
						#echo '<script type="text/javascript">alert("Please enter valid Club ID");</script>';
						header('location:delete_club1.php');
						
					}
				}	
				else
				{
					$_SESSION['delete_error']=$error;
					#echo '<script type="text/javascript">alert("Please enter valid Club ID");</script>';
					header('location:delete_club1.php');
					
				}
			}
			$conn->close();
		?>
	</body>
</html>

