function sri_vali_submit() {
	var deptdate				=	document.getElementById('deptdate');
	var retdate			=	document.getElementById('retdate');
	var traflex				=	document.getElementById('traflex');
	var preair			=	document.getElementById('preair');
	var user_name			=	document.getElementById('user_name');
	var surname			=	document.getElementById('surname');
	var telnum			=	document.getElementById('telnum');
	var mobnum				=	document.getElementById('mobnum');
	var user_email				=	document.getElementById('user_email');
	var re_user_email				=	document.getElementById('re_user_email');
	var address				=	document.getElementById('address');
	var adultpas				=	document.getElementById('adultpas');
	var childpas			=	document.getElementById('childpas');
	var infantpas				=	document.getElementById('infantpas');
	var pas1cre				=	document.getElementById('pas1cre');
	var pas1name				=	document.getElementById('pas1name');
	var pas1sur				=	document.getElementById('pas1sur');
	var pas1dob				=	document.getElementById('pas1dob');
	var hoteltype				=	document.getElementById('hoteltype');
	var premeal				=	document.getElementById('premeal');
	var roomtype				=	document.getElementById('roomtype');
	var chiroom				=	document.getElementById('chiroom');
	var babycot				=	document.getElementById('babycot');
	var landbase				=	document.getElementById('landbase');
	var waterbase				=	document.getElementById('waterbase');
	var airbase				=	document.getElementById('airbase');
	var courses				=	document.getElementById('courses');
	var archaeo				=	document.getElementById('archaeo');
	var temple				=	document.getElementById('temple');
	var spiri				=	document.getElementById('spiri');
	var wellbeing				=	document.getElementById('wellbeing');
	var tourguide				=	document.getElementById('tourguide');
	var foodall				=	document.getElementById('foodall');
	
	if(deptdate.value == '') {
		alert("Please select the Departure Date");
		deptdate.focus();
		return false;
	}
	else if(retdate.value == '') {
		alert("Please select the return date");
		retdate.focus();
		return false;
	}

	else if(traflex.value == '') {
		alert("Please select the travel flexibility");
		traflex.focus();
		return false;
	}

	else if(preair.value == '') {
		alert("Please select the Preferred Airport");
		preair.focus();
		return false;
	}

	else if(user_name.value == '') {
		alert("Please enter your name");
		user_name.focus();
		return false;
	}

	else if(surname.value == '') {
		alert("Please enter the surname");
		surname.focus();
		return false;
	} else if(address.value == '') {
		alert("Please enter the address");
		address.focus();
		return false;
	} else if(telnum.value == '') {
		alert("Please enter the telphone number");
		telnum.focus();
		return false;
	}

	else if(mobnum.value == '') {
		alert("Please enter the mobile number");
		mobnum.focus();
		return false;
	}
	else if(user_email.value == '') {
		alert("Please enter a valid email");
		user_email.focus();
		return false;
	} else if(re_user_email.value == '') {
		alert("Please re-enter the email again");
		re_user_email.focus();
		return false;
	} else if(re_user_email.value != user_email.value) {
		alert("Please enter the above email");
		re_user_email.focus();
		return false;
	}
	
	else if(adultpas.value == '') {
		alert("Please select the adult count");
		adultpas.focus();
		return false;
	} else if(childpas.value == '') {
		alert("Please select the children count");
		childpas.focus();
		return false;
	} else if(infantpas.value == '') {
		alert("Please select the infant count");
		infantpas.focus();
		return false;
	} else if(pas1cre.value == '') {
		alert("Please select the first passenger credentials");
		pas1cre.focus();
		return false;
	} else if(pas1name.value == '') {
		alert("Please enter the first passenger name");
		pas1name.focus();
		return false;
	} else if(pas1sur.value == '') {
		alert("Please enter the first passenger surname");
		pas1sur.focus();
		return false;
	} else if(pas1dob.value == '') {
		alert("Please select the first passenger date of birth");
		pas1dob.focus();
		return false;
	} /*else if(hoteltype.value == '') {
		alert("Please select the hotel type");
		hoteltype.focus();
		return false;
	} else if(premeal.value == '') {
		alert("Please select the preferred meal");
		premeal.focus();
		return false;
	} else if(roomtype.value == '') {
		alert("Please select the room type");
		roomtype.focus();
		return false;
	} else if(chiroom.value == '') {
		alert("Please select the children in separate room");
		chiroom.focus();
		return false;
	} else if(babycot.value == '') {
		alert("Please select the baby cot requirement");
		babycot.focus();
		return false;
	} else if(pas1cre.value == '') {
		alert("Please select the first passenger credentials");
		pas1cre.focus();
		return false;
	} else if(tourguide.value == '') {
		alert("Please select the tour-guide language");
		tourguide.focus();
		return false;
	}*/ 
}


