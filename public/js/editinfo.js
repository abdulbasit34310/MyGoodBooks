
      jQuery.validator.addMethod("noSpace", function(value, element) { 
        return value == '' || value.trim().length != 0;  
      }, "No space please and don't leave it empty");
    
      jQuery.validator.addMethod("customEmail", function(value, element) { 
        return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value ); 
      }, "Please enter valid email address!");
   
      $.validator.addMethod( "alphanumeric", function( value, element ) {
        return this.optional( element ) || /^\w+$/i.test( value );
      }, "Letters, numbers, and underscores only please" );
    
      var $editInfoForm = $('#editInfoForm');
      
      if($editInfoForm.length){
      
      $editInfoForm.validate({
          rules:{
            fname: {
              required: true,
              noSpace: true
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
            }
            
          },
          messages:{
            fname: {
              required: 'Please enter full name!'
            },
            dob: {
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
