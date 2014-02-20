	var isIE = document.all?true:false;
	document.onmousemove = getMousePosition;
	function getMousePosition(e) {
	  var _x;
	  var _y;
	  if (!isIE) {
		_x = e.pageX;
		_y = e.pageY;
	  }
	  if (isIE) {
		_x = event.clientX + document.body.scrollLeft;
		_y = event.clientY + document.body.scrollTop;
	  }

	widthX=_x-650;
	heightX=_y-50;

	  return true;
	}
	


function advsearchDelete(rows,passw) {
	
	//alert(document.getElementById('searchValue').value);
	//alert(document.getElementById('searchKey').value);
	var k =0;
	var serialName = '';

	if(rows != 1){
		for (i=0;i<rows;i++) 
		{		
				if (document.myForm.severnId[i].checked==true)
				{ 
					serialName += document.myForm.severnNum[i].value;
					k++;
				}
		}
	}
	else if(rows == 1) {
		k++;
		serialName = document.myForm.severnNum.value;
	}
	if(k != 0) {
		var id = "#dialog";

		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		
		$('input[name=userpass]').val(passw);
		$('input[name=recnum]').val(k);
		$('input[name=serialName]').val(serialName);

		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
		
		//Set the popup window to center
		//$(id).css('top',  winH/2-$(id).height()/2);
		//$(id).css('left', winW/2-$(id).width()/2);
		$(id).css('top',  heightX);
		$(id).css('left', widthX);

	
		//transition effect
		$(id).fadeIn(2000);

		return false;
	}
	else {
		alert("Please choose the record to delete");
	}
}


function printfunc() {
	document.editStatus.action="printview.php";
	document.editStatus.method="post";
	document.editStatus.target="_blank";
	document.editStatus.submit();
}
function finalprintfunc() {
	window.print();
}

function excelfunc(rows,passw,rowCol) {
	
	//alert(document.getElementById('searchValue').value);
	//alert(document.getElementById('searchKey').value);
	var k =0;
        var colValue = '';
	var serialName = '';
	
	if(rows != 1){
		t = 0;
		for (v=0;v<rows;v++) 
		{		
				if (document.myForm.severnId[v].checked==true)
				{ 
					t++;
				}
		}
		for (i=0;i<rows;i++) 
		{		
				if (document.myForm.severnId[i].checked==true)
				{ 
					k++;
					if(k == t) {
						serialName += document.myForm.severnNum[i].value;
					} else {					
						serialName += document.myForm.severnNum[i].value+"','";
					}
				}
		}
	}
	else if(rows == 1) {
		k++;
		serialName = document.myForm.severnNum.value;
	}
	if(k != 0) {
		
                if(rowCol > 0) {
                    for(var r=1;r<=rowCol;r++) {
                        if(document.myForm.columnId[r].selected == true) {
                            if(colValue != '') {
                                colValue += "','";
                            } 
                            colValue += document.myForm.columnId[r].value;
                            //alert(colValue);
                        }
                    }                
                } else if(rowCol == 0) {
                    colValue = '';
                }

                //alert(colValue+" wildoer");
                //alert(serialName+ " moh5845")
                //return false;
                if(colValue != '') {   
                    window.location.href = "mysqltoexcelformat.php?severnIdexcel="+serialName+"&colValue="+colValue;
                    return false;
                } else if (colValue == '') {
                    window.location.href = "mysqltoexcelformat.php?severnIdexcel="+serialName;
                    return false;
                }
		//window.location.href = "mysqltoexcelformat.php?severnIdexcel="+serialName;
		//return false;
	}
	else {
		alert("Please choose the record to download as EXCEL");
	}
}

