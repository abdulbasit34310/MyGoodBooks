<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/styles.css">

    
    <title>My Good Books</title>
    <style>
        
        
        
    </style>

</head>
<body id="formbody">
    <div class="container">
        <div id="mainform">
            <div id="formheader" ><h3><img src="{{url('/images/Logo-01.png')}}" ><h3></div>
            <h3 id="heading">Profile Info</h3>
            <form class="mainforms" id="editInfoForm" method="post" action="/profile/updateprofile/{{$userData[0]->user_id}}">
            @csrf
              <div class="form-group">
                <label for="fulltname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fname" value="{{$userData[0]->fullname}}">
              </div>
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="dd/MM/yyyy" value="{{$userData[0]->dob}}">                    
                  </div>

                  <div class="form-group gender">
                    <label for="gender">Gender:</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="male" value="male" >
                      <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                      <label class="form-check-label" for="female">Female</label>
                    </div>
  
                  </div>
                  
                  
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  name="email" value="{{$userData[0]->email}}">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="desc">Description</label>
                  <textarea class="form-control" name="description" id="desc" form="editInfoForm"  rows="10">{{$userData[0]->description}}</textarea>
                </div>

                <button type="submit" class="btn btn-danger btn-block">Proceed</button>
                <a href="/profile" class="btn btn-danger btn-block">Back</a>

              </form>
        </div>
        <br><br>
    </div>



    <script type="text/javascript" src="{{ URL::asset('js/editinfo.js') }}"></script>
   <script>

    
      var genderR='{{$userData[0]->gender}}';
      var radio=document.querySelectorAll('input[type="radio"]');

      for(var i=0;i<radio.length;i++){
        if(radio[i].value==genderR){
          radio[i].checked=true;
      }}

      </script>
  
  





</body>
</html>