<!-- Desciption: COS10020 Assignment2 - Form Post to SQL Code -->
<!-- Author: Lucas Moore -->
<!-- Date: 29/08/17 -->
<!-- Validated: CLEAR 05/09/17 -->

<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="COS10020 Assignment2 - Display Table" />
  <meta name="keywords"    content="Registration Form, PHP, SQL, Table" />
  <meta name="author"      content="Lucas Moore" />
	<title>Display Users Table</title>
</head>

<?php
	require_once ("settings.php");
	$conn = @mysqli_connect(
		$host,
		$user,
		$pwd,
		$sql_db
);

	// Checks if connection is successful
	if (!$conn) {
		// Displays an error message
		echo "<p>Database connection failure</p>"; 
	} else {
		// Upon successful connection
		$sql_table="users";
		// Set up the SQL command to add the data into the table
		$query = "SELECT jobID, fName, lName, phone, email, office, desk, computer, problem, comment FROM users ORDER BY jobID";
		// execute the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		// checks if the execution was successful
		if(!$result) {
			echo "<p>Something is wrong with ", $query, "</p>";
			} else {
				// Display the retrieved records
				echo "<table border=\"1\">";
				echo "<tr>"
				."<th scope=\"col\">Job ID Number</th>" 
				."<th scope=\"col\">First Name</th>" 
				."<th scope=\"col\">Last Name</th>"
				."<th scope=\"col\">Phone Number</th>"
				."<th scope=\"col\">Email</th>"
				."<th scope=\"col\">Office</th>"
				."<th scope=\"col\">Desk Number</th>"
				."<th scope=\"col\">Computer</th>"
				."<th scope=\"col\">Problem</th>"
				."<th scope=\"col\">Description</th>"
				."</tr>";
				// retrieve current record pointed by the result pointer
				while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>",$row["jobID"],"</td>";
					echo "<td>",$row["fName"],"</td>"; 
					echo "<td>",$row["lName"],"</td>";
					echo "<td>",$row["phone"],"</td>";
					echo "<td>",$row["email"],"</td>"; 
					echo "<td>",$row["office"],"</td>";
					echo "<td>",$row["desk"],"</td>";
					echo "<td>",$row["computer"],"</td>"; 
					echo "<td>",$row["problem"],"</td>";
					echo "<td>",$row["comment"],"</td>";						
					echo "</tr>";
				}
			echo "</table>";
			// Frees up the memory, after using the result pointer
			mysqli_free_result($result);
		} // if successful query operation
		// close the database connection
		mysqli_close($conn);
	} // if successful database connection
?>