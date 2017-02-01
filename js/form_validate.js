function validateFormOnSubmit(Form_validate) {

	var error_message = "";

	// Different Functions for validation of different input

	error_message  = validGroomFname(Form_validate.groom_fname);

	error_message  = validGroomLname(Form_validate.groom_lname);

	error_message  = validBrideFname(Form_validate.bride_fname);

	error_message  = validBrideLname(Form_validate.bride_lname);

	error_message  = validUsername(Form_validate.username);

	error_message = validPassword(Form_validate.password);

	error_message  = validConfirmPassword(Form_validate.confirm_pass);

	error_message  = validDate(Form_validate.date);

	error_message  = validNo(Form_validate.location_nil);

	error_message  = validYes(Form_validate.location_nay);

	error_message  = validAddress(Form_validate.address);

	error_message  = validNState(Form_validate.state);

	if (error_message != "") {

	alert("Some fields have invalid entry :\n" + error_message);

	return false;

	}

	return true;

}