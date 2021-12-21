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

    
    
    <title>Add New Book</title>
    <style>
        
        
    </style>

</head>
<body id="formbody">
    <div class="container">
        <div id="mainform">
            <div id="formheader" ><h3><img src="{{url('/images/Logo-01.png')}}" ><h3></div>
            <h3 id="heading">Edit Book Details</h3>
            <form class="mainforms" id="editBook" method="post" action="/admin/updatebook/{{$bookData[0]->book_id}}" >
            @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input  type="text" class="form-control" id="title" name="title" value="{{$bookData[0]->title}}"> 
                  </div>
                  <div class="form-group">
                    <label for="author">Author</label>
                    <input  type="text" class="form-control" id="author" name="author"  value="{{$bookData[0]->author}}">                    
                  </div>
                  <div class="form-group">
                    <label for="genre">Genre</label>
                    <select   id="genre" name="genre" class=" form-control" aria-label="Default select example" value="{{$bookData[0]->genre}}" selected={{$bookData[0]->genre}}>
                      <option value="">Choose Genre</option>
                      <option value="Fiction">Fiction</option>

                      <option value="Action">Action</option>
                      <option value="Novel">Novel</option>
                      <option value="Literature">Literature</option>
                      <option value="Philosophy">Philosophy</option>
                      <option value="Adventure">Adventure</option>
                      <option value="History">History</option>
                      <option value="Fantasy">Fantasy</option>
                      <option value="Drama">Drama</option>
                      <option value="Comedy">Comedy</option>
                      <option value="Manga">Manga</option>
                      <option value="Classic">Classic</option>
                      <option value="Biography">Biography</option>
                    </select>                    
                  </div>
                  <div class="form-group">
                    <label for="imgurl">Image URL</label>
                    <input  type="url" class="form-control" id="imgurl" name="imgurl" value="{{$bookData[0]->imgurl}}">
                    
                  </div>
                  <div class="form-group">
                    <label for="tpages">Total Pages</label>
                    <input  type="text" class="form-control" id="tpages" name="tpages"  value="{{$bookData[0]->totalpages}}">

                  </div>
                  <div class="form-group">
                    <label for="synopsis">Synopsis</label>
                    <textarea  class="form-control" name="synopsis" id="synopsis" form="editBook"  rows="10">{{$bookData[0]->synopsis}}</textarea>
                   
                  </div>

                  <div class="form-group">
                    <label for="quotes">Quotes</label>
                    <textarea class="form-control" name="quotes" id="quotes" form="editBook"   rows="10">{{$bookData[0]->quotes}}</textarea>
                  </div>

                <button type="submit" class="btn btn-danger btn-block">Update</button>
                <a href="/admin" class="btn btn-danger btn-block">Back</a>

              </form>
        </div>
    </div>

    <br>
    <br>
 
    <script type="text/javascript" src="{{ URL::asset('js/editbook.js') }}"></script>



</body>
</html>