function pdffunc(rows,passw,rowCol) {
	
	//alert(document.getElementById('searchValue').value);
	//alert(document.getElementById('searchKey').value);
	var k =0;
	var colValue = '';
        var serialName = '';

	if(rows != 1){
		t = 0;
		for (v=0;v<rows;v++) 
		{		
				if (document.myForm.severnId[v].checked==true)
				{ 
					t++;
				}
		}
		for (i=0;i<rows;i++) 
		{		
				if (document.myForm.severnId[i].checked==true)
				{ 
					k++;
					if(k == t) {
						serialName += document.myForm.severnNum[i].value;
					} else {					
						serialName += document.myForm.severnNum[i].value+"','";
					}
				}
		}
	}
	else if(rows == 1) {
		k++;
		serialName = document.myForm.severnNum.value;
	}
	if(k != 0) {
		
                
                if(rowCol > 0) {
                    for(var r=1;r<=rowCol;r++) {
                        if(document.myForm.columnId[r].selected == true) {
                            if(colValue != '') {
                                colValue += "','";
                            } 
                            colValue += document.myForm.columnId[r].value;
                            //alert(colValue);
                        }
                    }                
                } else if(rowCol == 0) {
                    colValue = '';
                }

                //alert(colValue+" wildoer");
                //alert(serialName+ " moh5845")
                //return false;
                if(colValue != '') {   
                    window.location.href = "mysqltopdfformat.php?severnIdpdf="+serialName+"&colValue="+colValue;
                    return false;
                } else if (colValue == '') {
                    window.location.href = "mysqltopdfformat.php?severnIdpdf="+serialName;
                    return false;
                }
		//window.location.href = "mysqltopdfformat.php?severnIdpdf="+serialName;
		//return false;
	}
	else {
		alert("Please choose the record to download as PDF");
	}
}


function excelQuickfunc(rows,passw,rowCol) {
	//alert(rowCol);
        //return false;
	//alert(document.getElementById('searchValue').value);
	//alert(document.getElementById('searchKey').value);
	var k = 0;
        var u = 0;
        var colValue = '';
	var serialName = '';
	
	if(rows != 1){
		t = 0;
		for (v=0;v<rows;v++) 
		{		
				if (document.searchStatus.severnId[v].checked==true)
				{ 
					t++;
				}
		}
		//alert(t);
		for (i=0;i<rows;i++) 
		{		
				if (document.searchStatus.severnId[i].checked==true)
				{ 
					k++;
					if(k == t) {
						serialName += document.searchStatus.severnNum[i].value;
					} else {					
						serialName += document.searchStatus.severnNum[i].value+"','";
					}
				}
		}
	}
	else if(rows == 1) {
		
                if (document.searchStatus.severnId.checked==true) {
                    k++;
                    serialName = document.searchStatus.severnNum.value;
                    //alert("Done");
                    //return false;
                } else {
                    alert("Please choose the record to download as EXCEL");
                    return false;
                }                    
	}
        //alert(k);
        //return false;
	if(k != 0) {
            
            if(rowCol > 0) {
                for(var r=1;r<=rowCol;r++) {
                    if(document.searchStatus.columnId[r].selected == true) {
                        if(colValue != '') {
                            colValue += "','";
                        } 
                        colValue += document.searchStatus.columnId[r].value;
                        //alert(colValue);
                    }
                }                
            } else if(rowCol == 0) {
                colValue = '';
            }
                
            //alert(colValue+" wildoer");
            //alert(serialName+ " moh5845")
            //return false;
            if(colValue != '') {   
                window.location.href = "mysqltoexcelformat.php?severnIdexcel="+serialName+"&colValue="+colValue;
                return false;
            } else if (colValue == '') {
                window.location.href = "mysqltoexcelformat.php?severnIdexcel="+serialName;
                return false;
            }
	}
	else {
		alert("Please choose the record to download as EXCEL");
	}
}

