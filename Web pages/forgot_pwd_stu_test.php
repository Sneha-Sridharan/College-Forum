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
				$rollno=$_POST['rollno'];
				$q1=$_POST['q1'];
				$q2=$_POST['q2'];
				$q3=$_POST['q3'];
				$success="Details are correct";
				$error="Invalid details";
				$sql1="select * from students where rollno='$rollno' and mother_bday='$q1' and  tel_no='$q2' and teacher_name='$q3'";
				$result=mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result)===1)
				{
					$_SESSION['rollno']=$rollno;
					$_SESSION['forgot_pwd_stu_success']=$success;
					header('location:reset_pwd_stu.php');
				}
				else
				{
					$_SESSION['forgot_pwd_stu_error']=$error;
					header('location:forgot_pwd_stu.php');
				}
			}
			$conn->close();
		?>
	</body>
</html>