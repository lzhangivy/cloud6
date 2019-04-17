//validate name
const validateName=()=>{
	let name = document.getElementById("name").value;
	if(name === ""){
		document.getElementById("nameMsg").innerHTML = "Please enter your name.";
		return false;
	}else{
		return true;
	}
}

//validate comment
const validateComment=()=>{
	let comment = document.getElementById("comment").value;
	if(comment === ""){	
	    document.getElementById("commentMsg").innerHTML = "The comment can't be empty.";
		return false;
	}else{
		return true;
	}
}

//validate form, include name and comment.
function validateForm(){
	document.getElementById("nameMsg").innerHTML = "";
	document.getElementById("commentMsg").innerHTML = "";
	let check = true;
	if(!validateName())
		check = false;
	
	if(!validateComment())
		check = false;
	
	return check;
}