$(function(){
	$("#username_error_message").hide();
	$("#email_error_message").hide();
	$("#password_error_message").hide();
	$("#confirm_password_error_message").hide();

	var error_username=false;
	var error_password=false;
	var error_confirm_password=false;
	var error_email=false;


   $("#form_username").focusout(function(){

   check_username();
	});
   $("#form_email").focusout(function(){

   check_email_address();
	});
   $("#form_password").focusout(function(){

   check_password();
	});

   $("#form_confirm_password").focusout(function(){

   check_confirm_password();
	});

function check_username(){
	var username_length = $("#form_username").val().length;
	if(username_length<5|| username_length>8){
		$("#username_error_message").html("Username should be 5-8 character");
		$("#username_error_message").show();
		error_username= true;

	}
	else{
		$("#username_error_message").hide();
	}
}

function check_password(){
var password_length = $("#form_password").val().length;
	if(password_length<6|| password_length>10){
		$("#password_error_message").html("Password should be 6-10 character");
		$("#password_error_message").show();
		error_password=true;
	}
	else{
		$("#password_error_message").hide();
	}

}

function check_email_address(){
var pattern= new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	if (pattern.test($("#form_email").val())){
		$("#email_error_message").hide();
	}
	else{
		$("#email_error_message").html("Invalid Email Address");
		$("#email_error_message").show();
		error_email= true;

	}
}

function check_confirm_password(){

	var password= $("#form_password").val();
	var confirm_password=$("#form_confirm_password").val();
	if (password!=confirm_password) {
		$("#confirm_password_error_message").html("Password Don't Match");
		$("#confirm_password_error_message").show();
		error_confirm_password=true;
		
	}
	else{
			$("#confirm_password_error_message").hide();
		}

}

$("#registraion_form").submit(function(){

error_username=false;
error_password=false;
error_confirm_password=false;
error_email=false;

check_username();
check_password();
check_email_address();
check_confirm_password();

if(error_username==false && error_password==false && error_confirm_password==false && error_email==false){
return true;
}
else{
	return false;
}

});

});