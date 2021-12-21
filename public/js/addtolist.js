
      var tpages=$('#tpages').html();
      var topages=Number(tpages);
      var pagefield=document.getElementById("pages");
      pagefield.setAttribute("max", topages);

      
      var $addlistForm = $('#addlistform');
      
      if($addlistForm.length){
      
      $addlistForm.validate({
          rules:{
            
            status: {
                  required: true
            },
            rating: {
                required: true
            }
            
          },
          messages:{
            status: {
              required: 'Please Choose Status'
            },
            rating: {
                required: 'Please enter your rating'
            }
            
          },
          errorPlacement: function(error, element) 
          {
                error.insertAfter( element );
           }
      });
    }

    