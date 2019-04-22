// const verifyPassword=()=>{
// 	let passwd = document.getElementById('password');
// 	if(passwd.length < 6 && !isNaN(passwd.value)){
// 		alert("The length of password must be at least 6, and at least contain 1 letter.");
// 		return false;
// 	}
//
// 	return true;
// }
//
// const verifyAccount=()=>{
// 	return document.getElementById('account').length >= 3;
// }
//
// const validateForm=()=>{
// 	return verifyAccount() && verifyPassword();
// }

function verifyPassword() {
    let passwd = document.getElementById('password');
    console.log(passwd.value.length);
    console.log(passwd.value);
    if(passwd.value.length > 6 && isNaN(passwd.value)){

        console.log(passwd)
        return true;
    }
    document.getElementById("password").style.borderColor="red";
    document.getElementById("password").style.backgroundColor = 'pink';
    alert("The length of password must be at least 6, and at least contain 1 letter.");
    console.log(passwd);

    return false;
}

function verifyAccount() {
    // return document.getElementById('uname').length >= 3;

    var isvalid=true;
// alert(document.getElementById("visitDate").value);
    console.log(document.getElementById("uname").value.length);

    if(document.getElementById("uname").value.length <3){
        document.getElementById("uname").style.borderColor="red";
        document.getElementById("uname").style.backgroundColor = 'pink';
        alert("The length of username must be at least 3.");
        isvalid=false;
    }
    else
    {
        //  document.getElementById("visitor").style.border = null;
        //document.getElementById("visitor").style.backgroundColor = 'white';
        document.getElementById("uname").style = null;
    }
    return isvalid;
}

function validateForm() {
    return verifyAccount() && verifyPassword();
}