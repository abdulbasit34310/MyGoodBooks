@extends ('layouts.footer')

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
    <link rel="stylesheet" href="/css/admin.css">

    <title>My Good Books List</title>
    <style>
      
      
    </style>
</head>
<body>
    <div class="container">
      <nav id="nav" class="navbar navbar-expand-md ">
        <a class="navbar-brand" href="index.html"><img src="images/Logo-01.png" ></a>
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
                      <a class="dropdown-item" href="/profile">Change Password</a>
                      <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                  </div></li>
                
                
            </ul>
        </div>
    </nav>
        <br>
        
<br>
<div class="container">
    <div class="text-center">
        <h2>My Good Books List</h2>
    </div>
    <hr>
<br>
    <table id="listTable" class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col"  >Title</th>
            <th scope="col">Author</th>
            <th scope="col">Genre</th>
            <th scope="col">Rating</th>
            <th scope="col">Status</th>
            <th scope="col">Progress</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
         @for ($i = 0; $i < count($listData); $i++)
          <tr>
            <th scope="row">{{$i+1}}</th>
            <td ><img class="bookimage" src="{{$listData[$i]->imgurl}}" alt=""><a class="text-center" href="/books/details/{{$listData[$i]->book_id}}">{{$listData[$i]->title}}</a> </td>
            <td>{{$listData[$i]->author}}</td>
            <td>{{$listData[$i]->genre}}</td>
            <td>{{$listData[$i]->user_rating}}/10</td>
            <td>{{$listData[$i]->status}}</td>
            <td>{{$listData[$i]->pages_read}}/{{$listData[$i]->totalpages}}</td>
            <td><a href="/goodbookslist/editlist/{{$listData[$i]->id}}" class="btn btn-danger btn-sm">Edit</a><a href="/goodbookslist/deletelist/{{$listData[$i]->id}}" onclick="return confirm('Do you want to delete this book from your list')" class="btn btn-danger btn-sm delbtn" >Delete</a></td>
            </tr>
          @endfor
              <tr>
            
        </tbody>
      </table>
</div>
</div>
<br>
<br>

</body>
</html>