function pdfQuickfunc(rows,passw,rowCol) {
	
	//alert(document.getElementById('searchValue').value);
	//alert(document.getElementById('searchKey').value);
	var k =0;
	var serialName = '';
         var colValue = '';

	if(rows != 1){
		t = 0;
		for (v=0;v<rows;v++) 
		{		
				if (document.searchStatus.severnId[v].checked==true)
				{ 
					t++;
				}
		}
		for (i=0;i<rows;i++) 
		{		
				if (document.searchStatus.severnId[i].checked==true)
				{ 
					k++;
					if(k == t) {
						serialName += document.searchStatus.severnNum[i].value;
					} else {					
						serialName += document.searchStatus.severnNum[i].value+"','";
					}
				}
		}
	}
	else if(rows == 1) {
		k++;
		serialName = document.searchStatus.severnNum.value;
	}
	if(k != 0) {
		
                if(rowCol > 0) {
                    for(var r=1;r<=rowCol;r++) {
                        if(document.searchStatus.columnId[r].selected == true) {
                            if(colValue != '') {
                                colValue += "','";
                            } 
                            colValue += document.searchStatus.columnId[r].value;
                            //alert(colValue);
                        }
                    }

                    /*if(colValue == '') {
                        alert("Please choose the column to download as PDF");
                        return false;
                    }*/
                } else if(rowCol == 0) {
                    colValue = '';
                }
                
                if(colValue != '') {   
                    window.location.href = "mysqltopdfformat.php?severnIdpdf="+serialName+"&colValue="+colValue;
                    return false;
                } else if (colValue == '') {
                    window.location.href = "mysqltopdfformat.php?severnIdpdf="+serialName;
                    return false;
                }
	}
	else {
		alert("Please choose the record to download as PDF");
	}
}


function selectqckallfunc(rows,passw) {
	for (i=0;i<rows;i++) 
	{		
			if (document.myForm.severnId[i].checked==false)
			{ 
				document.myForm.severnId[i].checked = true;
			}
	}
}

function selectqcknonefunc(rows,passw) {
	for (i=0;i<rows;i++) 
	{		
			if (document.myForm.severnId[i].checked==true)
			{ 
				document.myForm.severnId[i].checked = false;
			}
	}
}


function selectallfunc(rows,passw) {
	for (i=0;i<rows;i++) 
	{		
			if (document.searchStatus.severnId[i].checked==false)
			{ 
				document.searchStatus.severnId[i].checked = true;
			}
	}
}

function selectnonefunc(rows,passw) {
	for (i=0;i<rows;i++) 
	{		
			if (document.searchStatus.severnId[i].checked==true)
			{ 
				document.searchStatus.severnId[i].checked = false;
			}
	}
}



function advancedSearch(obj) {
	var searchByMode = document.getElementById('searchBy').value;
	if(searchByMode == '') {
		alert("Please choose the search mode");
		return false;
	}
}
function productDelete(rows,passw) {
	
	document.getElementById('searchValue').value	=	document.getElementById('searchId').value; 
	document.getElementById('searchKey').value		=	document.getElementById('keysearch').value;

	//alert(document.getElementById('searchValue').value);
	//alert(document.getElementById('searchKey').value);
	var k =0;
	var serialName = '';

	if(rows != 1){
		for (i=0;i<rows;i++) 
		{		
				if (document.searchStatus.severnId[i].checked==true)
				{
					serialName += document.searchStatus.severnNum[i].value;
					k++;
				}
		}
	}
	else if(rows == 1) {
            if (document.searchStatus.severnId.checked==true)
            { 
                    serialName += document.searchStatus.severnNum.value;
                    k++;
            }
	}
	if(k != 0) {
		var id = "#dialog";

		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		
		$('input[name=userpass]').val(passw);
		$('input[name=recnum]').val(k);
		$('input[name=serialName]').val(serialName);

		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
		
		//Set the popup window to center
		//$(id).css('top',  winH/2-$(id).height()/2);
		//$(id).css('left', winW/2-$(id).width()/2);
		$(id).css('top',  heightX);
		$(id).css('left', widthX);

	
		//transition effect
		$(id).fadeIn(2000);

		return false;
		
		/*var name=prompt("Please enter your password to confirm delete","");
		if (name == passw) {
			if(k == 1){
				var r = confirm("Are you sure you want to delete the record,"+serialName);
			}
			else {
				var r = confirm("Are you sure you want to delete the records" );
			}

		  if(r == true){
				document.searchStatus.action="productdelete.php";
				document.searchStatus.method="post";
				document.searchStatus.submit();
		  }
		}
		else {
			alert("Please enter correct password");
		}*/
	}
	else {
		alert("Please choose the record to delete");
	}
}

