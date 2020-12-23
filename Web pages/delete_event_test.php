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

				$clubid=$_SESSION['username'];
				$eventname=$_GET['cid'];
				$sql1="select * from events where event_name='$eventname' and clubid='$clubid'";
				$success="The event has been deleted!";
				$error="Invalid clubid or event name!";
				$result=mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result)===1)
				{	
					$sql2="delete from events where event_name='$eventname' and clubid='$clubid'";
					if(mysqli_query($conn,$sql2))
					{
						$_SESSION['delete_event_success']=$success;
						header('location:delete_event.php');
					}
					else
					{
						$_SESSION['delete_event_error']=$error;
						header('location:delete_event.php');
						
					}
				}	
				else
				{
					$_SESSION['delete_event_error']=$error;
					header('location:delete_event.php');
					
				}
			
			$conn->close();
		?>
	</body>
</html>

