<?php

namespace App\Http\Controllers;

use Request;

use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Book;

class BookController extends Controller
{
     //get method books page
     function viewBooks() {
         if(Request::session()->has('id')){
            $books=Book::all();
            // $books = DB::select("select * from books");
            return view('books', ['books' => $books]);
         }
         else{
             return redirect('login');
         }    
    }

    // post books page
    function searchedBooks() {
        $searchTerm = Request::input('search');
        $books=DB::select(DB::raw("Select * from books where title like '$searchTerm%'"));
       return view('books', ['books' => $books]);
    }

    //get method for adding books to list
    function viewAddToList($book_id) {
        $bookData = DB::select('select * from books where book_id=?',[$book_id]);
        $user_id=Request::session()->get('id');
        $listData=DB::select('select * from lists where book_id=? and user_id=?',[$book_id, $user_id]);
        if(count($listData)>0){
            $error='This book is already in your list';
            return redirect('/goodbookslist')->with('error',$error);    
        }
        else{
            return view('addtolist')->with("bookData",$bookData);
        }
        
    }

    function viewEditList($id) {
        $listData=DB::select('select * from lists natural join books where id=?',[$id]);
        return view('editlist')->with("listData",$listData);
    }


    function updateList($id) {
        $status=Request::input('status');
        $rating=Request::input('rating');
        $pagesread=Request::input('pages');
        $startDate=Request::input('startdate');
        $endDate=Request::input('enddate');
        DB::update("update lists set status=?, user_rating=?, pages_read=?, start_date=?, end_date=? where id = ?", [$status, $rating, $pagesread, $startDate, $endDate, $id]);
        return redirect('goodbookslist');
    }

    // post method for adding books to list
    function addToList($book_id) {

        $status=Request::input('status');
        $rating=Request::input('rating');
        $pagesread=Request::input('pages');
        $startDate=Request::input('startdate');
        $endDate=Request::input('enddate');
        $user_id=Request::session()->get('id');
        DB::insert('insert into lists (user_id, book_id, status, user_rating, pages_read, start_date, end_date) values (?, ?, ?, ?, ?, ?, ?)', [$user_id, $book_id, $status, $rating, $pagesread, $startDate, $endDate]); //sqlinjection
        return redirect('goodbookslist');
    }

    // get method profile
    function viewDetails($id) {
        $bookData = DB::select('select * from books where book_id=?',[$id]);
        $commentData = DB::select('select * from comments natural join users where book_id=? ',[$id]);
        $recommendations = DB::select('select * from books where author=? or genre=? except SELECT *  FROM books where book_id=?;',[$bookData[0]->author, $bookData[0]->genre, $id]);
        // return view('details', ["bookData"=>$bookData ],["commentData"=>$commentData]);
        return view('details')->with("bookData",$bookData)->with("commentData",$commentData)->with("recommendations",$recommendations);
    }
    
    public function xmlhttprequest(){
        $searchTerm= request('search');
        if(strlen($searchTerm)>0){
            $searchResults=DB::select(DB::raw("Select book_id,title from books where title like '$searchTerm%'"));
            return response($searchResults);
        }
    }

    function viewList() {
        if(Request::session()->has('id')){
            $user_id=Request::session()->get('id');
            $listData = DB::select('select * from lists natural join books where user_id=? ',[$user_id]);
            return view('goodbookslist')->with("listData",$listData);
         }
         else{
             return redirect('login');
         }
    }
    
    function deleteListBook($id) {
        DB::unprepared("delete from lists where id = '$id'");
         return redirect('goodbookslist');
    }

    function newComment($book_id) {
        $comment=new Comment;
        $comment->comment=Request::input('newcomment');
        $comment->rating=Request::input('rating');
        $comment->user_id=Request::session()->get('id');
        $comment->book_id=$book_id;
        $comment->created_at = date('Y-m-d H:i:s');

        $comment->save();
        return redirect('/books/details/'.$book_id);
    }
}
