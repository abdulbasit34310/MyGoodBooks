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
    
    <title>Admin</title>
    <style>
      
       
    </style>
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
        <h2>Admin Panel</h2>
    </div>
    <hr>
<br>

     <a href="/admin/addbook" class="btn btn-danger btn-lg btn-block">Add New Book</a> 


     <br>
    <table id="listTable" class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col"  >Title</th>
            <th scope="col">Author</th>
            <th scope="col">Genre</th>

            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
          <tr>
            <th scope="row">{{$book->book_id}}</th>
            <td ><img class="bookimage" src={{ $book->imgurl }} alt=""><a class="text-center" href="">{{ $book->title }}</a> </td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->genre }}</td>

            <td><a href="/admin/editbook/{{$book->book_id}}" class="btn btn-danger btn-sm">Edit</a><a href="/admin/deletebook/{{$book->book_id}}"  class="btn btn-danger btn-sm delbtn" onclick="return confirm('Do you want to delete this record?')" >Delete</a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
</div>
<br>
<br>

@section('footercontent')


<script>

function deleteRow(e1){
  var row=e1.parentNode.parentNode.remove();
  console.log(row);

}
</script>






</body>
</html>