function userValidation() {
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	if (username == "Prudhvi" && password == "Prudhvi@2004") {
		alert('Login sucessfully!!');
	}
	else {
		alert('Please enter valid username/password!');
	}
}