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
$sql="select * from students WHERE rollno = '$uname' and password = '$pwd'";
$result=$conn->query($sql);
$error="Either username or password is incorrect";
if(mysqli_num_rows($result)==1)
{
$_SESSION['username'] = $uname;
header('Location:Reg1.php');
}
else
{
$_SESSION['login4_error'] = $error;
header('Location:login4.php');
}
}
$conn->close();
?>
</body>
</html>