function vali_submit() {
	var creden				=	document.getElementById('creden');
	var user_name			=	document.getElementById('user_name');
	var surname				=	document.getElementById('surname');
	var add_user			=	document.getElementById('add_user');
	var telphone			=	document.getElementById('telphone');
	var mobilenum			=	document.getElementById('mobilenum');	
	var user_email			=	document.getElementById('user_email');
	var re_user_email		=	document.getElementById('re_user_email');
	var adultpas			=	document.getElementById('adultpas');
	var childpas			=	document.getElementById('childpas');
	var infantpas			=	document.getElementById('infantpas');
	var pas1name			=	document.getElementById('pas1name');
	var pas1sur				=	document.getElementById('pas1sur');
	var pas1dob				=	document.getElementById('pas1dob');
	
	if(creden.value == '') {
		alert("Please select the credentials");
		creden.focus();
		return false;
	}
	else if(user_name.value == '') {
		alert("Please enter the name");
		user_name.focus();
		return false;
	}

	else if(surname.value == '') {
		alert("Please enter the surname");
		surname.focus();
		return false;
	} else if(add_user.value == '') {
		alert("Please enter the address");
		add_user.focus();
		return false;
	} else if(telphone.value == '') {
		alert("Please enter the telphone");
		telphone.focus();
		return false;
	} else if(mobilenum.value == '') {
		alert("Please enter the mobile number");
		mobilenum.focus();
		return false;
	} else if(user_email.value == '') {
		alert("Please enter the email");
		user_email.focus();
		return false;
	}
	else if(re_user_email.value == '') {
		alert("Please re-enter the email");
		re_user_email.focus();
		return false;
	} else if(re_user_email.value != user_email.value) {
		alert("Please enter the above email");
		re_user_email.focus();
		return false;
	} else if(adultpas.value == '') {
		alert("Please choose the Adult count");
		adultpas.focus();
		return false;
	}
	else if(childpas.value == '') {
		alert("Please choose the Child count");
		childpas.focus();
		return false;
	}
	else if(infantpas.value == '') {
		alert("Please choose the infant count");
		infantpas.focus();
		return false;
	} else if(pas1name.value == '') {
		alert("Please enter the first passenger name");
		pas1name.focus();
		return false;
	} else if(pas1sur.value == '') {
		alert("Please enter the first passenger surname");
		pas1sur.focus();
		return false;
	} else if(pas1dob.value == '') {
		alert("Please pick the first passenger date of birth");
		pas1dob.focus();
		return false;
	}
}

