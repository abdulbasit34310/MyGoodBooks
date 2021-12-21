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
    <title>Add to List</title>
    

</head>
<body id="formbody">
    <div class="container">
        <div id="mainform">
            <div id="formheader" ><h3><img src="{{url('/images/Logo-01.png')}}" ><h3></div>
            <h3 id="heading">Info</h3>
            <form class="mainforms" id="addlistform" method="post" action="/books/addtolist/{{$bookData[0]->book_id}}" >
            @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input disabled type="text" class="form-control" id="title" name="title"  value="{{$bookData[0]->title}}">
                  </div>
                  <div class="form-group">
                    <label for="author">Author</label>
                    <input disabled type="text" class="form-control" id="author" name="author"  value="{{$bookData[0]->author}}">                    
                  </div>
                  <div class="form-group">
                    <label for="author">Genre</label>
                    <input disabled type="text" class="form-control" id="genre" name="genre" value="{{$bookData[0]->genre}}">                    
                  </div> 
                  <div class="form-group">
                    <label for="status">Status</label>
                    <select   id="status" name="status" class=" form-control" aria-label="Default select example">
                    <option value="">Choose Status</option>
                      <option value="Completed">Completed</option>
                      <option value="Reading">Reading</option>
                      <option value="On Hold">On Hold</option>
                      <option value="Plan to Read">Plan to read</option>
                      <option value="Dropped">Dropped</option>
                    </select>                    
                  </div>


                  <div class="form-group">
                    <label for="rating">Rating</label>
                    <select   id="rating" name="rating"  class="form-select form-control" aria-label="Default select example">
                      <option value="">Choose Rating</option>
                      <option value="10">10 Masterpiece</option>
                      <option value="9">9 Brilliant</option>
                      <option value="8">8 Very Good</option>
                      <option value="7">7 Good</option>
                      <option value="6">6 Fine</option>
                      <option value="5">5 Average</option>
                      <option value="4">4 Bad</option>
                      <option value="3">3 Very Bad</option>
                      <option value="2">2 Horrible</option>
                      <option value="1">1 Appalling</option>

                    </select>                    
                  </div>

                  
                  <div class="form-group form-inline">
                    <label for="pages">Pages Read</label>
                    <input required type="number" style="width=100%" class="form-control ml-3 mr-3" id="pages" name="pages" value=0 min=0  >
                    <label >out of </label>
                    <label id="tpages" style="margin-left: 5px;" > {{$bookData[0]->totalpages}}</label>
                    <p id="invalidpages"></p>

                  </div>
                  <div class="form-group">
                    <label for="startdate">Starting Date</label>
                    <input type="date" class="form-control" id="startdate" name="startdate">

                  </div>
                  <div class="form-group">
                    <label for="enddate">End Date</label>
                    <input type="date" class="form-control" id="enddate" name="enddate">

                  </div>

                  <button type="submit"   class="btn btn-danger btn-block">Proceed</button>

                  <a href="/books" class="btn btn-danger btn-block">Back</a>

              </form>
        </div>
        <br>
        <br>
    </div>

<script type="text/javascript" src="{{ URL::asset('js/addtolist.js') }}"></script>
    
</body>
</html>