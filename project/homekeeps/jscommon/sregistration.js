$(document).ready(function(){	
  $("#userreg").on("submit",function(){
    var val_fname= /^[a-zA-Z]{3,10}$/;
		var val_lname= /^[a-zA-Z]*$/;
		var val_hnnumber= /^[0-9]$/;
    var val_hname= /^[a-zA-Z]*$/;
    var val_place=/^[a-zA-Z]*$/;
    var val_mob= /^[0-9]{9,12}$/;
    var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    var val_pin= /^[0-9]{6,6}$/;
    var val_username= /^[0-9a-zA-Z]+$/;
    var val_password= /^[0-9a-zA-Z]+$/;
    

    $fname= $('#fn').val();
		$lname= $('#ln').val();
		$hnumber= $('#hno').val();
    $hname= $('#hname').val();
		$place= $('#pla').val();
		$mob= $('#mob').val();
    $email= $('#email').val();
    $pin= $('#pin').val();
    $email=$('#').val();
    $pwd= $('#pwd').val();
   


    if(!val_fname.test($fname)){
      alert("Enter Name,Invalid Name!");
      return false;
    }
    else if (!val_lname.test($lname)) {
      alert(" Enter A Valid lastnamne ");
      return false;
    }
		else if (!val_hnnumber.test($hnumber)) {
      alert("enter hnumber");
      return false;
    }
		else if (!val_hname.test($hname)) {
      alert("enter hname");
      return false;
		}
		else if (!val_place.test($place)) {
      alert("enter place");
      return false;
    }
    else if (!val_mob.test($mob)) {
      alert("enter valid phone number");
      return false;
    }
    else if (!val_email.test($email)) {
      alert("enter email");
      return false;
    }
    else if (!val_pin.test($pin)) {
      alert("enter pin");
      return false;
    } 
    else if (!val_username.test($uname)) {
      alert("enter username");
      return false;
    }
    else if (!val_password.test($password)) {
      alert("enter password");
      return false;
    }
   
    else {
      return true;
    }
  });
  
  $("#fn").focusout(function(){
    var val_fname=  /^[a-zA-Z]{3,10}$/;
    $fname= $('#fn').val();
	if($fname == "" ){
		$('#fn_error').html(" Enter Name");
		return false;
		}
    else if(!val_fname.test($fname)){
		$(this).css('border','2px solid red');
		$('#fn_error').html("Invalid Name!");
		return false;
        }
    else {
		$(this).css('border','NONE');
		$('#fname_error').html("");
      return true;
    }
  });
     
  $("#lname").focusout(function(){
    var val_lname=  /^[a-zA-Z]*$/;
    $lname= $('#lname').val();
	if($lname == "" ){
		$('#lname_error').html(" Enter Name");
		return false;
		}
    else if(!val_lname.test($lname)){
		$(this).css('border','2px solid red');
		$('#lname_error').html("Invalid Name , Name Must be Alphabets Only");
		return false;
        }
    else {
		$(this).css('border','NONE');
		$('#lname_error').html("");
      return true;
    }
  });
   
    $("#hname").focusout(function(){
    var val_hname=/^[0-9a-zA-Z]+$/;
    $hname= $('#hname').val();
	if($hname == "" ){
		$('#hname_error').html(" Enter hname");
		return false;
		}
    else if(!val_hname.test($hname)){
		$(this).css('border','2px solid red');
		$('#hname_error').html("Invalid hname , Enter A Valid hname");
		return false;
    }
    else {
		$(this).css('border','NONE');
		$('#hname_error').html("");

      return true;
    }
	});
	$("#place").focusout(function(){
    var val_place=/^[0-9a-zA-Z]+$/;
    $place= $('#place').val();
	if($hname == "" ){
		$('#hname_error').html(" Enter hname");
		return false;
		}
    else if(!val_hname.test($hname)){
		$(this).css('border','2px solid red');
		$('#hname_error').html("Invalid hname , Enter A Valid hname");
		return false;
    }
    else {
		$(this).css('border','NONE');
		$('#hname_error').html("");

      return true;
    }
  });
	$("#hnumber").focusout(function(){
		var val_hnumber= /^[0-9]$/;
		$hnumber= $('#hnumber').val();
		if($hnumber == "" ){
		$('#hnumber_error').html(" Enter hnumber");
		return false;
		}
		else if(!val_hnumber.test($hnumber)){
			$(this).css('border','2px solid red');
	  		$('#hnumber_error').html("Phone Number Must Contain Digits Only,Maximum 12 digits including code");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#hnumber_error').html("");
		return true;
			}
	});
	
        $("#mob").focusout(function(){
		var val_mob= /^[0-9]{9,12}$/;
		$mob= $('#mob').val();
		if($mob == "" ){
		$('#mob_error').html(" Enter phone number");
		return false;
		}
		else if(!val_mob.test($mob)){
			$(this).css('border','2px solid red');
	  		$('#mob_error').html("Phone Number Must Contain Digits Only,Maximum 12 digits including code");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#mob_error').html("");
		return true;
			}
  });
         $("#email").focusout(function(){
			var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
			$email= $('#email').val();
			if($email == "" ){
			$('#email_error').html(" Enter Email");
			return false;
		}
			
			else if(!val_email.test($email)){
				$(this).css('border','2px solid red');
	  	  		$('#email_error').html("Invalid email , Email must Like abc@gmail.com");	
				return false;
			}
			else {
				$(this).css('border','NONE');
				$('#email_error').html("");
				return true;
			}
	});
		$("#pin").focusout(function(){
		var val_pin= /^[0-9]{6,6}$/;
		$pin= $('#pin').val();
		if($pin == "" ){
		$('#pin_error').html(" Enter pin");
		return false;
		}
		else if(!val_pin.test($pin)){
			$(this).css('border','2px solid red');
	  	  	$('#pin_error').html("Enter A Valid pin , pin Must Contain Numbers Only");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#pin_error').html("");
		return true;
		}
	});

       $("#uname").focusout(function(){
		var val_username= /^[0-9a-zA-Z]+$/;
		$uname= $('#uname').val();
		if(!val_username.test($uname)){
			$(this).css('border','2px solid red');
	  	  	$('#uname_error').html("Invalid Username ");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#uname_error').html("");

		return true;
		}
  });
   
		$("#pwd").focusout(function(){
		var val_password= /^[0-9a-zA-Z]+$/;
		$password= $('#password').val();
		if(!val_password.test($pwd)){
			$(this).css('border','2px solid red');
	  	  	$('#pwd_error').html("Invalid password ");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#pwd_error').html("");
		return true;
		}
  });
  
 });