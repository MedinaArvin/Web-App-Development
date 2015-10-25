<?php
	$fname = $_GET['fname'];
	$mname = $_GET['mname'];
	$lname = $_GET['lname'];
	$gender = $_GET['gender'];
	$month = $_GET['month'];
	$day = $_GET['day'];
	$year = $_GET['year'];
?>

<html>
	<head></head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<div id = 'what'>
		<form action = 'index5.php' method = 'get'>
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
				<td><input type = 'radio' name = 'gender' value = 'male' <?php if($gender == 'male') echo 'checked' ?>>Male</input></td>
				<td><input type = 'radio' name = 'gender' value = 'female' <?php if($gender == 'female') echo 'checked' ?>>Female</input></td>
			</tr>
			<tr>
				<td>Birthday:</td>
			</tr>
			<tr>
				<td>Month 
					<select name='month' value = '<?php echo $month; ?>'>	
					<option>---</option>
					<option value='January' <?php if($month == 'January') echo 'selected' ?>>January</option>
					<option value='February' <?php if($month == 'February') echo 'selected' ?>>February</option>
					<option value='March' <?php if($month == 'March') echo 'selected' ?>>March</option>
					<option value='April' <?php if($month == 'April') echo 'selected' ?>>April</option>
					<option value='May' <?php if($month == 'May') echo 'selected' ?>>May</option>
					<option value='June' <?php if($month == 'June') echo 'selected' ?>>June</option>
					<option value='July' <?php if($month == 'July') echo 'selected' ?>>July</option>
					<option value='August' <?php if($month == 'August') echo 'selected' ?>>August</option>
					<option value='September' <?php if($month == 'September') echo 'selected' ?>>September</option>
					<option value='October' <?php if($month == 'October') echo 'selected' ?>>October</option>
					<option value='November' <?php if($month == 'November') echo 'selected' ?>>November</option>	
					<option value='December' <?php if($month == 'December') echo 'selected' ?>>December</option>	
					</select>
					</td>
					<td>Day
						<select name='day'>
						<option>---</option>
						<?php 	
							for ($i=1; $i<32; $i++): ?>
							<option value="<?php echo $i; ?>" <?php if($day == $i ) echo 'selected' ?>> <?php echo $i; ?> </option>							
						<?php endfor; ?>
						</select>	
					</td>
					<td>Year
						<select name='year'>
							<option>---</option>
							<?php 	
								for ($i=1990; $i<2015; $i++): ?>
								<option value="<?php echo $i; ?>" <?php if($year == $i ) echo 'selected' ?>> <?php echo $i; ?> </option>							
							<?php endfor; ?>
						</select>	
					</td>
				</tr>
				<tr>
					<td>Program</td>
					<td colspan = '2'>
						<select name='program'>
							<option>-------</option>
							<option value = 'ABBROAD'>AB Broadcasting</option>
							<option value = 'BSIS'>B.S. Information System</option>
							<option value = 'BSA'>B.S. Accountancy</option>
							<option value = 'BSAT'>B.S. Accounting Technology</option>
							<option value = 'ACT'>Associate in Computer Technology</option>
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
