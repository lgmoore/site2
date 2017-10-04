/*
<!-- Desciption: COS10020 Assignment 2 - Main Javascript Sheet -->
<!-- Author: Lucas Moore -->
<!-- Date: 02/08/17 -->
*/

console.log("script loaded"); // Shows if Script loaded correctly

function showTip() { // Shows Tooltip for Job ID
	var e = this.name;

	if (e == "jID") {
		tooltipJID.style.display = "inline";
	}
}

function hideTip() { // Hides Tooltip for Job ID
	var e = this.name;

	if (e == "jID") {
		tooltipJID.style.display = "none";
	}
}

function validate() {
// Link Elements
	var jid = document.getElementById("jobid").value;
	var Fname = document.getElementById("Fname").value;
	var Lname = document.getElementById("Lname").value;
	var phone = document.getElementById("phone").value;
	var email = document.getElementById("email").value;
	var office = document.getElementById("office").value;
	var desk = document.getElementById("desk").value;
	var computer = document.getElementById("comp").value;
	var problem = document.getElementById("problem").value;

	var errMsg = ""; // Stores Error Message
	var result = true;	// Assume no Errors
	var word_pattern = /^[a-zA-Z ]+$/;	// Regular Expression for only Letters and Spaces
	var is_number = /^\d+$/; // Regular Expression for only Numbers

// Job ID Validation
	var idLength = jid.length;

	if (jid == ""){ // Checks if field empty
		errMsg += "Please enter Job Number ID \n";
		jidErrorTip.innerHTML = "<- empty\n";
	}
	else{
		if (idLength != 5) { // Checks Job ID is 5 digits long
			errMsg += "ID must be 5 digits long\n";
			jidErrorTip.innerHTML = "<- invalid\n";
		}
		if (! jid.match (is_number)){ // Checks Job ID is all Numbers
			errMsg += "ID can only be numbers\n";
			jidErrorTip.innerHTML = "<- invalid\n";
		}
		else{
			jidErrorTip.innerHTML = "";
		}
	}
	

// Phone Number Validation
	var phoneLength = phone.length;

	if (phone == ""){ // Checks if field empty
		errMsg += "Please enter Mobile Phone Number\n";
		phoneErrorTip.innerHTML = "<- empty\n";
	}
	else{
		if (phoneLength != 10) { // Checks Phone Number is 10 digits long
			errMsg += "Phone Number must be 10 digits long\n";
			phoneErrorTip.innerHTML = "<- invalid\n";
		}
		if (! phone.match (is_number)){ // Checks Phone Number is all Numbers
			errMsg += "Phone Number can only be numbers\n";
			phoneErrorTip.innerHTML = "<- invalid\n";
		}
		else{
			phoneErrorTip.innerHTML = "";
		}
	}

// Name Validation
	if (Fname == ""){ // Checks if field empty
		errMsg += "Please enter your First Name \n";
		fnameErrorTip.innerHTML = "<- empty\n";
	}
	else{
		if (! Fname.match (word_pattern)) { // Checks First Name only conatians letters and spaces
			errMsg += "First Name can only contain Letters\n";
			fnameErrorTip.innerHTML = "<- invalid\n";
		}
		else{
			fnameErrorTip.innerHTML = "";
		}
	}

	if (Lname == ""){ // Checks if field empty
		errMsg += "Please enter your Last Name \n";
		lnameErrorTip.innerHTML = "<- empty\n";
	}
	else{
		if (! Lname.match (word_pattern)) { // Checks Last Name only conatians letters and spaces
			errMsg += "Last Name can only contain Letters\n";
			lnameErrorTip.innerHTML = "<- invalid\n";
		}
		else{
			lnameErrorTip.innerHTML = "";
		}
	}

// Email Validation
	var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; // Regular Expression for Email Address

	if (email == ""){ // Checks if field empty
		errMsg += "Please enter your Email \n";
		emailErrorTip.innerHTML = "<- empty\n";
	}	
	else{
		if (! email.match (email_pattern)) { // Checks Email is a valid email address
			errMsg += "Email must be a valid address\n";
			emailErrorTip.innerHTML = "<- invalid\n";
		}
		else{
			emailErrorTip.innerHTML = "";
		}
	}

// Office Validation
	if (office == ""){ // Checks if field empty
		errMsg += "Please select an Office \n";
		officeErrorTip.innerHTML = "<- empty\n";
	}

// Desk Validation
	var deskLength = desk.length;
	if (desk == ""){ // Checks if field empty
		errMsg += "Please enter Desk Number \n";
		deskErrorTip.innerHTML = "<- empty\n";
	}
	else{
		if (! desk.match (is_number)){ // Checks Desk is all Numbers
			errMsg += "Desk can only be numbers\n";
			deskErrorTip.innerHTML = "<- invalid\n";
		}
		if (deskLength > 4) { // Checks Desk Number not greater then 4 digits long
			errMsg += "Desk Number cannot be longer then 4 digits\n";
			deskErrorTip.innerHTML = "<- invalid\n";
		}
		else{
			deskErrorTip.innerHTML = "";
		}
	}	

// Computer Validation
	var compLength = computer.length;
	if (computer == ""){ // Checks if field empty
		errMsg += "Please enter Computer Number \n";
		computerErrorTip.innerHTML = "<- empty\n";
	}
	else{
		if (! computer.match (is_number)){ // Checks Computer is all Numbers
			errMsg += "Computer can only be numbers\n";
			computerErrorTip.innerHTML = "<- invalid\n";
		}
		if (compLength > 3) { // Checks Desk Number not greater then 3 digits long
			errMsg += "Computer Number cannot be longer then 3 digits\n";
			computerErrorTip.innerHTML = "<- invalid\n";
		}
		else{
			computerErrorTip.innerHTML = "";
		}
	}	

// Problem Select Validation
	if (problem == ""){ // Checks if field empty
		errMsg += "Please select a Problem \n";
		problemErrorTip.innerHTML = "<- empty\n";
	}

// If there is an Error
	if (errMsg != "") {
		alert (errMsg); // Display Error Messages
		result = false;
	} 

	return result;
}

function init() {
	console.log("inti1");
// Link elements for Tooltip
	tooltipJID = document.getElementById("tooltipID");
	jid_tool = document.getElementById("jobid");

	jid_tool.onmouseover = showTip; // If Job ID Box is Moused Over Shows Tooltip
	jid_tool.onmouseout = hideTip; // Hides Tooltip

  	var logForm = document.getElementById("ITform"); // Link Form 

  	logForm.onsubmit = validate; // Runs Validation Function when Submit Buttons is Pressed
}

window.addEventListener("load", init, false); // Runs init(main function) on page load