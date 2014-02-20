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
	}

	else if(telnum.value == '') {
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
	}
	else if(re_user_email.value == '') {
		alert("Please re-enter the email again");
		re_user_email.focus();
		return false;
	}
	else if(address.value == '') {
		alert("Please enter the address");
		address.focus();
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
	} else if(hoteltype.value == '') {
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
	} else if(pas1cre.value == '') {
		alert("Please select the first passenger credentials");
		pas1cre.focus();
		return false;
	} else if(landbase.value == '') {
		alert("Please select the land-based adventure");
		landbase.focus();
		return false;
	} else if(waterbase.value == '') {
		alert("Please select the water-based adventure");
		waterbase.focus();
		return false;
	} else if(airbase.value == '') {
		alert("Please select the air-based adventure");
		airbase.focus();
		return false;
	} else if(courses.value == '') {
		alert("Please select the courses");
		courses.focus();
		return false;
	} else if(archaeo.value == '') {
		alert("Please select the Archaeological sites");
		archaeo.focus();
		return false;
	} else if(temple.value == '') {
		alert("Please select the temple");
		temple.focus();
		return false;
	} else if(spiri.value == '') {
		alert("Please select the Spiritual");
		spiri.focus();
		return false;
	} else if(wellbeing.value == '') {
		alert("Please select the physical well being");
		wellbeing.focus();
		return false;
	} else if(tourguide.value == '') {
		alert("Please select the tour-guide language");
		tourguide.focus();
		return false;
	} else if(foodall.value == '') {
		alert("Please enter the food allergies if any or not");
		foodall.focus();
		return false;
	}
}


function vali_submit() {
	var creden				=	document.getElementById('creden');
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