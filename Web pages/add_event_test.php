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
		$event=$_POST['event'];
		$clubid=$_SESSION['username'];
		$years=implode(",",$_POST['years']);
		$date=$_POST['date'];
		$time=$_POST['time'];
		$venue=$_POST['venue'];
		$message=$_POST['message'];
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		$sql="INSERT INTO events(event_name,clubid,criteria,date_event,event_time,venue,poster,message) VALUES('$event','$clubid','$years','$date','$time','$venue','$file','$message')";
		$result = $conn->query($sql);
		if($result)
		{
			$_SESSION['add_event_success']=1;
			header('Location:club-admin.php');
		}
		else
		{
			$_SESSION['add_event_error'] = 1;
			header('Location:add_event.php');
		}
	}
?>