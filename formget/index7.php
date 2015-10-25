<?php
	$fname = empty($_GET['fname']) ? 'Undefine' : $_GET['fname'];
	$mname = empty($_GET['mname']) ? 'Undefine' : $_GET['mname'];
	$lname = empty($_GET['lname']) ? 'Undefine' : $_GET['lname'];
	$fullname = ($fname .' '.$mname.' '.$lname);
	$gender = $_GET['gender'];
	$month = $_GET['month'];
	$day = $_GET['day'];
	$year = $_GET['year'];
	$program = $_GET['program'];
	$type = $_GET['type'];
	$address = $_GET['address'];
?>

<html>
	<head></head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<div id = 'what'>.
		<form action = 'index7.php' method = 'get'>
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
							<select name='program' >
								<option>-------</option>
								<option value = 'ABBROAD' <?php if($program == 'ABBROAD') echo 'selected'?>>AB Broadcasting</option>
								<option value = 'BSIS'<?php if($program == 'BSIS') echo 'selected'?>>B.S. Information System</option>
								<option value = 'BSA'<?php if($program == 'BSA') echo 'selected'?>>B.S. Accountancy</option>
								<option value = 'BSAT'<?php if($program == 'BSAT') echo 'selected'?>>B.S. Accounting Technology</option>
								<option value = 'ACT'<?php if($program == 'ACT') echo 'selected'?>>Associate in Computer Technology</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan = '3'>Student type:</td>
				</tr>
				<tr>
					<td colspan = '3'>
						<input type = 'radio' name = 'type' value = 'FULLscholar' <?php if($type == 'FULLscholar') echo 'checked' ?>>Full Scholar</input><br>
						<input type = 'radio' name = 'type' value = 'PARTIALscholar' <?php if($type == 'PARTIALscholar') echo 'checked' ?>>Partial Scholar</input><br>
						<input type = 'radio' name = 'type' value = 'FULLpayee' <?php if($type == 'FULLpayee') echo 'checked' ?>>Full Payee</input>
					</td>
				</tr>
				<tr>
					<td colspan = '3'>Address:</td>
				</tr>
				<tr>
					<td colspan = '3'>
						<textarea name = 'address' cols='83'><?php echo $address; ?></textarea>
					</td>
				</tr>
				<tr>
					<td colspan = '3'>
						<hr>
					</td>
				</tr>
				<tr>
					<td colspan = '3'>
						Fullname:
						<strong> <?php echo $fullname ?> </strong><br>
						Gender:
						<strong> <?php echo $gender ?> </strong><br>
						Birthday:
						<strong> <?php echo $month.' '.$day.' '.$year ?> </strong><br>
						Program:
						<strong> <?php echo $program ?> </strong><br>
						Student Type:
						<strong> <?php echo $type ?> </strong><br>
						Address:
						<strong> <?php echo $address ?> </strong><br>
					</td>
				</tr>
				<tr>
					<td colspan = '3'>
						<button><a href="index.php"><<< back to first page</a></button>
					</td>
				</tr>
			</table>
			</div>
		</form>
	</body>
</html>
