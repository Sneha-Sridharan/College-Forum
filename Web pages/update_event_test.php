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
				$s1=$s2=0;
				$event=$_GET['id'];
				$clubid=$_SESSION['username'];
				$years=implode(",",$_POST['years']);
				$date=$_POST['date'];
				$time=$_POST['time'];
				$venue=$_POST['venue'];
				$reg=$_POST['register'];
				$message=$_POST['message'];
				$success="Event updated successfully";
				$error1="Invalid Event Name";
				$error2="Invalid Details!";
				$sql1="select * from events where event_name='$event' and clubid='$clubid'";
				$result1=mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result1)===1)
				{
					if(isset($img))
					{
						$img = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
						$sql2="update events set registration='$reg',poster='$img',message='$message',venue='$venue',event_time='$time',date_event='$date',criteria='$years' where event_name='$event' and clubid='$clubid'";
						$result2=mysqli_query($conn,$sql2);
						if($result2)
						{
							$s1=1;
						}
					}
					else
					{
						$sql3="update events set registration='$reg',message='$message',venue='$venue',event_time='$time',date_event='$date',criteria='$years' where event_name='$event' and clubid='$clubid'";
						$result3=mysqli_query($conn,$sql3);
						if($result3)
						{
							$s2=1;
						}	
					}
					if($s2==1 or $s1==1)
					{
						$_SESSION['update_event_success']=$success;
						header('location:club-admin.php');
					}
					else
					{
						$_SESSION['update_event_error2']=$error2;
						header('location:club-admin.php');
					}
				}
			}
			$conn->close();
		?>
	</body>
</html>
