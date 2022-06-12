<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'user_info';

// Server is localhost with
// port number 3306
$servername='127.0.0.1';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM personal_info ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Volunteer details</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>First Name</th>
                <th>Last Name</th>

				<th>Residential Address</th>
                <th>Professional Address</th>
				<th>Partner Institutions</th>
				<th>partner organizations</th>
                <th>Academic Qualification</th>
                <th>Occupation</th>
                <th>Nationality</th>
                <th>Email address</th>
                <th>Languages Known</th>
                <th>Preferred Location</th>
                <th>Preferred Days</th>
                <th>Volunteering Preferences</th>
                <th>Other Areas of Volunteering</th>

			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['FirstName'];?></td>
                <td><?php echo $rows['LastName'];?></td>
				<td><?php echo $rows['ResidentialAddress'];?></td>
                <td><?php echo $rows['ProfAddress'];?></td>
				<td><?php echo $rows['chk1'];?></td>
				<td><?php echo $rows['chk2'];?></td>
                <td><?php echo $rows['AcademicQualification'];?></td>
                <td><?php echo $rows['Occupation'];?></td>
                <td><?php echo $rows['Nationality'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['langSpoken'];?></td>
                <td><?php echo $rows['chk3'];?></td>
                <td><?php echo $rows['chk4'];?></td>
                <td><?php echo $rows['chk5'];?></td>
                <td><?php echo $rows['volunteering'];?></td>
                
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
