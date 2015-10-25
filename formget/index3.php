<?php
	$fname = $_GET['fname'];
	$mname = $_GET['mname'];
	$lname = $_GET['lname'];
	$gender = $_GET['gender'];
?>

<html>
	<head></head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<div id = 'what'>
		<form action = 'index4.php' method = 'get'>
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
					<td><input type = 'radio' name = 'gender' value = 'male'  <?php if($gender == 'male') echo 'checked'?>>Male</input></td>
					<td><input type = 'radio' name = 'gender' value = 'female' <?php if($gender == 'female') echo 'checked'?>>Female</input></td>
				</tr>
				<tr>
					<td colspan ='3'>Birthday:</td>
				</tr>
				<tr>
					<td>Month 
						<select name='month'>
						<option>---</option>
						<option value='January'>January</option>
						<option value='February'>February</option>
						<option value='March'>March</option>
						<option value='April'>April</option>
						<option value='May'>May</option>
						<option value='June'>June</option>
						<option value='July'>July</option>
						<option value='August'>August</option>
						<option value='September'>September</option>
						<option value='October'>October</option>
						<option value='November'>November</option>
						<option value='December'>December</option>	
						</select>
					</td>
					<td>Day
						<select name='day'>
						<option>---</option>
						<?php 	
							for ($i=1; $i<32; $i++): ?>
							<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>							
						<?php endfor; ?>
						</select>	
					</td>
					<td>Year
						<select name='year'>
							<option>---</option>
							<?php 	
								for ($i=1990; $i<2015; $i++): ?>
								<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>							
							<?php endfor; ?>
						</select>	
					</td>
				</tr>
				<tr>
					<td colspan = '3'><button type = 'submit'>next >>></button></td>
				</tr>
			</table>
		</form>
		</div>
	</body>
</html>
