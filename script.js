// Menu
function openSlideMenu(){
	document.getElementById('sd-menu').style.width = '250px';
	document.getElementById('main').style.marginLeft = '250px';
}

function closeSlideMenu(){
	document.getElementById('sd-menu').style.width = '0px';
	document.getElementById('main').style.marginLeft = '0px';
}

openSlideMenu();
closeSlideMenu();

// datw
document.getElementById('dates').innerHTML = "Today: " + new Date();

// Sign-up Validation
function validate(){
	var name = document.getElementById('name').value;
	var name_length = name.length; 
	var email = document.getElementById('name').value;
	var password = document.getElementById('password').value; 
	var password_length = password.length;
	var regex1 = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var regex2 = /([a-z].*[A-Z])|([A-Z].*[a-z])([0-9])/;

	// if(name == "" && email == "" && password == ""){
	// 	document.getElementById('submit').disabled= true;
	// }else if(name_length <= 6){
	// 	document.getElementById('submit').disabled= true;
	// }else if(password_length <= 7){
	// 	document.getElementById('submit').disabled= true;
	// }else{
	// 	document.getElementById('submit').disabled= false;
	// }

	if(name != "" && email != "" && password != "" && !(name_length <= 6) && !(password_length <= 7)){
		document.getElementById('submit').disabled= false;
	}else{
		document.getElementById('submit').disabled= true;
		alert("Fill all fields. Reload page to enable register");
	}

}


// // SIDEBAR
// function changeColor(){
// 	document.getElementById('sd-link1').style.background = "white";
// 	document.getElementById('sd-link1').style.color = "blue";
// }
// function changeColor2(){
// 	document.getElementById('sd-link2').style.background = "white";
// 	document.getElementById('sd-link2').style.color = "blue";
// }

// function changeColor3(){
// 	document.getElementById('sd-link3').style.background = "white";
// 	document.getElementById('sd-link3').style.color = "blue";
// }
// function changeColor4(){
// 	document.getElementById('sd-link4').style.background = "white";
// 	document.getElementById('sd-link4').style.color = "blue";
// }

// function changeColor5(){
// 	document.getElementById('sd-link5').style.background = "white";
// 	document.getElementById('sd-link5').style.color = "blue";
// }
// function changeColor6(){
// 	document.getElementById('sd-link6').style.background = "white";
// 	document.getElementById('sd-link6').style.color = "blue";
// }
// function reverseColor1(){
// 	document.getElementById('sd-link1').style.background = "#007BFF";
// 	document.getElementById('sd-link1').style.color = "white";
// }
// function reverseColor2(){
// 	document.getElementById('sd-link2').style.background = "#007BFF";
// 	document.getElementById('sd-link2').style.color = "white";
// }
// function reverseColor3(){
// 	document.getElementById('sd-link3').style.background = "#007BFF";
// 	document.getElementById('sd-link3').style.color = "white";
// }
// function reverseColor4(){
// 	document.getElementById('sd-link4').style.background = "#007BFF";
// 	document.getElementById('sd-link4').style.color = "white";
// }
// function reverseColor5(){
// 	document.getElementById('sd-link5').style.background = "#007BFF";
// 	document.getElementById('sd-link5').style.color = "white";
// }
// function reverseColor6(){
// 	document.getElementById('sd-link6').style.background = "#007BFF";
// 	document.getElementById('sd-link6').style.color = "white";
// }


// changeColor();