<?php
	session_start();
	if(isset($_SESSION['delete_club_success']))
	{
		echo '<script type="text/javascript">window.onload = function(){alert("The club/association has been deleted successfully!");}</script>';
		unset($_SESSION['delete_club_success']);
	}
	if(isset($_SESSION['delete_club_error2']))
	{	
		echo '<script type="text/javascript">window.onload = function(){alert("Error while deleting");}</script>';
		unset($_SESSION['delete_club_error2']);
	}
?>

<html>
	<head>
		<title>Delete Club Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
<link rel="stylesheet" type="css" src="style.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@600&display=swap');
.column {
float:left;
}
.vertical-menu {
  width: 280px;
  min-height: 100%;
  background: #1d1919;
  position: fixed;
  font-size: 24px;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.8s;
}
.right {
margin-left:420px;

}
body {
	background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('purple1.jpg');
	background-size: cover;
    background-position: center;
	background-attachment: scroll;
	height: 100%;
	margin:0;
	color: white;
	font-family: 'Zilla Slab', serif;
}

.vertical-menu a {
	top: 100px;
	padding: 15px 20px;
      display: block;
      color: rgba(255, 255, 255, 0.8);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.vertical-menu a:hover {
	color: #6a0dad;
	transition: all 0.8s;
}

.vertical-menu a.active {
  background: transparent;
	color: #6a0dad;
}
h1 {text-align: center;
color: white;}
span
{
	font-size:30px;
	color:white;
}
a {
	text-decoration:none;
}
.logo {
	padding: 40px 40px;
	display: inline-block;
	left:40px;
	width: 80px;
	text-align: center;
	height: 120px;
	margin: auto auto; }
.logo span {
	  display: block; }

table {
	border: 0.2px solid black;
    border-collapse: collapse;
    background-color: #222;
    border-radius: 10px;
	overflow: hidden;
	width: 100%;
	height: 70%;
    margin: 5px;
    position: relative;
  }
  tbody tr:hover {
	background: #4e2e53;
	color: #fff;
	cursor: pointer;
	transition: 0.6s;
  }
  table th{
	text-align: center;
	height: 40px;
    background: #292929;
    color: #fff;
    font-size: 24px;
    text-align: center;
	cursor: pointer;
	padding: 30px;
  }
  table tr {
	background: #111;
	color: #aaa;
      height: 20px;
  }
  table td{
	  padding: 15px;
  }
</style>
</head>
<body>
<div class="column vertical-menu">
<!--<div class="logo"><img src="http://files.softicons.com/download/system-icons/kaito-icon-set-by-tooschee/png/128x128/pink_user.png" style="width:150px; height: 150px;align:center"></div>-->
<div class="logo"><img src="pink_user.png" style="width:150px; height: 150px;align:center"></div> 
 <a href="admin page.php" style="border-bottom:3px solid #6a0dad;">Home - <?php $name=$_SESSION['username'];
echo $name;?></a>
  <a href="add_club.php">Add Club/Association</a>
  <a href="#" class="active">Delete Club/Association</a>
  <a href="#" data-toggle='tooltip' data-placement='bottom' title='Click on a club/association to update it'>Update Club/Association</a>
  <a href="reset_pwd_main.php">Reset Password</a>
  <a href="logout.php">Log out</a>
</div>
<div class="column right">
<h1 style="font-size:40px; text-align:center">DELETE CLUB / ASSOCIATION</h1><br> 
<table id="table" border="none">
	<col width="17%">
            <thead>
				<th>ID</th>
                <th>Club / Association</th>
                <th>Delete?</th>
			</thead>
			<tbody>
				<?php
					$servername="localhost";
					$username="root";
					$password="";
					$dbname="collegeforum";
					$conn=new mysqli($servername,$username,$password,$dbname);
					if(!$conn)
					{
						die('Could not connect: ' . mysql_error());
					}
					#$rollno=$_SESSION['username'];
					$sql1="select * from clubs ORDER BY clubid";
					$result1=mysqli_query($conn,$sql1);
					if($result1)
					{
						while($row=$result1->fetch_assoc()) 
						{
							$id=$row['clubid'];
							echo "<tr>";
							echo "<td>".$row['clubid']."</td>";
							echo "<td>".$row['name']."</td>"; ?>
							<td style="text-align:center"><button onclick="checkDelete('<?php echo $id?>')" name='delete'><i class='fas fa-trash'></i></button></td>
							<?php
								echo "</tr>";	
							}
							
						}
				?>
			</tbody>
			</col>
        </table>
		</section>
		<br><br>
		</div>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/stellar.js"></script>
		<script language="javascript">
		 function checkDelete(id)
		{
			if(confirm('Are you sure you want to delete?'))
			{
				
				window.location.href='delete_club_test.php?cid='+id+'';
				return true;
			}
		}
	</script>
	</body>
</html>


		
