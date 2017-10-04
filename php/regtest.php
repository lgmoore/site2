<!-- Desciption: COS10020 Assignment2 - Form Post to SQL Code -->
<!-- Author: Lucas Moore -->
<!-- Date: 29/08/17 -->
<!-- Validated: CLEAR 05/09/17 -->

<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="COS10020 Assignment2 - Form Submit" />
  <meta name="keywords"    content="Registration Form, Validation, PHP, SQL" />
  <meta name="author"      content="Lucas Moore" />
	<title>Registering Form</title>
</head>
<body>
<h1>COS10020 Assignment2 - Registering Data</h1>
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
		echo "<p>Database connection failure</p>"; // not in production script
		include("../inc/return.html"); 
	} else {
		// Upon successful connection
		$sql_table="users";
		$jID = trim($_POST["jID"]);
		$Fname = trim($_POST["fName"]);
		$Lname = trim($_POST["lName"]);
		$phone = trim($_POST["phone"]);
		$email = trim($_POST["email"]);		
		$office = trim($_POST["office"]);
		$desk = trim($_POST["desk"]);
		$comp = trim($_POST["comp"]);
		$problem = trim($_POST["problem"]);
		$comment = trim($_POST["comment"]);

		// Set up the SQL command to add the data into the table
		$query = "INSERT into users (jobID, fName, lName, phone, email, office, desk, computer, problem, comment) values ('$jID', '$Fname', '$Lname', '$phone', '$email', '$office', '$desk', '$comp', '$problem', '$comment')";
		// execute the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		// checks if the execution was successful
		if(!$result) {
			echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
			include("../inc/return.html"); 
			} else {
				// display succesful message
				echo "<p class=\"ok\"> Succesfully added New User to record</p>";
				include("../inc/return.html");
			}
		// close the database connection
		mysqli_close($conn);
	} // if successful database connection
?>
</body> </html>