function combi_submit() {
	
	var deptdate				=	document.getElementById('deptdate');
	var arrdate				=	document.getElementById('arrdate');
	var dubaidays				=	document.getElementById('dubaidays');
	var sridays				=	document.getElementById('sridays');
	var maledays				=	document.getElementById('maledays');
	var southdays				=	document.getElementById('southdays');
	var user_name			=	document.getElementById('user_name');
	var surname				=	document.getElementById('surname');
	var user_email			=	document.getElementById('user_email');
	var mobilenum			=	document.getElementById('mobilenum');
	var landplace			=	document.getElementById('landplace');
	var departure			=	document.getElementById('departure');
	var arrival				=	document.getElementById('arrival');
	var depair				=	document.getElementById('depair');
	var destair				=	document.getElementById('destair');
	var curr				=	document.getElementById('curr');
	var preair				=	document.getElementById('preair');
	var pas1name			=	document.getElementById('pas1name');
	var pas1sur				=	document.getElementById('pas1sur');
	var pas1dob				=	document.getElementById('pas1dob');
	
	if(deptdate.value == '') {
		alert("Please select the departure date");
		deptdate.focus();
		return false;
	} else if(arrdate.value == '') {
		alert("Please select the arrival date");
		arrdate.focus();
		return false;
	} else if(dubaidays.value == '') {
		alert("Please select the Dubai Days");
		dubaidays.focus();
		return false;
	} else if(sridays.value == '') {
		alert("Please select the Srilanka days");
		sridays.focus();
		return false;
	} else if(maledays.value == '') {
		alert("Please select the Male days");
		maledays.focus();
		return false;
	} else if(southdays.value == '') {
		alert("Please select the South India days");
		southdays.focus();
		return false;
	} else if(user_name.value == '') {
		alert("Please enter the name");
		user_name.focus();
		return false;
	}

	else if(surname.value == '') {
		alert("Please enter the surname");
		surname.focus();
		return false;
	}

	else if(user_email.value == '') {
		alert("Please enter the email");
		user_email.focus();
		return false;
	}

	else if(mobilenum.value == '') {
		alert("Please enter the contact number");
		mobilenum.focus();
		return false;
	}

	else if(landplace.value == '') {
		alert("Please enter the land here");
		landplace.focus();
		return false;
	}

	else if(departure.value == '') {
		alert("Please choose the departure");
		departure.focus();
		return false;
	}

	else if(arrival.value == '') {
		alert("Please choose the arrival");
		arrival.focus();
		return false;
	}
	else if(depair.value == '') {
		alert("Please choose the departure airport");
		depair.focus();
		return false;
	}
	else if(destair.value == '') {
		alert("Please enter the destination airport");
		destair.focus();
		return false;
	}
	else if(curr.value == '') {
		alert("Please choose the currency");
		curr.focus();
		return false;
	}
	else if(preair.value == '') {
		alert("Please enter the preferred airline");
		preair.focus();
		return false;
	} else if(pas1name.value == '') {
		alert("Please enter the first passenger name");
		pas1name.focus();
		return false;
	} else if(pas1sur.value == '') {
		alert("Please enter the first passenger surname");
		pas1sur.focus();
		return false;
	} else if(pas1dob.value == '') {
		alert("Please pick the first passenger date of birth");
		pas1dob.focus();
		return false;
	}
}

