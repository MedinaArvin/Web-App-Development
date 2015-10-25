function display(){
	var title = document.getElementById('title_input').value;
	var firstname = document.getElementById('fname_input').value;
	var middlename = document.getElementById('mname_input').value;
	var lastname = document.getElementById('lname_input').value;
	var content = document.getElementById('content_input').value;
	var date = new Date();

	alert('Are you sure to display your input data?');

	document.getElementById('title').innerHTML = ' " ' + title + ' " ';
	document.getElementById('fullname').innerHTML = firstname + ' ' + middlename + ' ' + lastname;
	document.getElementById('content').innerHTML = content;
	document.getElementById('date').innerHTML = date;
}