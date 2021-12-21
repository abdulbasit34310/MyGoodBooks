var genreR='{{$bookData[0]->genre}}';
var select=document.getElementById('genre');
console.log(genre);
for(var i=0;i<select.length;i++){
  if(select.options[i].value===genreR){
    select.options[i].selected=true;
  }
}


      
      
      jQuery.validator.addMethod("noSpace", function(value, element) { 
        return value == '' || value.trim().length != 0;  
      }, "No space please and don't leave it empty!");
    
   
      $.validator.addMethod( "alphanumeric", function( value, element ) {
        return this.optional( element ) || /^\w+$/i.test( value );
      }, "Letters, numbers, and underscores only please!" );
   
      $.validator.addMethod( "numbersOnly", function( value, element ) {
        return this.optional( element ) || /^\d+$/i.test( value );
      }, "Number Only please!" );
   


      var $editBook = $('#editBook');
      
      if($editBook.length){
      
      $editBook.validate({
          rules:{
            title: {
              required: true
              
            },
            author: {
              required: true,
            }, 
            genre: {
              required: true
            },
            tpages: {
              required: true,
              numbersOnly:true
            },
            imgurl: {
              required: true,
            },
            synopsis: {
                  required: true,
                  
            }
            
          },
          messages:{
            title: {
              required: 'Please enter title!'
            },
            author: {
              required: 'Please enter author name!'
            },
            genre: {
              required: 'Please enter genre!'
            },
            tpages: {
              required: 'Please enter Total Pages!'
            },
            imgurl: {
              required: 'Please enter Img URL!'
            },
            synopsis: {
              required: 'Please enter synopsis!'
            }
          },
          errorPlacement: function(error, element) 
          {
                error.insertAfter( element );
            }          
           
      });
    }