function showPass(pasvalue) {
	if(pasvalue == 1) {	
		document.getElementById('pashead1').style.display	=	'block';
		document.getElementById('pas1').style.display		=	'block';
		document.getElementById('pashead2').style.display	=	'none';
		document.getElementById('pas2').style.display		=	'none';
		document.getElementById('pashead3').style.display	=	'none';
		document.getElementById('pas3').style.display		=	'none';
		document.getElementById('pashead4').style.display	=	'none';
		document.getElementById('pas4').style.display		=	'none';
		document.getElementById('pashead5').style.display	=	'none';
		document.getElementById('pas5').style.display		=	'none';
	} else if(pasvalue == 2) {	
		document.getElementById('pashead1').style.display	=	'block';
		document.getElementById('pas1').style.display		=	'block';
		document.getElementById('pashead2').style.display	=	'block';
		document.getElementById('pas2').style.display		=	'block';
		document.getElementById('pashead3').style.display	=	'none';
		document.getElementById('pas3').style.display		=	'none';
		document.getElementById('pashead4').style.display	=	'none';
		document.getElementById('pas4').style.display		=	'none';
		document.getElementById('pashead5').style.display	=	'none';
		document.getElementById('pas5').style.display		=	'none';
	} else if(pasvalue == 3) {	
		document.getElementById('pashead1').style.display	=	'block';
		document.getElementById('pas1').style.display		=	'block';
		document.getElementById('pashead2').style.display	=	'block';
		document.getElementById('pas2').style.display		=	'block';
		document.getElementById('pashead3').style.display	=	'block';
		document.getElementById('pas3').style.display		=	'block';
		document.getElementById('pashead4').style.display	=	'none';
		document.getElementById('pas4').style.display		=	'none';
		document.getElementById('pashead5').style.display	=	'none';
		document.getElementById('pas5').style.display		=	'none';
	} else if(pasvalue == 4) {	
		document.getElementById('pashead1').style.display	=	'block';
		document.getElementById('pas1').style.display		=	'block';
		document.getElementById('pashead2').style.display	=	'block';
		document.getElementById('pas2').style.display		=	'block';
		document.getElementById('pashead3').style.display	=	'block';
		document.getElementById('pas3').style.display		=	'block';
		document.getElementById('pashead4').style.display	=	'block';
		document.getElementById('pas4').style.display		=	'block';
		document.getElementById('pashead5').style.display	=	'none';
		document.getElementById('pas5').style.display		=	'none';

	} else if(pasvalue == 5) {	
		document.getElementById('pashead1').style.display	=	'block';
		document.getElementById('pas1').style.display		=	'block';
		document.getElementById('pashead2').style.display	=	'block';
		document.getElementById('pas2').style.display		=	'block';
		document.getElementById('pashead3').style.display	=	'block';
		document.getElementById('pas3').style.display		=	'block';
		document.getElementById('pashead4').style.display	=	'block';
		document.getElementById('pas4').style.display		=	'block';
		document.getElementById('pashead5').style.display	=	'block';
		document.getElementById('pas5').style.display		=	'block';
	} else if(pasvalue == '') {	
		document.getElementById('pashead1').style.display	=	'none';
		document.getElementById('pas1').style.display		=	'none';
		document.getElementById('pashead2').style.display	=	'none';
		document.getElementById('pas2').style.display		=	'none';
		document.getElementById('pashead3').style.display	=	'none';
		document.getElementById('pas3').style.display		=	'none';
		document.getElementById('pashead4').style.display	=	'none';
		document.getElementById('pas4').style.display		=	'none';
		document.getElementById('pashead5').style.display	=	'none';
		document.getElementById('pas5').style.display		=	'none';
	}
}


function showChild(chivalue) {
	if(chivalue == 1) {	
		document.getElementById('chihead1').style.display	=	'block';
		document.getElementById('chi1').style.display		=	'block';
		document.getElementById('chihead2').style.display	=	'none';
		document.getElementById('chi2').style.display		=	'none';
		document.getElementById('chihead3').style.display	=	'none';
		document.getElementById('chi3').style.display		=	'none';
		document.getElementById('chihead4').style.display	=	'none';
		document.getElementById('chi4').style.display		=	'none';
		document.getElementById('chihead5').style.display	=	'none';
		document.getElementById('chi5').style.display		=	'none';
	} else if(chivalue == 2) {	
		document.getElementById('chihead1').style.display	=	'block';
		document.getElementById('chi1').style.display		=	'block';
		document.getElementById('chihead2').style.display	=	'block';
		document.getElementById('chi2').style.display		=	'block';
		document.getElementById('chihead3').style.display	=	'none';
		document.getElementById('chi3').style.display		=	'none';
		document.getElementById('chihead4').style.display	=	'none';
		document.getElementById('chi4').style.display		=	'none';
		document.getElementById('chihead5').style.display	=	'none';
		document.getElementById('chi5').style.display		=	'none';
	} else if(chivalue == 3) {	
		document.getElementById('chihead1').style.display	=	'block';
		document.getElementById('chi1').style.display		=	'block';
		document.getElementById('chihead2').style.display	=	'block';
		document.getElementById('chi2').style.display		=	'block';
		document.getElementById('chihead3').style.display	=	'block';
		document.getElementById('chi3').style.display		=	'block';
		document.getElementById('chihead4').style.display	=	'none';
		document.getElementById('chi4').style.display		=	'none';
		document.getElementById('chihead5').style.display	=	'none';
		document.getElementById('chi5').style.display		=	'none';
	} else if(chivalue == 4) {	
		document.getElementById('chihead1').style.display	=	'block';
		document.getElementById('chi1').style.display		=	'block';
		document.getElementById('chihead2').style.display	=	'block';
		document.getElementById('chi2').style.display		=	'block';
		document.getElementById('chihead3').style.display	=	'block';
		document.getElementById('chi3').style.display		=	'block';
		document.getElementById('chihead4').style.display	=	'block';
		document.getElementById('chi4').style.display		=	'block';
		document.getElementById('chihead5').style.display	=	'none';
		document.getElementById('chi5').style.display		=	'none';

	} else if(chivalue == 5) {	
		document.getElementById('chihead1').style.display	=	'block';
		document.getElementById('chi1').style.display		=	'block';
		document.getElementById('chihead2').style.display	=	'block';
		document.getElementById('chi2').style.display		=	'block';
		document.getElementById('chihead3').style.display	=	'block';
		document.getElementById('chi3').style.display		=	'block';
		document.getElementById('chihead4').style.display	=	'block';
		document.getElementById('chi4').style.display		=	'block';
		document.getElementById('chihead5').style.display	=	'block';
		document.getElementById('chi5').style.display		=	'block';
	} else if(chivalue == '') {	
		document.getElementById('chihead1').style.display	=	'none';
		document.getElementById('chi1').style.display		=	'none';
		document.getElementById('chihead2').style.display	=	'none';
		document.getElementById('chi2').style.display		=	'none';
		document.getElementById('chihead3').style.display	=	'none';
		document.getElementById('chi3').style.display		=	'none';
		document.getElementById('chihead4').style.display	=	'none';
		document.getElementById('chi4').style.display		=	'none';
		document.getElementById('chihead5').style.display	=	'none';
		document.getElementById('chi5').style.display		=	'none';
	}
}


