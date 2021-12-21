<!DOCTYPE html>
<html lang="en">
<head>  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" href="/css/styles.css">

    <title>My Good Books</title>
    
</head>
<body id="formbody">
    <div class="container">
        <div id="mainform">
            <div id="formheader" ><h3><img class="responsive" src="images/Logo-01.png"><h3></div>
            <h3 id="heading">Sign up</h3>
            <form class="mainforms" id="registration" method="post" action="/signup" >
            @csrf
                <div class="form-group">
                    <label for="fulltname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fname" placeholder="example: John Doe">
                  </div>
                  
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob">                  
                  </div>

                  <div class="form-group gender">
                    <label for="gender">Gender:</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                      <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                      <label class="form-check-label" for="female">Female</label>
                    </div>
  
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="example: John_Doe@gmail.com">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>

                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="search" class="form-control" id="username" name="username" onkeyup="usernameSuggest();" placeholder="example: John_Doe12">
                    <p id="invalidusername"></p>
                  </div>
            
                  <div class="form-group">
                    <label for="password">Password</label>

                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                  </div>
          
                  <div class="form-group">
                    <label for="confirmpassword">Confirm Password</label>
          
                    <input type="password" class="form-control" id="confirmpassword" name="conpassword"
                      placeholder="Confirm Password">
                  </div>
                <button type="submit" class="btn btn-danger btn-block">Sign up</button>
                <a href="/" class="btn btn-danger btn-block">Back</a>

              </form>
        </div>
    </div>
<br>
<br>

<script type="text/javascript" src="{{ URL::asset('js/signup.js') }}"></script>

</body>
</html>