function exportpdf(url) {	
	document.pdfexport.action=url+"/PHPTOHTML/phptohtml.php";
	document.pdfexport.method="post";
	document.pdfexport.submit();
}
function exportexcel() {	
	document.excelexport.action="exportview.php";
	document.excelexport.method="post";
	document.excelexport.submit();
}
function showRights(){
	var privilegeStatus = document.getElementById('privilegeStatus').value;
	if(privilegeStatus == 1){
		document.getElementById('userrights').innerHTML = "Superadmin can add users, edit and even delete users";
	}
	else if(privilegeStatus == 2){
		document.getElementById('userrights').innerHTML = "Admin can only add users and cannot edit or delete users";
	}
	else if(privilegeStatus == 3){
		document.getElementById('userrights').innerHTML = "Normal users does not have the option of adding, editing or deleting users";
	}
	else if(privilegeStatus == 4){
		document.getElementById('userrights').innerHTML = "Other users does not have the option of adding, editing or deleting users like normal users";
	}
	if(privilegeStatus == ''){
		document.getElementById('userrights').innerHTML = "";
	}
}
/*function uploadFile()
{
	var fileUpload				=		document.getElementById('fileUpload');
	if(fileUpload.value=="")
	{
		document.getElementById('fileUploadSpan').innerHTML					=	"Please upload a .xls file";
		fileUpload.focus();
		return false;
	}
	else
	{ 
		pattern2 = /\.xls$|\.XLS$/i
		matchval=fileUpload.value.match(pattern2);
		if(matchval==null)
		{
			document.getElementById('fileUploadSpan').innerHTML					=	"Please upload '.XLS', '.xls' file only and Check your File extention";
			fileUpload.focus();
			return false;
		}
 	} 
}*/
function searchfunc() {
	var searchId		=	document.getElementById('searchId');
	var keysearch		=	document.getElementById('keysearch');

	if(searchId.value == '') {
		document.getElementById('searchIdSpan').innerHTML					=	"Please select the search option";
		document.getElementById('keysearchSpan').innerHTML					=	'';
		searchId.focus();
		return false;
	}
	else if(keysearch.value == '') {
		document.getElementById('searchIdSpan').innerHTML					=	'';
		document.getElementById('keysearchSpan').innerHTML					=	"Please enter the search value";
		keysearch.focus();
		return false;
	}
}
function validateFormField() {
	var fieldName		=	document.getElementById('fieldName');
	var valueName		=	document.getElementById('valueName');
	var fieldStatus		=	document.getElementById('fieldStatus');

	if(fieldName.value == '') {
		document.getElementById('fieldNameSpan').innerHTML					=	"Please select the field name";
		document.getElementById('valueNameSpan').innerHTML					=	'';
		document.getElementById('fieldStatusSpan').innerHTML				=	'';
		fieldName.focus();
		return false;
	}
	else if(valueName.value == '') {
		document.getElementById('fieldNameSpan').innerHTML					=	'';
		document.getElementById('valueNameSpan').innerHTML					=	"Please enter the value name";
		document.getElementById('fieldStatusSpan').innerHTML				=	'';
		valueName.focus();
		return false;
	}
	else if(fieldStatus.value == '') {
		document.getElementById('fieldNameSpan').innerHTML					=	''
		document.getElementById('valueNameSpan').innerHTML					=	'';
		document.getElementById('fieldStatusSpan').innerHTML				=	"Please select the status";
		fieldStatus.focus();
		return false;
	}
	else { 
		document.formfields.action="";
		document.formfields.method="post";
		document.formfields.submit();
	}
}