function showInfant(infvalue) {
	if(infvalue == 1) {	
		document.getElementById('infhead1').style.display	=	'block';
		document.getElementById('inf1').style.display		=	'block';
		document.getElementById('infhead2').style.display	=	'none';
		document.getElementById('inf2').style.display		=	'none';
		document.getElementById('infhead3').style.display	=	'none';
		document.getElementById('inf3').style.display		=	'none';
		document.getElementById('infhead4').style.display	=	'none';
		document.getElementById('inf4').style.display		=	'none';
	} else if(infvalue == 2) {	
		document.getElementById('infhead1').style.display	=	'block';
		document.getElementById('inf1').style.display		=	'block';
		document.getElementById('infhead2').style.display	=	'block';
		document.getElementById('inf2').style.display		=	'block';
		document.getElementById('infhead3').style.display	=	'none';
		document.getElementById('inf3').style.display		=	'none';
		document.getElementById('infhead4').style.display	=	'none';
		document.getElementById('inf4').style.display		=	'none';
	} else if(infvalue == 3) {	
		document.getElementById('infhead1').style.display	=	'block';
		document.getElementById('inf1').style.display		=	'block';
		document.getElementById('infhead2').style.display	=	'block';
		document.getElementById('inf2').style.display		=	'block';
		document.getElementById('infhead3').style.display	=	'block';
		document.getElementById('inf3').style.display		=	'block';
		document.getElementById('infhead4').style.display	=	'none';
		document.getElementById('inf4').style.display		=	'none';
	} else if(infvalue == 4) {	
		document.getElementById('infhead1').style.display	=	'block';
		document.getElementById('inf1').style.display		=	'block';
		document.getElementById('infhead2').style.display	=	'block';
		document.getElementById('inf2').style.display		=	'block';
		document.getElementById('infhead3').style.display	=	'block';
		document.getElementById('inf3').style.display		=	'block';
		document.getElementById('infhead4').style.display	=	'block';
		document.getElementById('inf4').style.display		=	'block';
	} else if(infvalue == '') {	
		document.getElementById('infhead1').style.display	=	'none';
		document.getElementById('inf1').style.display		=	'none';
		document.getElementById('infhead2').style.display	=	'none';
		document.getElementById('inf2').style.display		=	'none';
		document.getElementById('infhead3').style.display	=	'none';
		document.getElementById('inf3').style.display		=	'none';
		document.getElementById('infhead4').style.display	=	'none';
		document.getElementById('inf4').style.display		=	'none';
	}
}