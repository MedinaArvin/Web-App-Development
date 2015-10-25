<?php
	$fname = $_GET['fname'];
	$mname = $_GET['mname'];
	$lname = $_GET['lname'];
?>

<html>
	<head></head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<div id = 'what'>
		<form action = 'index3.php' method = 'get'>
			<table border='1'>
				<tr>
					<td>First Name</td>
					<td>Middle Name</td>
					<td>Last Name</td>
				</tr>
				<tr>
					<td><input type = 'text' name = 'fname' placeholder = 'firstname...' value = '<?php echo $fname; ?>'></input></td>
					<td><input type = 'text' name = 'mname' placeholder = 'middlename...' value = '<?php echo $mname; ?>'></input></td>
					<td><input type = 'text' name = 'lname' placeholder = 'lastname...' value = '<?php echo $lname; ?>'></input></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type = 'radio' name = 'gender' value = 'male'>Male</input></td>
					<td><input type = 'radio' name = 'gender' value = 'female'>Female</input></td>
				</tr>
				<tr>
					<td colspan = '3'><button type = 'submit'>next >>></button></td>
				</tr>
			</table>
		</form>
		</div>
	</body>
</html>
