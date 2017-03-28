<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Generate Code</title>
	<link rel="stylesheet" type="text/css" href="/css/table.css">
	<?php
		include('function.php');
		$db = informationDb();
		// Create connection
		$conn = mysqli_connect($db['servername'], $db['username'], $db['password'],$db['dbname']);
		// Check connection
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM `codes` WHERE 1 ORDER BY `active` ASC,`created` DESC;";
		$result = mysqli_query($conn,$sql);
	?> 
</head>
<body>
	<?php if (isset($_SESSION['login_user'])): ?>
		<a href="generateRandomString.php">Generate Code</a> 
		<a href="logout.php">Logout</a><br>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>ID</th>
					<th>Code</th>
					<th>Active</th>
					<th>Date</th>
					<th>Name</th>
					<th>Created</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if (mysqli_num_rows($result) > 0) 
					{
						$i = 1;
					    while($row = mysqli_fetch_assoc($result)) {
					    	echo "<tr>";
					    	echo "<td>".$i."</td>";$i++;
					        echo "<td>".$row["id"]."</td>";
					        echo "<td>".$row["code"]."</td>";
					        echo "<td>".$row["active"]."</td>";
					        echo "<td>".$row["date"]."</td>";
					        echo "<td>".$row["name"]."</td>";
					        echo "<td>".$row["created"]."</td>";
					        echo "<td>
					        	<a href='active.php?code=".$row["code"]."'>Active</a> 
					        	<a href='noActive.php?code=".$row["code"]."'>No Active</a> 
					        	<a href='delete.php?id=".$row["id"]."'>Delete</a>
					        	</td>";
					        echo "</tr>";
					    }
					} 
					else 
					{
					    echo "0 results";
					}
				?>
			</tbody>	
		</table>
	<?php else : ?>
		<div align = "center">
         	<div style = "width:300px; border: solid 1px #333333; " align = "left">
	            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>	
	            <div style = "margin:30px">
	               <form action = "login.php" method="post">
	                  <label>UserName  </label><input type = "text" name = "username" class = "box"/><br /><br />
	                  <label>Password  </label><input type = "password" name = "password" class = "box" /><br/><br />
	                  <input type = "submit" value = " Submit "/><br />
	               </form>
	            </div>
         	</div>
      	</div>
	<?php endif ?>
	
	<?php $conn->close(); ?>
</body>
</html>

