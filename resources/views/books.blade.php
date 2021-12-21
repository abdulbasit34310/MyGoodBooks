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
    <link rel="stylesheet" href="/css/books.css">
<style>
    .jumbotron-billboard .img {        
    opacity: 0.5;
    background: #000 url("images/book2.jpg") top center no-repeat;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
    position:absolute;
    top:0;
    left:0;
    z-index:1;
}
</style>

    <title>Home</title>

</head>
<body >
    <header>

    <div class="container">
    @csrf
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
        </div>
        </header>
<div class="container">
        <div class="jumbotron jumbotron-billboard">
            <div class="img"></div>
              <div class="container">
                  <div class="row">
                    <div class="col-4 col-md-3 col-lg-2">
                        <img src="images/logo2-01.png" alt="" srcset="" >
                    </div>
                    <div class="col-8 col-md-9 col-lg-10">
                        <h1>My Good Books</h1>
                        <p>View and Search your favourite books from our library of books</p>
                @if(session('username')=="Shehroz_Ahmad")
                <div>
                <a class="btn btn-danger btn-lg" href="/admin">Admin Menu</a>
                </div>
                @endif
                    </div>
                </div>
                <div id="searchbar" >
                    <form action="" id="searchform" method="post" action="/searchedbooks">
                    @csrf
                       
                        <div style="margin-bottom: 0px !important;  padding-top=0px !important;" class="input-group rounded">
                            
                            <input required type="text" class="form-control rounded" placeholder="Search" name="search" id="textSearch" onkeyup="searchSuggest();" />
                            <button type="submit" class="btn btn-danger" >
                            
                                <i  class="fas fa-search"></i></button>

                        </div>
                        <div style="margin-top=0px !important; padding-top=0px !important; background-color:lightgrey;" id="search_suggest"></div>

                                
                        </form>   
                  </div>
              </div>
          </div>
          
        <div class="row text-center"  > 
          @foreach ($books as $book)
            <div class="col-4 col-md-3 col-lg-2 bookthumbnail">
                <div class="thumbnail" >
                    <a href="/books/details/{{$book->book_id}}"><img class="bookimage" src= {{ $book->imgurl }} alt="">
                    <div class="middle">
                        <p style="font-weight: bolder;">{{ $book->title }}</p>by
                        <p style="font-family: Cambria;">{{ $book->author }}</p>
                    </div>
                </a>
                    <div class="caption">
                        <a  href="/books/addtolist/{{$book->book_id}}" class="btn btn-danger btn-sm mt-3">Add To List </a>
                    </div>
                </div>
            </div>
            @endforeach 
           
        </div>

        <br>
        <hr>
    
    </div>
    </div>
    @section('footercontent')


    <script type="text/javascript" src="{{ URL::asset('js/books.js') }}"></script>

</body>
</html>

       