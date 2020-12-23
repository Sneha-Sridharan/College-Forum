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
			$eventname=$_GET['event'];
			$rollno=$_GET['no'];
			$success="The participant has been removed!";
			$error="Invalid!";
			$sql2="update register set participated='No',status=NULL where event='$eventname' and rollno='$rollno'";
			if(mysqli_query($conn,$sql2))
			{
				$_SESSION['removepart_success']=$success;
				header("location:checklist.php?id=$eventname");
			}
			else
			{
				$_SESSION['removepart_error']=$error;
				header("location:checklist.php?id=$eventname");		
			}	
			$conn->close();
		?>
	</body>
</html>

