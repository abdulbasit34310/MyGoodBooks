<?php

namespace App\Http\Controllers;
use Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //get method index page
    
    //get method signup page
    function signup() {
        return view('signup');
    }

    // get method login page
    function login() {
        return view('login');
    }

    // Post method for sign up
    function registerUser() {
        $fullname=Request::input('fname');
        $email=Request::input('email');
        $gender=Request::input('gender');
        $dob=Request::input('dob');
        $uname = Request::input('username');
        $pass = Request::input('password');

        //DB::unprepared("insert into users (username,password) values ('$uname','$pass')");
        DB::insert('insert into users (fullname, dob, gender, email, username, password) values (?, ?, ?, ?, ?, ?)', [$fullname, $dob, $gender, $email, $uname, $pass]); //sqlinjection
        
        return redirect('login');
    }

    //Post method for login
    function match() {
        $email = Request::input('email');
        $pass = Request::input('password');
        
        $loginData = DB::select('select user_id,username, password from users where email = ?', [$email]); 

        if (count($loginData) > 0){
            
            foreach ($loginData as $tablepass) {

                if (($tablepass->password) == $pass){
                    $username=$tablepass->username;
                    $id=$tablepass->user_id;
                    Request::session()->put('username', $username);
                    Request::session()->put('id', $id);

                    // return view('books', ["user"=>$user]);
                    return redirect('/books');
                }
                else{
                    $error='Password does not match';
                    return view('login')->with('error',$error);
                }
            }
        }
        // return view('books');
    }


    function logout() {
        if(Request::session()->has('id')){
            Request::session()->forget('id');
            Request::session()->forget('username');
            Request::session()->flush();
        }
        return redirect('/');
    }

    // get method profile
    function viewProfile() {
        $id=session()->get('id');
        if(session()->has('id')){
            $userData = DB::select('select * from users where user_id=?',[$id]);
            $bookData=DB::select('select * from lists where user_id=?',[$id]);
            $quoteData=DB::select('select * from quotes where user_id=?',[$id]);
            $totalBooks=count($bookData);
            return view('profile')->with("userData",$userData)->with("totalbooks", $totalBooks)->with("quoteData", $quoteData);
        }
    }

    // get method edit profile
    function editProfile($id) {
        $userData = DB::select('select * from users where user_id=?',[$id]);   
        return view('editinfo', ["userData"=> $userData]);
    }

    // Username Suggest
    public function xmlhttprequest1(){
        $searchTerm= request('username');
        if(strlen($searchTerm)>0){
            $searchResults=DB::select(DB::raw("Select username from users where username like '$searchTerm%'"));
            return response($searchResults);
        }
    }

    // Like Quote Post Method
    public function likeQuote(){
        $quote= request('quote');
        $user_id = session()->get('id');
        $quotesData=DB::select("Select * from quotes where user_id= '$user_id' and quotes= '$quote'");
        if(count($quotesData) < 1){
            DB::insert('insert into quotes (user_id, quotes) values (?, ?)', [$user_id, $quote]);
        }
        else{
            $error = 'Quote is already Liked';
            return response($quotesData);
        }
        //return response($quotesData);
    }

    
    function deleteQuote(){
        $quote= request('quote');
        $user_id = session()->get('id');
        DB::unprepared("delete from quotes where user_id= '$user_id' and quotes= '$quote'");
        return redirect ('profile');
    }

    // Post method for edit info
    function updateProfile($id) {
        $fullname=Request::input('fname');
        $email=Request::input('email');
        $gender=Request::input('gender');
        $dob=Request::input('dob');
        $description=Request::input('description');
        DB::update("update users set fullname=?, email=?, gender=?, dob=?, description=? where user_id = ?", [$fullname, $email, $gender, $dob, $description, $id]);
        return redirect('profile');
    }

    function updatePassword(){
        $currpassword = Request::input('currpassword');
        $password = Request::input('password');
        $id=session()->get('id');
        $a = DB::select('select password from users where user_id = ?', [$id]);
        echo "<script type='text/javascript'>alert('{$a[0]->password}');</script>";
        if($a[0]->password == $currpassword ){
            DB::update("update users set password=? where user_id=?", [$password,  $id]);
            return redirect('profile');
        }   
    }
    
    function updatePicture($user_id) {
        $pic = Request::file('picture');
        $picName = $pic->getClientOriginalName();
        $picType = $pic->getClientOriginalExtension();
        $picSize = $pic->getSize();
        $pic->move('uploads',$picName);
        $destination = 'uploads/'.$picName;
        DB::update("update users set user_picture=? where user_id=?", [$destination,  $user_id]);
        return redirect('/profile');
    }

    function forgotPassword()
    {
        $email = Request::input('email');
        $password = DB::select('select password from users where email = ?', [$email]);
        if (count($password) > 0) {
            $STRING = json_encode($password);
            return view('login')->with('password', $STRING);
        } else {
            $error = 'Email does not match';
            return view('login')->with('error', $error);
        }
    }
}