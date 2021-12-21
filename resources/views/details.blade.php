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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/details.css">

    <title>My Good Books</title>

</head>
<body>
    <div class="container">
        <nav id="nav" class="navbar navbar-expand-md ">
            <a class="navbar-brand" href="/"><img src="{{url('/images/Logo-01.png')}}" ></a>
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
    <div class="container">
        <div class="row">
        
            <div class="col-12 col-md-8"  id="border">

                <div class="row">
                    <div class="col-3 col-md-2">
                       <img id="mainimg" src="{{$bookData[0]->imgurl}}" alt="">
    
                    </div>
                    <div class="col-9 col-md-6 text-center">
                        <h2 style="margin-left: 0px;"> {{$bookData[0]->title}}</h2>
    
                    </div>
                    <div class="col-12 col-md-4">
                        <h5>Genre: <span>{{$bookData[0]->genre}}</span> </h5>
                        <h5>Author: <span>{{$bookData[0]->author}}</span></h5>
                    </div>

                </div>
                <a href="/books/addtolist/{{$bookData[0]->book_id}}" class="btn btn-danger btn-block mt-3 ">Add to List</a>

                <div id="syn" class="mt-3">
                <h4>Synopsis</h4>
                    <p>{{$bookData[0]->synopsis}}</p>
                <hr>
                <h4>Quotes</h4>

                <?php
                    $str = $bookData[0]->quotes;
                    $quotes=(explode("...",$str));
                ?>            

                @foreach($quotes as $quote)
                <div>
                <p id="q">{{$quote}} <span class="spicon"><i class="fa fa-thumbs-up"></i></span></p>
                <hr>
                </div>

            @endforeach
            </div>
            </div>
            
            <div class="col-12 col-md-3 offset-md-1 text-center " id="rec" >
                <h4>Recommendations</h4>
                <div class="row">
                @foreach($recommendations as $recommendation)
                    <div class="col-4 col-sm-4 col-md-12">
                        <div class="thumbnail"  >
                            <a class="recbooks" href="/books/details/{{$recommendation->book_id}}"><img class="bookimage" src="{{$recommendation->imgurl}}" alt=""></a>                                
                        </div>
                       
                    </div>
                    @endforeach 

                </div>                
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 5%;">
        <div class="col-12 col-md-8">
            <div >
                <h2>Comments & Reviews</h2>
                <hr>
                @foreach ($commentData as $comment)
                <div>
                
                    <h5>{{$comment->username}}</h5>
                    <div class="text-right">{{$comment->rating}} stars out of 5</div>
                <p style="text-indent: 2em;">{{$comment->comment}}</p>
                <div class="text-right" style="font-size:10px; font-style:italic;">Commented at: {{$comment->created_at}}</div>
                </div>
                <hr>
                @endforeach
                
            </div>
            <div>
                <form  action="/books/details/newcomment/{{$bookData[0]->book_id}}" id="comment" method="post">
                @csrf
                <h4 >Please Rate</h4>
                    <fieldset form="comment" class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </fieldset>
        
                    <textarea name="newcomment" form="comment" id="comment" name="comment"  class="form-control" rows="5" placeholder="Add new Comment"></textarea>
                    <input type="submit" class="btn btn-danger mt-3" value="Add New Comment">
                </form>
            </div>

        </div>
        <br>
        
</div>
    
</div>
<br>
<br>
@section('footercontent')


<script>
    $(".spicon").click(function(){
        $(this).toggleClass("changeIconColor")  
        // var str = document.getElementById('q').innerText;
        var str = $(this).parent().text();
        req = new XMLHttpRequest();
        var url = '/ajaxrequest1?quote=' + str;
        req.open("GET", url);
        req.send();
        req.onreadystatechange = function() {
            if (req.readyState == 4 && req.status == 200) {
            const JSONResponse = JSON.parse(req.responseText);
           
            for (let item in JSONResponse) {
                alert("You already liked this quote.");
          }
        }
      };
      // alert('Liked');
    });

</script>

</body>
</html>