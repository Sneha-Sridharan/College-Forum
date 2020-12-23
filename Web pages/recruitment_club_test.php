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
		$link=$_POST['app_form'];
		$event=$_POST['event'];
		$clubid=$_SESSION['username'];
		$years=implode(",",$_POST['years']);
		$date=$_POST['date'];
		$time=$_POST['time'];
		$venue=$_POST['venue'];
		$message=$_POST['rec_details'];
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		$sql="INSERT INTO events(event_name,clubid,criteria,date_event,event_time,venue,poster,message,recr_link) VALUES('$event','$clubid','$years','$date','$time','$venue','$file','$message','$link')";
		$result = $conn->query($sql);
		if($result)
		{
			$_SESSION['recruitment_club_success']=1;
			header('Location:club-admin.php');
		}
		else
		{
			$_SESSION['recruitment_club_error'] = 1;
			header('Location:recruitment_club.php');
		}
	}
?>