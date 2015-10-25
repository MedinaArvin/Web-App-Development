<?php

//tertiary operator
$firstName = empty($_POST['firstname']) ? 'Undefined' : $_POST['firstname'] ; 
$middleName = empty($_POST['middlename']) ? 'Undefined' : $_POST['middlename'];
$lastName = empty($_POST['lastname']) ? 'Undefined' : $_POST['lastname'];
$gender = empty($_POST['gender']) ? 'Undefined' : $_POST['gender'];1
//birthday
$month = empty($_POST['month']) ? 'Undefined' : $_POST['month'];
$day = empty($_POST['day']) ? 'Undefined' : $_POST['day'];
$year = empty($_POST['year']) ? 'Undefined' : $_POST['year'];
//program and student type
$program = empty($_POST['program']) ? 'Undefined' : $_POST['program'];
$studentType = empty($_POST['type']) ? 'Undefined' : $_POST['type'];
$address = empty($_POST['address']) ? 'Undefined' : $_POST['address'];
 ?>
 <html>
 <head>
 	<title></title>
 </head>
 <body>	
<table border='1'>
	<tr>
		<td>Firstname: <strong><?php echo $firstName; ?></strong></td>
	</tr>
 	<tr>
		<td>Middlename:<strong><?php echo $middleName; ?></strong><br /></td> 
	</tr>
	<tr>
		<td>Lastname: <strong>	<?php echo $lastName; ?></strong><br /></td>
	</tr>
	<tr>
		<td>Gender: <strong><?php echo $gender; ?></strong><br /></td>
	</tr>
	<tr>
		<td>Birthday: <strong>	<?php echo $month." ".$day." ".$year; ?></strong><br /></td>
	</tr>
	<tr>
		<td>Program: <strong><?php echo $program; ?></strong><br /></td>
	</tr>
	<tr>
		<td>Address: <strong><?php echo $address; ?></strong></td>
	</tr>
	
 </table>
  </body>
 </html>