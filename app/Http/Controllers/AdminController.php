<?php

namespace App\Http\Controllers;

use Request;

use Illuminate\Support\Facades\DB;
use App\Models\Book;


class AdminController extends Controller
{
    //get method admin page
    function viewAdmin() {
        // $books = DB::select("select * from books");
        $books=Book::all();

        return view('admin', ['books' => $books]);
        // return view ('admin');
    }



    function viewAddBook() {
        return view('addBook');
    }


    // post method for adding books
    function addBook() {
        $title = Request::input('title');
        $author = Request::input('author');
        $genre = Request::input('genre');
        $imgurl = Request::input('imgurl');
        $totalpages = Request::input('tpages');
        $synopsis = Request::input('synopsis');
        $quotes = Request::input('quotes');

     
        //DB::unprepared("insert into users (username,password) values ('$uname','$pass')");
        DB::insert('insert into books (title, author, genre, imgurl, totalpages, synopsis, quotes) values (?, ?, ?, ?, ?, ?, ?)', [$title, $author, $genre, $imgurl, $totalpages, $synopsis, $quotes]); //sqlinjection
        echo("Book Inserted");
        return redirect('admin');
    }

    function viewEditBook($id) {
        $bookData = DB::select('select * from books where book_id=?',[$id]);
        return view('editbook', ["bookData"=>$bookData]);
    }

// post method to edit  books details for admin

    function updateBook($id) {
        $title = Request::input('title');
        $author = Request::input('author');
        $genre = Request::input('genre');
        $imgurl = Request::input('imgurl');
        $totalpages = Request::input('tpages');
        $synopsis = Request::input('synopsis');
        $quotes = Request::input('quotes');

     
        // DB::insert('insert into books (title, author, genre, imgurl, totalpages, synopsis, quotes) values (?, ?, ?, ?, ?, ?, ?)', [$title, $author, $genre, $imgurl, $totalpages, $synopsis, $quotes]); //sqlinjection
        DB::update("update books set title=?, author=?, genre=?, imgurl=?, totalpages=?, synopsis=?, quotes=? where book_id = ?", [$title, $author, $genre, $imgurl, $totalpages, $synopsis, $quotes, $id]);
        return redirect('admin');
    }

    function deleteBook($id){
        DB::unprepared("delete from books where book_id = '$id'");
        // Book::destroy($id);
        return redirect('admin');
    }

}
