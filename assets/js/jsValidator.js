function checkDate() {
    "use strict";
	var dateValid=true;
	var tday = document.getElementById('tday').value;

	// get todays date from the operating system
	var today = new Date();

	// grab the day number form the object today
	var dd = today.getDate();

	// grab the month number form the object today
	var mm = today.getMonth()+1;

	// grab the year number(4 digit format) form the object today
	var yyyy = today.getFullYear();

	//Must format todays day number to be two digits
	if (dd < 10) {
		dd = '0' + dd;
	}  // need this in case day number is one digit like 6

	//Must format todays month number to be two digits
	if (mm < 10) {
		mm = '0' + mm;
	}  // need this is month number is 1 digit like 2 for February

	// string concatenation
	// I want todays date (td) to be in the form of 2019-02-14
	//                                              yyyy-mm-dd
	// When I create (td)(today) it will now be in the exact same format as the bday (Birthdate)
	var td = "" + yyyy + "-" + mm + "-" + dd;

	// var travelYear = parseInt(tday.substring(0,4)) + 21;

	//Remember bday is in the format yyyy-mm-dd for example 1995-11-22
	// var legalMonth = bday.substring(5,7);
	//var legalDay   = bday.substring(8);
	//var legalDate = "" + legalYear + "-" + legalMonth + "-" + legalDay;

	//console.log("Users birth date   = " +bday);
	//console.log("Legal age to drink = " +legalDate);
	//console.log("Todays date        = " +td);

	//check to see if today(td) is equal or less than day they traveled
	if (td > tday){
		document.getElementById('dateFeedback').innerHTML="";
		document.getElementById("tday").style.border = null;
		document.getElementById("dateFeedback").style = null;
		dateValid = true;
	}
	else {
		document.getElementById('dateFeedback').innerHTML = "  ** Warning:You are disclosing that you are a time traveler **  ";
		document.getElementById("tday").style.borderColor = "red";
		document.getElementById("dateFeedback").style.backgroundColor = 'pink';
		dateValid = false;
	} // end of else path

    console.log("in check date " + dateValid);
	return (dateValid);
}//end of function to check if the users is a time traveler





function validateRate(){
	"use strict";
    var rate = true;
	if (document.getElementById("rate").value == "Select") {
		document.getElementById("rate").style.borderColor = "red";
		document.getElementById("rate").style.color = "red";
		document.getElementById("rate").style.backgroundColor = 'pink';
		rate = false;
	} else {
		document.getElementById("rate").style = null;
		document.getElementById("rate").style="width:5em;";
		rate = true;
	}
    console.log("in rate " + rate);
	return (rate);
}

function validateGroup(){
	"use strict"
    var ispicked = true;
	if (document.getElementById("group").value == "Select") {
		document.getElementById("group").style.borderColor = "red";
		document.getElementById("group").style.color = "red";
		document.getElementById("group").style.backgroundColor = 'pink';
		ispicked = false;
	} else {
		document.getElementById("group").style = null;
		document.getElementById("group").style="width:5em;";
		ispicked = true;
	}
    console.log("in group " + ispicked)
	return (ispicked);
}




function checkIfRadioButtonSelected(){
    "use strict";
    var isChecked = false;
	var len = document.getElementsByName('attractions').length;
	var choices = new Array();
    console.log("just after array");
	for (var i=0; i<len; i++) 
	{
		console.log("In the for loop");
        if (document.getElementsByName('attractions')[i].checked)
		{	
			choices.push(document.getElementsByName('attractions')[i].value);
		}
        console.log("array choices " + choices[0]);
	}//end of for loop

    if (choices.length > 0){
        isChecked = true;
        document.getElementsByTagName('fieldset')[0].style = null;
        document.getElementsByTagName('legend')[0].style= null;
    }
    else{
        document.getElementsByTagName('fieldset')[0].style.borderColor = 'red';
        document.getElementsByTagName('legend')[0].style.color = 'red';
    }
    console.log("in place " + isChecked);
    return isChecked;
    
}//end of function checkIfRadioButtonSelected


function validateForm() {
    "use strict";
    var isvalid = true;

    if (document.getElementById("name").value == "") {
        document.getElementById("name").style.borderColor = "red";
        document.getElementById("name").style.backgroundColor = 'pink';
        isvalid = false;
    } else {
        document.getElementById("name").style = null;
        isvalid = true;
    }
    
    var GroupNumPicked = false;
	var TimeTraveler = false;
    var Rating = false;
    var Place = false;

	GroupNumPicked = validateGroup();
	TimeTraveler = checkDate();
    Rating = validateRate();
    Place = checkIfRadioButtonSelected();
	console.log(" is valid = " + isvalid + " GroupNumPicked = " +
                GroupNumPicked + " TimeTraveler = " + TimeTraveler +
            " Rating = " + Rating + " Place " + Place);
	//alert("Please hold screen");
    return (isvalid && GroupNumPicked && TimeTraveler && Rating && Place);
}