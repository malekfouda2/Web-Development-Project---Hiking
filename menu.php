<html>
<head>
	<style>
	.topnav{
		background-color: black;
		overflow:hidden;
		color: white;
		font-size: 17px;
		padding: 14px 16px;
	}
	.topnav a{
		float:right;
		display:block;
		color: white;
		text-align: center;
		padding: 0px 16px;
		text-decoration: none;
		font-size: 17px;
	}
	.topnav a:hover{
		background-color: green;
		color: white;
	}
	</style>
</head>
<body>		
	<div class="topnav">
		<?php
	require_once("connect.php");
		if(empty($_SESSION['ID'])) 
		{
			echo "MIU HIKING";
			echo"<a href='index.php'>Home</a>";
			echo"<a href='login.php'>Login</a>";
			echo"<a href='products.php'>products</a>";
		}
		else 
		{
			$result = mysqli_query($conn, "SELECT image FROM user where ID=".$_SESSION['ID']);
			if ($row = mysqli_fetch_array($result)) {
				echo "<img src='images/".$row[0]."' width=25 style='border-radius: 50%;'>";
			}
			echo "MIU HIKING ";
			echo"<a href='index.php'>Home</a>";
			echo"<a href='messages.php'>Messages</a>";
			echo"<a href='SignOut.php'>logout</a>";
		}
		?>
	</div>
	<br><br>
</body>
</html>