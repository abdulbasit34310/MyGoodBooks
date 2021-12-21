@extends ('layouts.footer')
@extends ('layouts.header')

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
    <link rel="stylesheet" href="/css/profile.css">



    <link rel="stylesheet" href="styles.css">
    <title>Profile</title>

</head>

<body>

    <div class="container">
        <nav id="nav" class="navbar navbar-expand-md ">
            <a class="navbar-brand" href="/"><img src="images/Logo-01.png" ></a>
            <button class="navbar-toggler " data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div id="navbar" class="navbar-collapse collapse text-center" >
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item"><a class="nav-link"  href="/books">Home</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/goodbookslist">My Good Books List</a></li>

                    <li class="nav-item">
                        <div class="dropdown">
                        <button class="btn btn-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            
                          <p class="dropdown-item">Signed in as:<br> <span id="username">{{session('username')}}</span> </p>
                          <hr>
                          <a class="dropdown-item" href="/profile">Profile</a>
                          <a class="dropdown-item" href="/profile#changepass">Change Password</a>
                          <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                      </div></li>
                    
                    
                </ul>
            </div>
        </nav>
    <br>

    
<br>

    <h2 class="text-center">Profile</h2>
    <hr>
    <br>
        <div class="row">
            <div class="col-4 col-sm-4 col-md-4 text-center">
               <img id= "profileimg" src="{{$userData[0]->user_picture}}" > 
               <a href="#" name="changepic" class="btn btn-danger mt-4 btn-block" data-target="#chpicModal" data-toggle="modal">Change Profile Picture</a>
            </div>

            <div class="col-5  col-sm-5 offset-1 offset-md-0  col-md-4  pl-6 " id="profilecard">
                <h1 style="margin-top: 30px;">{{$userData[0]->fullname}}</h1>
                <h5>Email: {{$userData[0]->email}}</h5>
            </div>

            <div class="col-md-4">
                <table class="table">
                    <tr>
                        <th>Username: </th>
                        <td>{{$userData[0]->username}}</td>
                    </tr>
                    <tr>
                        <th>DOB: </th>
                        <td>{{$userData[0]->dob}}</td>
                    </tr>
                    <tr>
                        <th>Gender </th>
                        <td>{{$userData[0]->gender}}</td>
                    </tr>
                    <tr>
                        <th>Total Books in Lists </th>
                        <td>{{$totalbooks}}</td>
                    </tr>
                </table>
                <a href="/profile/editprofile/{{$userData[0]->user_id}}" class="btn btn-danger btn-block">Edit Info</a>
                <a href="#" name="changepass" class="btn btn-danger btn-block" data-target="#chpwdModal" data-toggle="modal">Change Password</a>
            </div>          
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-12 col-md-5" >
                <div class="blocks">
                    <h2>Description</h2>
                    <p>{{$userData[0]->description}}</p>    
                </div>
            </div>

            <div class="col-12 col-md-6 offset-md-1 blocks" >
                <h2>Favourite Quotes</h2>
                @foreach ($quoteData as $quote)
                <p id="del"> {{$quote->quotes}} <span class="spicon"><i class="fas fa-trash"></i></span></p>
                @endforeach
            </div>
        </div>
   
    </div>
   <br>
   <br>

 <!--modal-->
 <div style="color: rgb(123, 23, 23); font-weight: bold;" id="chpwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header text-center">
            <h4 >Change Password</h4>
            <button type="button" class="close ml-0" data-dismiss="modal" aria-hidden="true">×</button>
            
        </div>
        <div class="modal-body" >
            <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="text-center">
                            
                            <p>Please provide information here to change your password</p>
                              <div class="panel-body">
                                  <form id="changePass" method="post" action="/profile/updatepassword">
                                      @csrf  
                                      <div class="form-group">
                                          <input class="form-control" form="changePass" placeholder="Enter Current Password" name="currpassword" type="password">
                                      </div>

                                      <div class="form-group">
                    
                                        <input type="password" class="form-control" form="changePass" id="password" name="password" placeholder="Enter New Password">
                                      </div>
                              
                                      <div class="form-group">
                              
                                        <input type="password" form="changePass" class="form-control" id="confirmpassword" name="conpassword" placeholder="Re-enter New Password">
                                      </div>

                                      <input class="btn  btn-danger btn-block" form="changePass" value="Change Password" type="submit">
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

  <div style="color: rgb(123, 23, 23); font-weight: bold;" id="chpicModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header text-center">
            <h4 >Change Profile Picture</h4>
            <button type="button" class="close ml-0" data-dismiss="modal" aria-hidden="true">×</button>
            
        </div>
        <div class="modal-body" >
            <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="text-center">
                            
                            <p>Please upload picture u want</p>
                              <div class="panel-body">
                                  <form id="changePic" method="post" action="/profile/changepic/{{$userData[0]->user_id}}" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-group">
                                          <input type="file" form="changePic" name="picture" maxlength="30" size="30" >
                                      </div>
                                      <input class="btn  btn-danger btn-block" form="changePic" value="Upload Picture" type="submit">
                                  </form >
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


        <script type="text/javascript" src="{{ URL::asset('js/profile.js') }}"></script>

        @section('footercontent')
@endsection
</body>
</html>