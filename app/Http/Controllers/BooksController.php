<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User_Rate;

class BooksController extends Controller
{
    public function index()
    {
           $books=DB::table('books')->simplePaginate(10);
        return view('books.index',['books'=>$books]);
    }
 public function show($id)
 {
     $book=Book::find($id);
     return view('books.show',['book'=>$book]);
 }
 public function rate(Request $request)
 {
     $user = \Auth::user();
     $userBook = new User_Rate();
     $userBook->user_id = $user->id;
     $userBook->book_id = $request->id;
     $userBook->rating = $request->rate;
     $userBook->save();
     return redirect()->action('BooksController@index');
 }
}
