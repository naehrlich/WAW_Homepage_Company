

clearEmail = function(id){
	document.getElementById(id).setAttribute('value','');
};

setExampleEmail = function(id){
	var email = document.getElementById(id);
	if(email.innerHTML == ""){
		email.innerHTML = 'example@jsp.com';
		email.setAttribute('value','example@jsp.com');
	}
};

toggleAddress = function(){
	if(document.getElementById('addressCheckbox').checked){
		$( "#addressCont" ).removeClass( "invisible" );
		$( "#addressCont" ).addClass( "visible" );
	}else{
		$( "#addressCont" ).removeClass( "visible" );
		$( "#addressCont" ).addClass( "invisible" );
	}
};

setDisplay = function(mode){
	if(mode == "enterprise"){
		$( "#companyCont" ).removeClass( "invisible" );
		$( "#companyCont" ).addClass( "visible" );	
		
		$("#addressSel").removeClass( "visible" );
		$("#addressSel").addClass( "invisible" );
		$( "#addressCont" ).removeClass( "invisible" );
		$( "#addressCont" ).addClass( "visible" );
	}
	if(mode == "private"){
		$( "#companyCont" ).removeClass( "visible" );
		$( "#companyCont" ).addClass( "invisible" );
				
		$("#addressCheckbox").prop("checked", false);
		$("#addressSel").removeClass( "invisible" );
		$("#addressSel").addClass( "visible" );
		$( "#addressCont" ).removeClass( "visible" );
		$( "#addressCont" ).addClass( "invisible" );
	}
};
