function passWord() {
	var testV = 1;
	var pass1 = prompt('Please Enter Your Password',' ');
	while (testV < 3) {
	if (!pass1) 
	history.go(-1);
	if (pass1.toLowerCase() == "aj") {
	alert('You Got it Right!');
	window.open('index2.php');
	break;
	} 
	testV+=1;
	var pass1 = 
	prompt('Access Denied - Password Incorrect, Please Try Again.','Password');
	}
	if (pass1.toLowerCase()!="password" & testV ==3) 
	history.go(-1);
	return " ";
	} 

function showHide() {
    var x = document.getElementById('myDIV');
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}