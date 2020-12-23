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
				$s1=$s2=$s3=$s5=0;
				$clubid=$_GET['id'];
				$clubname=$_POST['clubname'];
				$secretary1=$_POST['secretary1'];
				$secretary2=$_POST['secretary2'];
				$faculty_advisor=$_POST['facultyadvisor'];
				$contact=$_POST['contact'];
				$des=$_POST['message'];
				$success="The club details have been updated!";
				$error1="Invalid Club ID!";
				$error2="Invalid Details!";
				$sql="UPDATE clubs SET name='$clubname',secretary1='$secretary1',secretary2='$secretary2',faculty_advisor='$faculty_advisor',contact='$contact',clubinfo='$des' WHERE clubid='$clubid'";
				$result = $conn->query($sql);	
					if($result)
					{
						$_SESSION['update_club_success']=$success;
						header('location:admin page.php');
					}
					else
					{
						$_SESSION['update_club_error1']=$error1;
						header('location:admin page.php');
					}
				
			}
			$conn->close();
		?>
	</body>
</html>