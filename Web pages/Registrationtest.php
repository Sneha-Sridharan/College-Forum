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
    $event=$_GET['event'];
    #echo $event;
	    $rollno=$_SESSION['username'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$sql="INSERT INTO register(rollno,name,email,phone,event) VALUES('$rollno','$name','$email',$phone,'$event')";
		$result = $conn->query($sql);
		if($result)
		{
			$_SESSION['registration_success']=1;
			header('Location:Reg1.php');
		}
		else
		{
			$_SESSION['registration_error'] = 1;
			header('Location:Reg1.php');
		}
	}
?>
