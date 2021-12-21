
    jQuery.validator.addMethod("noSpace", function(value, element) { 
        return value == '' || value.trim().length != 0;  
      }, "No space please and don't leave it empty");
    
      jQuery.validator.addMethod("customEmail", function(value, element) { 
        return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value ); 
      }, "Please enter valid email address!");
   
    
      var $loginForm = $('#loginForm');
      
      if($loginForm.length){
      
      $loginForm.validate({
          rules:{
            
            email: {
                  required: true,
                  customEmail: true,
                  noSpace:true
            },
            password: {
                required: true
            }
            
          },
          messages:{
            email: {
              required: 'Please enter email to login into your account!',
              email: 'Please enter valid email!'
            },
            password: {
                required: 'Please enter password!'
            }
            
          },
          errorPlacement: function(error, element) 
          {
                error.insertAfter( element );
           }
      });
    }