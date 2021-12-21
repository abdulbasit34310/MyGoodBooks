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
    <link rel="stylesheet" href="/css/login.css">

    <title>My Good Books</title>

</head>
<body id="formbody">
    <div class="container">
        <div id="mainform">
            <div id="formheader" ><h3><img src="images/Logo-01.png" ><h3></div>
            <h3 id="heading">Login</h3>
            <form class="mainforms" id="loginForm" method="post" action="/login">
            @csrf
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="icon"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="input-with-icon" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="icon"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="input-with-icon" id="password" name="password" placeholder="Password">
              </div>
              <?php
            if (empty($error)){}
            else{echo $error; } 
        ?>
                <button type="submit" class="btn btn-danger btn-block">Login</button>
                <a href="/" class="btn btn-danger btn-block">Back</a>
                
                <div id="modal">
                  <div class="text-center mt-3">
                    <a href="#" data-target="#pwdModal" id="forgotPassword" data-toggle="modal">Forgot Password?</a>
                  </div>
        
                </div>
                
                <div class="text-center">
                  <p class="mt-3">Or Login as</p>
                  <a href=""><i class="fab fa-facebook-square"></i></a><a href=""><i class="fab fa-twitter-square"></i></a><a href=""><i class="fab fa-google-plus-square"></i></a>
                
                </div>
                <sign style="font-weight: 100; margin-left: 70px; ">Not a member? <a href="/signup">Register</a></sign>
                  
              </form>
        </div>

     <!--modal-->
     <div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h2 class="text-center">Forgot Password?</h2>
            <button type="button" class="close ml-0 " data-dismiss="modal" aria-hidden="true"><i class="fas fa-window-close"></i></button>
          </div>

          <div class="modal-body">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="text-center">
                    <p>If you have forgotten your password you can reset it here.</p>
                    <div class="panel-body">

                      <form id="forgotPass" method="post" action="/forgotPassword">
                      @csrf
                      <div class="form-group" form="forgotPass">
                        <input class="form-control" placeholder="E-mail Address" form="forgotPass" name="email" type="email">
                      </div>    
                        <button class="btn  btn-danger btn-block" form="forgotPass" type="submit">Send Password</button>
                        <?php 
                        if (empty($password)){
                        }else{
                          $alert = "<script>alert('Your $password')</script>";
                          echo $alert;
                        }
                        ?>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <div class="col-md-12">
              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>

<script type="text/javascript" src="{{ URL::asset('js/login.js') }}"></script>

</body>
</html>