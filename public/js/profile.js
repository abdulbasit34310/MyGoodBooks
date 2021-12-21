
$(".spicon").click(function(){
  $(this).toggleClass("changeIconColor") 
  var quote = $(this).parent().text();
  req = new XMLHttpRequest();
  alert(quote);
  var url = '/ajaxrequest2?quote=' + quote;
  req.open("GET", url);
  req.send();
  req.onreadystatechange = function() {
      if (req.readyState == 4 && req.status == 200) {
      const JSONResponse = JSON.parse(req.responseText);
    }
  }
  alert('UnLiked');
  $(this).parent().remove();
});

var $changePass = $('#changePass');
    
    if($changePass.length){
    
    $changePass.validate({
        rules:{
          currpassword: {
                required: true,      
          },
          password: {
              required: true
          },
          conpassword: {
              required: true,
              equalTo: '#password'
          }
        },
        messages:{
          currpassword: {
            required: 'Please enter current password'
          },
          password: {
              required: 'Please enter password!'
          },
          conpassword: {
            required: 'Please enter confirm password!',
            equalTo: 'Please enter same password!'
          }
        },
        errorPlacement: function(error, element) 
        {
              error.insertAfter( element );              
         }
    });
  }