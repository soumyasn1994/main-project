function fun(){
    var val_name= /^[A-Za-z]{2,20}$/;
    $name= document.getElementById('fn').value;
  
  
    if(!val_name.test($name)){
       alert("Name must be Alphabets only and should contain alleast 2 letter ");
       document.getElementById('fn').value='';
       $("#name").focus();
       return false;
     }
  }
  function pl(){
   var val_username= /^[A-Za-z][A-Za-z0-9]{3,20}$/;
   $place= document.getElementById('place').value;
 
 
   if(!val_username.test($username)){
      alert("Enter valid Place");
      document.getElementById('place').value='';
      $("#place").focus();
      return false;
    }
 }
  function hn(){
    var val_name= /^[A-Za-z]{2,20}$/;
    $name= document.getElementById('hname').value;
  
  
    if(!val_name.test($name)){
       alert("Name must be Alphabets only and should contain alleast 2 letter ");
       document.getElementById('hname').value='';
       $("#name").focus();
       return false;
     }
  }  
  function phn(){
    var val_phoneno= /^[0-9]{9,12}$/;
    $phoneno= document.getElementById('mob').value;

  
  
    if(!val_phoneno.test($phoneno)){
       alert("enter valid phoneno ");
       document.getElementById('mob').value='';
       $("#phoneno").focus();
       return false;
     }
  }
  function pn(){
    var val_s= /^[0-9]{6}$/;
    $s= document.getElementById('pin').value;
  
  
    if(!val_s.test($s)){
       alert("enter valid pin no ");
       document.getElementById('pin').value='';
       $("#s").focus();
       return false;
     }
     return true;
  }
  function pwd(){
    var val_password=  /^[A-Za-z]\w{5,14}$/;
    $password= document.getElementById('pwd').value;
  
  
    if(!val_password.test($password)){
       alert("Enter valid password! first character must be a letter length");
       document.getElementById('pwd').value='';
       $("#password").focus();
       return false;
     }
  }
  function em(){
   var val_email=  /^[a-zA-Z0-9._-]+\@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
   $email= document.getElementById('email').value;
 
 
   if(!val_email.test($email)){
      alert("Enter valid email");
      document.getElementById('email').value='';
      $("#emaild").focus();
      return false;
    }
 }
  
  
  
  
  
  function ems(){
    var val_email=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    $email= document.getElementById('email').value;
  
  
    if(!val_email.test($email)){
       alert("Enter valid email");
       document.getElementById('email').value='';
       $("#emaild").focus();
       return false;
     }
  }
  function ah(){
    var val_na= /^[0-9]{12}$/;
    $na= document.getElementById('aadhar').value;
  
  
    if(!val_na.test($na)){
       alert("please check your card no ");
       document.getElementById('aadhar').value='';
       $("#na").focus();
       return false;
     }
  }
  function mb() {
      var val = document.getElementById('mob').value;
      if (!val.match(/^[6-9][0-9]{9,9}$/))
      {
          $("#mobiles_l").html('Only Numbers are allowed and must contain 10 number..!').fadeIn().delay(3000).fadeOut();
          document.getElementById('mob').value = "";
          mobiles.focus();
          return false;
      }
      return true;
  }
  function ph(){
   var val_phoneno=/^[0]?[6789]\d{9}$/;
   $phoneno= document.getElementById('mob').value;

 
 
   if(!val_phoneno.test($phoneno)){
      alert("enter valid phoneno ");
      document.getElementById('mob').value='';
      $("#phoneno").focus();
      return false;
    }
 }

  
// function phonenumber(inputtxt)
// {
//   var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
//   if((inputtxt.value.match(phoneno))
//         {
//       return true;
//         }
//       else
//         {
//         alert("message");
//         return false;
//         }
// }

  