function validateRegister() {
	var userName		=	document.getElementById('userName');
	var passWord		=	document.getElementById('passWord');
	var activeStatus	=	document.getElementById('activeStatus');
	var privilegeStatus	=	document.getElementById('privilegeStatus');

	if(userName.value == '') {
		document.getElementById('userNameSpan').innerHTML					=	"Please enter the username";
		document.getElementById('passWordSpan').innerHTML					=	'';
		document.getElementById('activeStatusSpan').innerHTML				=	'';
		document.getElementById('privilegeStatusSpan').innerHTML			=	'';
		userName.focus();
		return false;
	}
	else if(passWord.value == '') {
		document.getElementById('passWordSpan').innerHTML					=	"Please enter the password";
		document.getElementById('userNameSpan').innerHTML					=	'';
		document.getElementById('activeStatusSpan').innerHTML				=	'';
		document.getElementById('privilegeStatusSpan').innerHTML			=	'';
		passWord.focus();
		return false;
	}
	else if(activeStatus.value == '') {
		document.getElementById('userNameSpan').innerHTML					=	''
		document.getElementById('passWordSpan').innerHTML					=	'';
		document.getElementById('activeStatusSpan').innerHTML				=	"Please select the status";
		document.getElementById('privilegeStatusSpan').innerHTML			=	'';	
		activeStatus.focus();
		return false;
	}
	else if(privilegeStatus.value == '') {
		document.getElementById('userNameSpan').innerHTML					=	'';
		document.getElementById('passWordSpan').innerHTML					=	'';
		document.getElementById('activeStatusSpan').innerHTML				=	'';
		document.getElementById('privilegeStatusSpan').innerHTML			=	"Please select the privilege";
		privilegeStatus.focus();
		return false;
	}
	else { 
		document.userregister.action="";
		document.userregister.method="post";
		document.userregister.submit();
	}
}


function subfunc() {
	var orderRefNum		=	document.getElementById('orderRefNum');
	var serialNum		=	document.getElementById('serialNumber');
	var customer		=	document.getElementById('customer');

	if(orderRefNum.value == '') {
		document.getElementById('orderRefNumSpan').innerHTML	=	"Please enter the order ref number";
		document.getElementById('serialNumSpan').innerHTML		=	'';
		document.getElementById('customerSpan').innerHTML		=	'';
		orderRefNum.focus();
		return false;
	}
	else if(serialNum.value == '') {
		document.getElementById('serialNumSpan').innerHTML		=	"Please enter the serial number";
		document.getElementById('orderRefNumSpan').innerHTML	=	'';
		document.getElementById('customerSpan').innerHTML		=	'';
		serialNum.focus();
		return false;
	}
	else if(customer.value == '') {
		document.getElementById('customerSpan').innerHTML		=	"Please enter the customer";
		document.getElementById('orderRefNumSpan').innerHTML	=	'';
		document.getElementById('serialNumSpan').innerHTML		=	'';
		customer.focus();
		return false;
	}
	else { 
		document.product.action="";
		document.product.method="post";
		document.product.submit();
	}
}
function viewfunc(obj) {
	document.viewStatus.action="view.php";
	document.viewStatus.method="post";
	document.viewStatus.submit();
}
function editfunc() {
	var severnId = document.getElementById('severnId');

	if(severnId.value == '') {
		document.getElementById('viewIdSpan').innerHTML = "Please select the serial number";
		severnId.focus();
		return false;
	}
	else { 
		document.editStatus.action="edit.php";
		document.editStatus.method="post";
		document.editStatus.submit();
	}
}
function hide(id){
		element=document.getElementById(id);
		if(element!=null){
			element.style.display='none';
		}
}
function show(id){
	element=document.getElementById(id);
	if(element!=null){
		element.style.display='block';
	}
}
function setTextField(ddl) {
	document.getElementById('fieldActualName').value = ddl.options[ddl.selectedIndex].text;
}