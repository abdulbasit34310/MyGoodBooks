
    function usernameSuggest() {
      var str = document.getElementById('username').value;
      document.getElementById("invalidusername").innerHTML = "";
      document.getElementById("invalidusername").style.border = "";

      usernameReq = new XMLHttpRequest();

      var url = '/ajaxrequest?username=' + str;
      usernameReq.open("GET", url);
      usernameReq.send();
      usernameReq.onreadystatechange = function() {
        if (usernameReq.readyState == 4 && usernameReq.status == 200) {
          const JSONResponse = JSON.parse(usernameReq.responseText);
          for (let item in JSONResponse) {
            console.log(JSONResponse[item].username);
            document.getElementById("invalidusername").innerHTML += JSONResponse[item].username + "<br>";
            document.getElementById("invalidusername").style.border = "1px solid black";
          }
        }
      };
    }


jQuery.validator.addMethod("noSpace", function(value, element) { 
  return value == '' || value.trim().length != 0;  
}, "No space please and don't leave it empty");

jQuery.validator.addMethod("customEmail", function(value, element) { 
  return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value ); 
}, "Please enter valid email address!");

$.validator.addMethod( "alphanumeric", function( value, element ) {
  return this.optional( element ) || /^\w+$/i.test( value );
}, "Letters, numbers, and underscores only please" );

var $registrationForm = $('#registration');

if($registrationForm.length){

$registrationForm.validate({
    rules:{
      fname: {
        required: true
      },
      dob: {
        required: true
      },
      gender: {
        required: true
      },
      username: {
        required: true,
        //alphanumeric is the custom method, we defined in the above
        alphanumeric: true
      },
      email: {
            required: true,
            customEmail: true,
            noSpace:true
      },
      password: {
          required: true,
      },
      conpassword: {
          required: true,
          equalTo: '#password'
      }
    },
    messages:{
      fname: {
        required: 'Please enter full name!'
      },
      age: {
        required: 'Please enter DOB!'
      },
      gender: {
        required: 'Please enter gender!'
      },
      username: {
        required: 'Please enter username!'
      },
      email: {
        required: 'Please enter email!',
        email: 'Please enter valid email!'
      },
      password: {
          required: 'Please enter password!',
      },
      conpassword: {
        required: 'Please enter confirm password!',
        equalTo: 'Please enter same password!'
      }
    },
    errorPlacement: function(error, element) 
    {
      if (element.is(":radio")) 
      {
          error.appendTo(element.parents('.gender'));
      }
      else 
      {   
          error.insertAfter( element );
      }          
     }
});
}