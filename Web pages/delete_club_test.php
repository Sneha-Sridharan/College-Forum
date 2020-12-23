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
				$clubid=$_GET['cid'];
				$success="Club deleted succesfully";
				$error="Invalid club ID or club name";
				#$error2="Invalid club name";
				$sql2="delete from clubs where clubid='$clubid'";
				$result=mysqli_query($conn,$sql2);
					if($result)
					{
						$_SESSION['delete_club_success']=$success;
						header('location:delete_club1.php');
					}
					else
					{
						$_SESSION['delete_club_error2']=$error2;
						header('location:delete_club1.php');						
					}
			$conn->close();
		?>
	</body>
</html>

