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
    <link rel="stylesheet" href="/css/index.css">

    <title>My Good Books</title>
    <style>
        
        
 
        
    </style>
</head>
<body >
    
    <nav id="nav"class="navbar navbar-expand-md " >
        <a class="navbar-brand" href="/"><img src="images/Logo-01.png" ></a>
        <button class="navbar-toggler " data-toggle="collapse" data-target="#navbar">
            <span  class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div id="navbar" class="navbar-collapse collapse text-center" >
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item"><a class="nav-link"  href="/books">Home</a></li>
                <li class="nav-item"><a class="nav-link"  href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link"  href="/login">Login</a></li>
                <li class="nav-item"><a class="nav-link"  href="/signup">Sign up</a></li>
            </ul>
        </div>
    </nav> 
    
    




    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img  src="images/book5.jpg" class="d-block w-100 carimage responsive" alt="...">
            
          </div>
          <div class="carousel-item">
            <img  src="images/book3.jpg" class="d-block w-100 carimage responsive" alt="...">
            
          </div>
          <div class="carousel-item">
            <img  src="images/book4.jpg" class="d-block w-100 carimage responsive" alt="...">

          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<br><br><br>
        <br>
        <br>
      <div class="container">
        <div class="row "  >
            <div class="col-12 col-md-6" >

                <div class="text-center" id="content">
                    <h1>Welcome to My Good Books</h1>
                    <p>You can search your favourite books from our library</p>
                    <a href="/books"  class="btn btn-lg btn-danger ">View All Books</a>
                </div>
            </div>
            <div class="col-12 col-md-4 offset-md-1 text-center" >
                <img style="height: 250px; margin-top: 10px;" src="https://img.freepik.com/free-vector/library-interior-empty-room-reading-with-books-wooden-shelves_33099-1722.jpg?size=626&ext=jpg" alt="" srcset="">
            </div>

        </div>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <h1 class="text-center">Features</h1>
        <br>
        <br>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="cards ml-auto mr-auto ">
                    <h4>What can you do?</h4>
                    <ul>
                        <li>Search through variety of books</li>
                        <li>View reviews about your favourite books</li>
                        <li>Make your own book list to keep track of books you read</li>
                    </ul>
                   
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="cards ml-auto mr-auto ">
                    <h4>What can you do?</h4>
                    <ul>
                        <li>Sign in to your account</li>
                        <li>Make your own profile</li>
                        <li>Edit your info anytime</li>
                    </ul>
                   
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="cards ml-auto mr-auto ">
                    <h4>What can you do?</h4>
                    <ul>
                        <li>Build community by giving opinions and ratings</li>
                        <li>See recommended books based on your search</li>
                        <li>Like & Use quotes from different books</li>
                    </ul>
                   
                </div>
            </div>

        </div>

        
      </div>

            <br><br>
            <hr>
            <br><br>
            @section('footercontent')


</body>
</html>