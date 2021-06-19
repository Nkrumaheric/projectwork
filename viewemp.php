<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Personnel |  Admin Panel | 66-APMS</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>66-APMS</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Personnel</a></li>
				<li><a class="homered" href="viewemp.php">View Personnel</a></li>
				<!-- <li><a class="homeblack" href="assign.php">Assign Project</a></li> -->
				<!-- <li><a class="homeblack" href="assignproject.php">Project Status</a></li> -->
				<!-- <li><a class="homeblack" href="salaryemp.php">Salary Table</a></li> -->
				<li><a class="homeblack" href="empleave.php">Personnel Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Service ID</th>
				<th align = "center">Picture</th>
				<th align = "center">Name</th>
				<th align = "center">Email</th>
				<th align = "center">Contact</th>
				<th align = "center">Birthday</th>
				<th align = "center">Gender</th>
				<th align = "center">M. Status</th>
				<th align = "center">Address</th>
				<th align = "center">Battery</th>
				<th align = "center">Rank</th>
				<th align = "center">JHS Attended</th>
				<th align = "center">SHS Attended</th>
				<th align = "center">Tertiary Attended</th>

				
				
				<th align = "center">Action</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['service_id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['contact']."</td>";
					echo "<td>".$employee['birthday']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td>".$employee['address']."</td>";
					echo "<td>".$employee['battery']."</td>";
					echo "<td>".$employee['rank']."</td>";
					echo "<td>".$employee['jhs']."</td>";
					echo "<td>".$employee['shs']."</td>";
					echo "<td>".$employee['tertiary']."</td>";

					echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>