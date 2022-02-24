	//Validtion Code For Inputs

	var names = document.forms['form']['names'];
	var email = document.forms['form']['email'];
	var phone = document.forms['form']['phone'];


	var name_error = document.getElementById('name_error');
	var email_error = document.getElementById('email_error');
	var phone_error = document.getElementById('phone_error');


	names.addEventListener('textInput', name_Verify);
	email.addEventListener('textInput', email_Verify);
	phone.addEventListener('textInput', phone_Verify);


	function validated() {
	    if (names.value.length < 3) {
	        names.style.border = "1px solid red";
	        name_error.style.display = "block";
	        names.focus();
	        return false;
	    }
	    if (email.value.length < 9) {
	        email.style.border = "1px solid red";
	        email_error.style.display = "block";
	        email.focus();
	        return false;
	    }
	    if (phone.value.length < 6) {
	        phone.style.border = "1px solid red";
	        phone_error.style.display = "block";
	        phone.focus();
	        return false;
	    }


	}

	function name_Verify() {
	    if (names.value.length >= 4) {
	        names.style.border = "1px solid silver";
	        name_error.style.display = "none";
	        return true;
	    }
	}

	function email_Verify() {
	    if (email.value.length >= 8) {
	        email.style.border = "1px solid silver";
	        email_error.style.display = "none";
	        return true;
	    }
	}

	function phone_Verify() {
	    if (phone.value.length >= 5) {
	        phone.style.border = "1px solid silver";
	        phone_error.style.display = "none";
	        return true;
	    }
	}