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
				$clubid=$_POST['clubid'];
				$clubname=$_POST['clubname'];
				$secretary1=$_POST['secretary1'];
				$secretary2=$_POST['secretary2'];
				$faculty_advisor=$_POST['facultyadvisor'];
				$password=$_POST['password'];
				$contact=$_POST['contact'];
				$description=$_POST['message'];
				$success="The club has been added!";
				$error="Invalid Details!";
				$sql="insert into clubs values('$clubid','$clubname','$secretary1','$secretary2','$faculty_advisor','$password','$contact','$description')";
				$result=mysqli_query($conn,$sql);	
				if($result)
				{
					$_SESSION['add_club_success']=$success;
					header('location:admin page.php');
				}
				else
				{
					$_SESSION['add_club_error']=$error;
					header('location:add_club.php');
				}
			}
			$conn->close();
		?>
	</body>
</html>