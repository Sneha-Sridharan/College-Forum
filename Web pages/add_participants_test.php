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
				$event=$_GET['event'];
				$rollno=$_POST['rollno'];
				$name=$_POST['name'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$status=$_POST['status'];
				if($status=='on'){
					$status=$_POST['stat'];
				}
				$success="Participant Details updated successfully";
				$error2="Invalid Details!";
				$sql="insert into register(rollno,name,email,phone,status,event) values('$rollno','$name','$email','$phone','$status','$event')";
				$result=mysqli_query($conn,$sql);
				if($result)
				{
					$_SESSION['add_success']=$success;
					header("location:checklist.php?id=$event");
				}	
				else
				{
					$_SESSION['add_error']=$error2;
					header("location:add_participants.php?event=$event");
				}
				
			}
			$conn->close();
		?>
	</body>
</html>
