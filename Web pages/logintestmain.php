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
$uname=$_POST['username'];
$pwd=$_POST['password'];
$sql="select * from mainadmin WHERE username = '$uname' and password = '$pwd'";
$result=$conn->query($sql);
$error="Either username or password is incorrect";
if(mysqli_num_rows($result)==1)
{
$_SESSION['username'] = $uname;
header('Location:admin page.php');
}
else
{
$_SESSION['login3-error'] = $error;
header('Location:login3.php');
}
}
$conn->close();
?>
</body>
</html>